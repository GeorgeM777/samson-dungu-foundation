<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'description', 'url', 'thumbnail', 'order', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function getEmbedUrlAttribute(): ?string
    {
        $host = strtolower(parse_url($this->url, PHP_URL_HOST) ?? '');
        $path = trim((string) parse_url($this->url, PHP_URL_PATH), '/');

        if ($host === 'youtu.be') {
            $videoId = explode('/', $path)[0] ?? '';
        } elseif (in_array($host, ['youtube.com', 'www.youtube.com', 'm.youtube.com', 'www.youtube-nocookie.com'], true)) {
            parse_str((string) parse_url($this->url, PHP_URL_QUERY), $query);
            $videoId = $query['v'] ?? '';

            if (!$videoId && preg_match('~(?:embed|shorts)/([^/?]+)~', $path, $matches)) {
                $videoId = $matches[1];
            }
        } elseif (in_array($host, ['vimeo.com', 'www.vimeo.com', 'player.vimeo.com'], true) && preg_match('~(?:video/)?(\d+)~', $path, $matches)) {
            return 'https://player.vimeo.com/video/' . $matches[1];
        } else {
            return null;
        }

        return preg_match('~^[A-Za-z0-9_-]{6,}$~', $videoId) ? 'https://www.youtube.com/embed/' . $videoId : null;
    }

    public function getIsDirectFileAttribute(): bool
    {
        $path = (string) parse_url($this->url, PHP_URL_PATH);
        return (bool) preg_match('/\.(mp4|webm|ogg)$/i', $path);
    }

    public function getPreviewImageAttribute(): ?string
    {
        if ($this->thumbnail) {
            return asset(ltrim($this->thumbnail, '/'));
        }

        if ($this->embed_url && str_contains($this->embed_url, 'youtube.com/embed/')) {
            $videoId = basename(parse_url($this->embed_url, PHP_URL_PATH));
            return 'https://i.ytimg.com/vi/' . $videoId . '/hqdefault.jpg';
        }

        return null;
    }
}