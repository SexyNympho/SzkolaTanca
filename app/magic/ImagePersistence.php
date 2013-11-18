<?php

class ImagePersistence {
    
    public function Save($file, $filename)
    {
        $destination = $this->GetUploadPath();
        return $file->move($destination, $filename) != null;
    }
    
    public function Delete($filename)
    {
        $filePath = $this->GetUploadPath() . $filename;
        if (file_exists($filePath))
        {
            unlink($filePath);
        }
    }
    
    private function GetUploadPath()
    {
        return public_path() . '/' . Configuration::$ImagesUploadPath;        
    }
    
}
