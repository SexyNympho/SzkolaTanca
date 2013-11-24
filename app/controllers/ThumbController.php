<?php

class ThumbController extends BaseController {
    public function Index($image, $width = 200, $height = 150)
    {
        $imgUtils = new ImageUtils($image->Path());
        $imgUtils->resize($width, $height);
        
        return Response::make($imgUtils->display(), 200, array('Content-Type' => $imgUtils->ContentType()));
    }
}
