<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

trait UpdatesPhoto
{

    public function update(Request $request)
    {
        $this->validatePhoto($request);

        $photo = $this->savePhoto($request->photo);

        $oldPhoto = $request->user()->photo;
        if (!empty($oldPhoto)) {
            $this->disk()->delete($oldPhoto);
        }

        return tap($request->user())->update(compact('photo'));
    }

    protected function validatePhoto(Request $request)
    {
        $size = config('toolkit.photo_max_filesize');

        $this->validate($request, [
            'photo' => "required|max:{$size}|mimes:jpeg,png,gif",
        ]);
    }

    public function destroy(Request $request)
    {
        $photo = $request->user()->photo;

        if (!empty($photo)) {
            $this->disk()->delete($photo);
        }

        return tap($request->user())->update(['photo' => null]);
    }

    protected function disk()
    {
        return Storage::disk('photos');
    }

    protected function savePhoto($file): string
    {
        $image = $this->resizeImage($file->path());

        $path = strtolower(Str::random(10) . '.jpg');

        $this->disk()->put($path, $image);

        return basename($path);
    }

    protected function resizeImage(string $path): string
    {
        $image = (new ImageManager)->make($path)->orientate();

        $size = config('toolkit.photo_size');

        if ($image->width() !== $size || $image->height() !== $size) {
            $image = $image->fit($size);
        }

        return $image->encode('jpg');
    }
}
