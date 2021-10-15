<?php


use Illuminate\Support\Facades\Storage;

if (!function_exists('storage_url')) {
    function storage_url($path): string
    {
        return Storage::url($path);
    }
}

if (!function_exists('getYoutubeIdFromUrl')) {
    function getYoutubeIdFromUrl($url)
    {
        $parts = parse_url($url);
        if (isset($parts['query'])) {
            parse_str($parts['query'], $qs);
            if (isset($qs['v'])) {
                return $qs['v'];
            } else if (isset($qs['vi'])) {
                return $qs['vi'];
            }
        }
        if (isset($parts['path'])) {
            $path = explode('/', trim($parts['path'], '/'));
            return $path[count($path) - 1];
        }
        return false;
    }
}
