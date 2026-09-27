<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\SiteSetting;
use App\Models\HeroSlide;
use App\Models\ImpactStat;
use App\Models\Program;
use App\Models\ImpactStory;
use App\Models\LeadershipTeam;
use App\Models\SiteImage;
use App\Models\Video;

class ContentController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'slides' => HeroSlide::count(),
            'stats' => ImpactStat::count(),
            'programs' => Program::count(),
            'stories' => ImpactStory::count(),
            'leaders' => LeadershipTeam::count(),
            'settings' => SiteSetting::count(),
            'images' => SiteImage::count(),
            'videos' => Video::count(),
        ];
        return view('admin.content.dashboard', compact('stats'));
    }

    public function settings()
    {
        $settings = SiteSetting::orderBy('group')->orderBy('label')->get()->groupBy('group');
        return view('admin.content.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'founder_portrait' => 'nullable|file|mimes:jpg,jpeg,png,webp,pdf|max:10240',
        ]);

        $data = $request->except('_token', '_method', 'founder_portrait');

        foreach ($data as $key => $value) {
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }

        if ($request->hasFile('founder_portrait')) {
            $setting = SiteSetting::where('key', 'founder_portrait')->first();
            $directory = public_path('founder-media');
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            $image = $request->file('founder_portrait');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($directory, $imageName);
            $newPath = '/samson-dungu-foundation/public/founder-media/' . $imageName;

            if ($setting?->value && file_exists($this->storedPublicPath($setting->value))) {
                unlink($this->storedPublicPath($setting->value));
            }

            SiteSetting::where('key', 'founder_portrait')->update(['value' => $newPath]);
        }

        return back()->with('success', 'Settings updated successfully.');
    }

    public function videos()
    {
        $videos = Video::orderBy('order')->orderBy('id')->get();
        return view('admin.content.videos', compact('videos'));
    }

    public function storeVideo(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'order' => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $this->storeVideoThumbnail($request->file('thumbnail'));
        }

        $data['order'] = $data['order'] ?? (Video::max('order') + 1);
        $data['is_active'] = true;
        Video::create($data);

        return back()->with('success', 'Video added.');
    }

    public function updateVideo(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'order' => 'nullable|integer|min:0',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        unset($data['thumbnail']);

        if ($request->hasFile('thumbnail')) {
            $newThumbnail = $this->storeVideoThumbnail($request->file('thumbnail'));
            if ($video->thumbnail && file_exists($this->storedPublicPath($video->thumbnail))) {
                unlink($this->storedPublicPath($video->thumbnail));
            }
            $data['thumbnail'] = $newThumbnail;
        }

        $video->update($data);
        return back()->with('success', 'Video updated.');
    }

    public function deleteVideo($id)
    {
        $video = Video::findOrFail($id);
        if ($video->thumbnail && file_exists($this->storedPublicPath($video->thumbnail))) {
            unlink($this->storedPublicPath($video->thumbnail));
        }
        $video->delete();
        return back()->with('success', 'Video deleted.');
    }

    private function storeVideoThumbnail($image): string
    {
        $directory = public_path('images/videos');
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move($directory, $imageName);

        return '/images/videos/' . $imageName;
    }

    public function heroSlides()
    {
        $slides = HeroSlide::orderBy('order')->get();
        return view('admin.content.hero_slides', compact('slides'));
    }

    public function storeHeroSlide(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $imagePath = $this->storeContentImage($request->file('image'), 'hero');

        HeroSlide::create([
            'image' => $imagePath,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'order' => HeroSlide::max('order') + 1,
            'is_active' => true,
        ]);

        return back()->with('success', 'Slide added successfully.');
    }

    public function updateHeroSlide(Request $request, $id)
    {
        $slide = HeroSlide::findOrFail($id);

        $data = $request->only(['title', 'subtitle', 'order', 'is_active']);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($slide->image && file_exists($this->storedPublicPath($slide->image))) {
                unlink($this->storedPublicPath($slide->image));
            }
            $data['image'] = $this->storeContentImage($request->file('image'), 'hero');
        }

        $slide->update($data);

        return back()->with('success', 'Slide updated.');
    }

    public function deleteHeroSlide($id)
    {
        $slide = HeroSlide::findOrFail($id);
        // Delete the image file
        if ($slide->image && file_exists($this->storedPublicPath($slide->image))) {
            unlink($this->storedPublicPath($slide->image));
        }
        $slide->delete();
        return back()->with('success', 'Slide deleted.');
    }

    public function impactStats()
    {
        $stats = ImpactStat::orderBy('order')->get();
        return view('admin.content.impact_stats', compact('stats'));
    }

    public function storeImpactStat(Request $request)
    {
        ImpactStat::create($request->only(['number', 'label', 'order']));
        return back()->with('success', 'Stat added.');
    }

    public function updateImpactStat(Request $request, $id)
    {
        ImpactStat::findOrFail($id)->update($request->only(['number', 'label', 'order', 'is_active']));
        return back()->with('success', 'Stat updated.');
    }

    public function deleteImpactStat($id)
    {
        ImpactStat::findOrFail($id)->delete();
        return back()->with('success', 'Stat deleted.');
    }

    public function programs()
    {
        $programs = Program::orderBy('order')->get();
        return view('admin.content.programs', compact('programs'));
    }

    public function storeProgram(Request $request)
    {
        $request->validate(['title' => 'required', 'short_description' => 'required']);

        $data = $request->only(['title', 'icon', 'short_description', 'order']);
        $data['bullets'] = array_filter(array_map('trim', explode("\n", $request->bullets ?? '')));
        $data['stats'] = array_filter(array_map('trim', explode("\n", $request->stats ?? '')));
        $data['is_active'] = true;

        if ($request->hasFile('image')) {
            $data['image'] = $this->storeContentImage($request->file('image'), 'programs');
        }

        Program::create($data);
        return back()->with('success', 'Program added.');
    }

    public function updateProgram(Request $request, $id)
    {
        $program = Program::findOrFail($id);

        $data = $request->only(['title', 'icon', 'short_description', 'order', 'is_active']);
        $data['bullets'] = array_filter(array_map('trim', explode("\n", $request->bullets ?? '')));
        $data['stats'] = array_filter(array_map('trim', explode("\n", $request->stats ?? '')));

        if ($request->hasFile('image')) {
            if ($program->image && file_exists($this->storedPublicPath($program->image))) {
                unlink($this->storedPublicPath($program->image));
            }
            $data['image'] = $this->storeContentImage($request->file('image'), 'programs');
        }

        $program->update($data);
        return back()->with('success', 'Program updated.');
    }

    public function deleteProgram($id)
    {
        $program = Program::findOrFail($id);
        if ($program->image && file_exists($this->storedPublicPath($program->image))) {
            unlink($this->storedPublicPath($program->image));
        }
        $program->delete();
        return back()->with('success', 'Program deleted.');
    }

    public function stories()
    {
        $stories = ImpactStory::orderBy('order')->get();
        return view('admin.content.stories', compact('stories'));
    }

    public function storeStory(Request $request)
    {
        $request->validate(['title' => 'required', 'description' => 'required']);

        $data = $request->only(['title', 'description', 'link', 'order']);
        $data['is_active'] = true;

        if ($request->hasFile('image')) {
            $data['image'] = $this->storeContentImage($request->file('image'), 'stories');
        }

        ImpactStory::create($data);
        return back()->with('success', 'Story added.');
    }

    public function updateStory(Request $request, $id)
    {
        $story = ImpactStory::findOrFail($id);
        $data = $request->only(['title', 'description', 'link', 'order', 'is_active']);

        if ($request->hasFile('image')) {
            if ($story->image && file_exists($this->storedPublicPath($story->image))) {
                unlink($this->storedPublicPath($story->image));
            }
            $data['image'] = $this->storeContentImage($request->file('image'), 'stories');
        }

        $story->update($data);
        return back()->with('success', 'Story updated.');
    }

    public function deleteStory($id)
    {
        $story = ImpactStory::findOrFail($id);
        if ($story->image && file_exists($this->storedPublicPath($story->image))) {
            unlink($this->storedPublicPath($story->image));
        }
        $story->delete();
        return back()->with('success', 'Story deleted.');
    }

    public function leaders()
    {
        $leaders = LeadershipTeam::orderBy('order')->get();
        return view('admin.content.leaders', compact('leaders'));
    }

    public function storeLeader(Request $request)
    {
        $request->validate(['name' => 'required', 'position' => 'required', 'bio' => 'required']);

        $data = $request->only(['name', 'position', 'phone', 'email', 'bio', 'order']);
        $data['is_active'] = true;

        if ($request->hasFile('photo')) {
            $data['photo'] = $this->storeContentImage($request->file('photo'), 'leaders');
        }

        LeadershipTeam::create($data);
        return back()->with('success', 'Leader added.');
    }

    public function updateLeader(Request $request, $id)
    {
        $leader = LeadershipTeam::findOrFail($id);
        $data = $request->only(['name', 'position', 'phone', 'email', 'bio', 'order', 'is_active']);

        if ($request->hasFile('photo')) {
            if ($leader->photo && file_exists($this->storedPublicPath($leader->photo))) {
                unlink($this->storedPublicPath($leader->photo));
            }
            $data['photo'] = $this->storeContentImage($request->file('photo'), 'leaders');
        }

        $leader->update($data);
        return back()->with('success', 'Leader updated.');
    }

    public function deleteLeader($id)
    {
        $leader = LeadershipTeam::findOrFail($id);
        if ($leader->photo && file_exists($this->storedPublicPath($leader->photo))) {
            unlink($this->storedPublicPath($leader->photo));
        }
        $leader->delete();
        return back()->with('success', 'Leader deleted.');
    }

    public function images()
    {
        $images = SiteImage::orderBy('group')->orderBy('label')->get();
        return view('admin.content.images', compact('images'));
    }

    public function storeImage(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:site_images,key',
            'label' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $imagePath = $this->storeContentImage($request->file('image'), 'site');

        SiteImage::create([
            'key' => $request->key,
            'label' => $request->label,
            'description' => $request->description,
            'group' => $request->group ?? 'general',
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Image added.');
    }

    public function updateImage(Request $request, $id)
    {
        $imageModel = SiteImage::findOrFail($id);
        $data = $request->only(['key', 'label', 'description', 'group']);

        if ($request->hasFile('image')) {
            if ($imageModel->image && file_exists($this->storedPublicPath($imageModel->image))) {
                unlink($this->storedPublicPath($imageModel->image));
            }
            $data['image'] = $this->storeContentImage($request->file('image'), 'site');
        }

        $imageModel->update($data);
        return back()->with('success', 'Image updated.');
    }

    public function deleteImage($id)
    {
        $imageModel = SiteImage::findOrFail($id);
        if ($imageModel->image && file_exists($this->storedPublicPath($imageModel->image))) {
            unlink($this->storedPublicPath($imageModel->image));
        }
        $imageModel->delete();
        return back()->with('success', 'Image deleted.');
    }

    private function storeContentImage(UploadedFile $image, string $directory): string
    {
        $relativeDirectory = 'images/' . $directory;
        $absoluteDirectory = public_path($relativeDirectory);

        if (!is_dir($absoluteDirectory)) {
            mkdir($absoluteDirectory, 0755, true);
        }

        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move($absoluteDirectory, $imageName);

        return '/samson-dungu-foundation/public/' . $relativeDirectory . '/' . $imageName;
    }

    private function storedPublicPath(string $path): string
    {
        $relativePath = ltrim($path, '/');
        $legacyPrefix = 'samson-dungu-foundation/public/';

        if (str_starts_with($relativePath, $legacyPrefix)) {
            $relativePath = substr($relativePath, strlen($legacyPrefix));
        }

        return public_path($relativePath);
    }
}