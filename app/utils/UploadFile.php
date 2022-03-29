<?php

namespace App\Utils;

class UploadFile
{
    public function uploadIamge($filename)
    {
        if (!is_dir(__DIR__ . '/../../public/uploads')) {
            mkdir(__DIR__ . '/../../public/uploads');
        }

        if ($filename && $filename['tmp_name']) {
            $image = explode('.', $filename['name']);
            $imageExtension = end($image);

            $imageName = uniqid() . "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/uploads/' . $imageName;

            move_uploaded_file($filename['tmp_name'], $imagePath);

            return $imageName;
        }
    }
}