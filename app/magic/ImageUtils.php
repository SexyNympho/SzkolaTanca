<?php

class ImageUtils {

    private $image;
    private $imageType;

    public function __construct($fileName) {
        $this->image = null;
        $this->imageType = null;
        $this->croppedLayer = null;
        
        $this->loadFromFile($fileName);
    }

    public function save($fileName, $imageType = IMAGETYPE_PNG, $permissions = null)
    {
        if ($imageType == IMAGETYPE_PNG) {
            return imagepng($this->image, $fileName);
        } elseif ($imageType == IMAGETYPE_JPEG) {
            return imagejpeg($this->image, $fileName);
        }
        if ($permissions != null) {
            chmod($fileName, $permissions);
        }
    }

    private function loadFromFile($fileName) {
        $imageInfo = getimagesize($fileName);
        $this->imageType = $imageInfo[2];

        if ($this->imageType == IMAGETYPE_JPEG) {
            $this->image = imagecreatefromjpeg($fileName);
        } elseif ($this->imageType == IMAGETYPE_PNG) {
            $this->image = imagecreatefrompng($fileName);
        }
    }

    public function display($imageType = IMAGETYPE_PNG) {
        if ($imageType == IMAGETYPE_PNG) {
            imagepng($this->image);
        } elseif ($imageType == IMAGETYPE_JPEG) {
            imagejpeg($this->image);
        }
        
        return $this->image;
    }

    private function resizeToHeight($height) {
        $ratio = $height / $this->getHeight();
        $width = $this->getWidth() * $ratio;
        $this->pResize($width, $height);
    }

    private function resizeToWidth($width) {
        $ratio = $width / $this->getWidth();
        $height = $this->getHeight()*$ratio;
        $this->pResize($width, $height);
    }
    
    public function resize($width, $height) {
        if ($this->getWidth() > $this->getHeight())
        {
            $this->resizeToWidth($width);
        }
        else
        {
            $this->resizeToHeight($height);
        }
    }
    
    private function pResize($width, $height) {
        $newImage = imagecreatetruecolor($width, $height);
        imagecopyresampled($newImage, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $newImage;
    }
    
    private function getWidth() {
        return imagesx($this->image);
    }

    private function getHeight() {
        return imagesy($this->image);
    }

    public function ContentType()
    {
        return 'image/png';
    }
    
}