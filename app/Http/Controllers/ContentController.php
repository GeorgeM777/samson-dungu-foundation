<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\SiteSetting;
use App\Models\HeroSlide;
use App\Models\ImpactStat;
use App\Models\Program;
use App\Models\ImpactStory;
use App\Models\LeadershipTeam;
use App\Models\SiteImage;

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
        $data = $request->except('_token', '_method');

        foreach ($data as $key => $value) {
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }

        return back()->with('success', 'Settings updated successfully.');
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

        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('hero', $imageName, 'public');

        HeroSlide::create([
            'image' => '/storage/' . $path,
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
            if ($slide->image && Storage::disk('public')->exists(ltrim($slide->image, '/storage/'))) {
                Storage::disk('public')->delete(ltrim($slide->image, '/storage/'));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('hero', $imageName, 'public');
            $data['image'] = '/storage/' . $path;
        }

        $slide->update($data);

        return back()->with('success', 'Slide updated.');
    }

    public function deleteHeroSlide($id)
    {
        HeroSlide::findOrFail($id)->delete();
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
            if ($program->image && Storage::disk('public')->exists(ltrim($program->image, '/storage/'))) {
                Storage::disk('public')->delete(ltrim($program->image, '/storage/'));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('programs', $imageName, 'public');
            $data['image'] = '/storage/' . $path;
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
            if ($program->image && Storage::disk('public')->exists(ltrim($program->image, '/storage/'))) {
                Storage::disk('public')->delete(ltrim($program->image, '/storage/'));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('programs', $imageName, 'public');
            $data['image'] = '/storage/' . $path;
        }

        $program->update($data);
        return back()->with('success', 'Program updated.');
    }

    public function deleteProgram($id)
    {
        Program::findOrFail($id)->delete();
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
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('stories', $imageName, 'public');
            $data['image'] = '/storage/' . $path;
        }

        ImpactStory::create($data);
        return back()->with('success', 'Story added.');
    }

    public function updateStory(Request $request, $id)
    {
        $story = ImpactStory::findOrFail($id);
        $data = $request->only(['title', 'description', 'link', 'order', 'is_active']);

        if ($request->hasFile('image')) {
            if ($story->image && Storage::disk('public')->exists(ltrim($story->image, '/storage/'))) {
                Storage::disk('public')->delete(ltrim($story->image, '/storage/'));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('stories', $imageName, 'public');
            $data['image'] = '/storage/' . $path;
        }

        $story->update($data);
        return back()->with('success', 'Story updated.');
    }

    public function deleteStory($id)
    {
        ImpactStory::findOrFail($id)->delete();
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
            $image = $request->file('photo');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('leaders', $imageName, 'public');
            $data['photo'] = '/storage/' . $path;
        }

        LeadershipTeam::create($data);
        return back()->with('success', 'Leader added.');
    }

    public function updateLeader(Request $request, $id)
    {
        $leader = LeadershipTeam::findOrFail($id);
        $data = $request->only(['name', 'position', 'phone', 'email', 'bio', 'order', 'is_active']);

        if ($request->hasFile('photo')) {
            if ($leader->photo && Storage::disk('public')->exists(ltrim($leader->photo, '/storage/'))) {
                Storage::disk('public')->delete(ltrim($leader->photo, '/storage/'));
            }
            $image = $request->file('photo');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('leaders', $imageName, 'public');
            $data['photo'] = '/storage/' . $path;
        }

        $leader->update($data);
        return back()->with('success', 'Leader updated.');
    }

    public function deleteLeader($id)
    {
        LeadershipTeam::findOrFail($id)->delete();
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

        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('site', $imageName, 'public');

        SiteImage::create([
            'key' => $request->key,
            'label' => $request->label,
            'description' => $request->description,
            'group' => $request->group ?? 'general',
            'image' => '/storage/' . $path,
        ]);

        return back()->with('success', 'Image added.');
    }

    public function updateImage(Request $request, $id)
    {
        $image = SiteImage::findOrFail($id);
        $data = $request->only(['key', 'label', 'description', 'group']);

        if ($request->hasFile('image')) {
            if ($image->image && Storage::disk('public')->exists(ltrim($image->image, '/storage/'))) {
                Storage::disk('public')->delete(ltrim($image->image, '/storage/'));
            }
            $uploaded = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $uploaded->getClientOriginalExtension();
            $path = $uploaded->storeAs('site', $imageName, 'public');
            $data['image'] = '/storage/' . $path;
        }

        $image->update($data);
        return back()->with('success', 'Image updated.');
    }

    public function deleteImage($id)
    {
        SiteImage::findOrFail($id)->delete();
        return back()->with('success', 'Image deleted.');
    }
}
