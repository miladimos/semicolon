<?php

namespace App\Traits;

use Carbon\Carbon;

use App\Models\File;

use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

trait FileUploader
{

    private $disk = 'public';

    private $defaultUploadfolderName = 'upload';

    private $ds = DIRECTORY_SEPARATOR;
    private $model = File::class;

    /**
     * Image Sizes
     *
     * @var string
     */
    private $sizes = [
        'thumbnail' => [
            'width' => '120',
            'height' => '120'
        ],
        'small' => '',
        'medium' => '',
        'original' => '',
    ];


    public function uploadOneImage(UploadedFile $uploadedFile, $path = null)
    {

        $path = $path ?? $this->defaultUploadfolderName;

        if ($uploadedFile->isValid()) {

            $image = Image::make($uploadedFile->getRealPath());
            $year = Carbon::now()->year;
            $month = Carbon::now()->month;
            $day = Carbon::now()->day;

            $fileName = $uploadedFile->getClientOriginalName();
            $fileExt  = $uploadedFile->getClientOriginalExtension();
            $mimeType = $uploadedFile->getClientMimeType();
            $fileSize = $uploadedFile->getSize();

            $uploadPath = "{$path}{$this->ds}{$year}{$this->ds}{$month}{$this->ds}{$day}";


            $fullUploadedPath = public_path($uploadPath . $this->ds . $fileName);

            $dirPath = public_path($uploadPath);

            $this->mkdir_if_not_exists($dirPath);

            if (file_exists($fullUploadedPath)) {
                $finalFileName = Carbon::now()->timestamp . "-{$fileName}";

                $image->save($dirPath . $this->ds .  $finalFileName);

                return url($uploadPath . $this->ds . $finalFileName);
            }

            $image->save($fullUploadedPath);

            return url($uploadPath . $this->ds . $fileName);
        }

        return false;
    }

    // $path = $request->photo->storeAs('images', 'filename.jpg', 'disk');

    public function uploadOneFile(UploadedFile $uploadedFile, $path = null,  $disk = 'public')
    {

        $path = $path ?? $this->defaultUploadfolderName;

        if ($uploadedFile->isValid()) {
            $year  = Carbon::now()->year;
            $month = Carbon::now()->month;
            $day   = Carbon::now()->day;

            $fileName = $uploadedFile->getClientOriginalName();
            $fileExt  = $uploadedFile->getClientOriginalExtension();
            $mimeType = $uploadedFile->getClientMimeType();
            $fileSize = $uploadedFile->getSize();

            $uploadPath = "{$path}{$this->ds}{$year}{$this->ds}{$month}{$this->ds}{$day}";

            $fullUploadedPath = public_path($uploadPath . $this->ds . $fileName);

            $dirPath = public_path($uploadPath);

            $this->mkdir_if_not_exists($dirPath);

            if (file_exists($fullUploadedPath)) {
                $finalFileName = Carbon::now()->timestamp . "-{$fileName}";

                $uploadedFile->move($dirPath, $finalFileName);


                return url($uploadPath . $this->ds . $finalFileName);
            }

            $uploadedFile->move($dirPath, $fileName);

            return url($uploadPath . $this->ds . $fileName);
        }

        return response()->json([
            'data' => 'File is Broken Or Not Valid!'
        ]);
    }

    public function deleteImage($image)
    {
        //
    }

    function mkdir_if_not_exists($dirPath)
    {
        if (!file_exists($dirPath)) {
            mkdir($dirPath, 0777, true);
        }
    }

    /**
     * Method for determining whether the uploaded file is
     * an image type.
     *
     * @return bool
     */
    public function isImage()
    {
        $mime = $this->getMimeType();

        // The $imageMimes property contains an array of file extensions and
        // their associated MIME types. We will loop through them and look for
        // the MIME type of the current SymfonyUploadedFile.
        foreach ($this->imageMimes as $imageMime) {
            if (in_array($mime, (array) $imageMime)) {
                return true;
            }
        }

        return false;
    }
}
