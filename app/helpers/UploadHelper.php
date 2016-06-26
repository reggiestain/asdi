<?php

use Carbon\Carbon;

class UploadHelper
{

    /**
     * @param $upload
     * @return array of the added image names
     */
    public static function uploadFile($field,$folder='')
    {
        $path = public_path() . '/uploads';

        if(!empty($folder))
        {
            if(!file_exists( $path. '/' .$folder ))
            {
                mkdir(public_path() . '/uploads/'.$folder, 0775);
            }

            $path = $path . '/' . $folder;
        }


        $storage = new \Upload\Storage\FileSystem($path);
        $file = new \Upload\File($field, $storage);

		$file_name_original = $file->getName();
		$file_name_cleaned = str_replace("'", "", $file_name_original);
		$file_name_cleaned = str_replace("/", "_", $file_name_cleaned);
		$file_name_cleaned = str_replace(" ", "_", $file_name_cleaned);

        $new_filename = $file_name_cleaned . '_' . Carbon::now()->timestamp ;
        $file->setName($new_filename);

        $file->addValidations(array(

//            new \Upload\Validation\Mimetype(array('application/vnd.ms-office','application/csv','text/plain' )),

            new \Upload\Validation\Size('5M')
        ));



        // Access data about the file that has been uploaded
        $data = array(
            'name'       => $file->getNameWithExtension(),
            'extension'  => $file->getExtension(),
            'mime'       => $file->getMimetype(),
            'size'       => $file->getSize(),
            'md5'        => $file->getMd5(),
            'dimensions' => $file->getDimensions(),
            'path'       => $path
        );
		Log::info($data['mime']);
        // Try to upload file
        try {
            // Success!
            $file->upload();

        } catch (\Exception $e) {
            // Fail!
            $data['errors'] = $file->getErrors();

        }

        return $data;
    }


}