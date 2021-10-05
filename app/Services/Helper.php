<?php


use Illuminate\Support\Facades\Storage;

if (!function_exists('storage_url')) {
    function storage_url($path): string
    {
        return Storage::url($path);
    }
}
