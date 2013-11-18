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

    public function resizeToHeight($height) {
        $ratio = $height / $this->getHeight();
        $width = $this->getWidth() * $ratio;
        $this->resize($width, $height);
    }

    public function resizeToWidth($width) {
        $ratio = $width / $this->getWidth();
        $height = $this->getHeight()*$ratio;
        $this->resize($width, $height);

        return $this;
    }

    public function scale($scale) {
        $width = $this->getWidth() * $scale / 100;
        $height = $this->getHeight() * $scale / 100;
        $this->resize($width, $height);
    }

    public function resize($width, $height) {
        $newImage = imagecreatetruecolor($width, $height);
        imagecopyresampled($newImage, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $newImage;
    }

    public function crop($xOffset, $yOffset, $ratio)
    {
        $xOffset = max(0, min($this->getWidth(), $xOffset));
        $yOffset = max(0, min($this->getHeight(), $yOffset));
        $width = max(0, $this->getWidth() - $xOffset);
        $height = floor(max(min($this->getHeight(), $this->getWidth() * $ratio), 0));
        $newImage = imagecreatetruecolor($width, $height);
        imagecopyresampled($newImage, $this->image, 0, 0, $xOffset, $yOffset, $width, $height, $width, $height);
        $this->image = $newImage;

        return $this;
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