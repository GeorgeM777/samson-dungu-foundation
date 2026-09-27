<?php

namespace Tests\Unit;

use App\Models\Video;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
    public function test_youtube_links_are_converted_to_embed_urls(): void
    {
        $video = new Video(['url' => 'https://www.youtube.com/watch?v=abc123_XYZ']);

        $this->assertSame('https://www.youtube.com/embed/abc123_XYZ', $video->embed_url);
    }

    public function test_short_vimeo_links_are_converted_to_embed_urls(): void
    {
        $video = new Video(['url' => 'https://vimeo.com/123456789']);

        $this->assertSame('https://player.vimeo.com/video/123456789', $video->embed_url);
    }

    public function test_unrecognized_sites_are_not_iframed(): void
    {
        $video = new Video(['url' => 'https://example.org/watch/abc123']);

        $this->assertNull($video->embed_url);
    }

    public function test_direct_video_files_are_detected(): void
    {
        $video = new Video(['url' => 'https://cdn.example.org/impact-film.mp4']);

        $this->assertTrue($video->is_direct_file);
    }
}