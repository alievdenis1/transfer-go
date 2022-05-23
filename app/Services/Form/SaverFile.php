<?php

namespace App\Services\Form;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class SaverFile
{
    public function save(string $filePath, UploadedFile $file): string
    {
        $filePath = "public/$filePath";
        $fileName = uniqid() . "_" . $file->getClientOriginalName();
        $fileSrc = "storage/$filePath/$fileName";
        Storage::putFileAs($filePath, $file, $fileName);

        return $fileSrc;
    }
}
