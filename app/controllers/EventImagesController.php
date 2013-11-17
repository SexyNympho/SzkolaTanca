<?php

class EventImagesController extends BaseController 
{
    public function Index($danceEvent)
    {
        $imagesCRUD = new ImageCRUDViewModel();
        $imagesCRUD->newImageRoute = array('postAddImageToEvent', 'danceEvent' => $danceEvent->id);
        $imagesCRUD->images = $this->GetImageVMs($danceEvent);
        
        return View::make('imagesCRUD', array('imagesCRUD' => $imagesCRUD));
    }
    
    public function PostAddImage($danceEvent)
    {
        $file = Input::file('image');
        $filename = str_random(16) . '_' . $file->getClientOriginalName();
        $destinationPath = public_path() . '/' . Configuration::$ImagesUploadPath;
        $upload = $file->move($destinationPath, $filename) != null;

        if (!$upload)
        {
            return 'error uploading file';
        }
        
        $photo = new Image;
        $photo->filename = $filename;
        if (!$photo->save())
        {
            return 'could not save to database';
        }
        
        $danceEvent->photos()->attach($photo);
        
        foreach($danceEvent->danceStyles as $danceStyle)
        {
            $danceStyle->photos()->attach($photo);
        }
        
        return Redirect::route('eventImagesCRUD', array('danceEvent' => $danceEvent->id));
    }
    
    private function GetImageVMs($danceEvent)
    {
        $imageVMs = array();
        foreach($danceEvent->photos as $photo)
        {
            $imageVM = new ImageViewModel;
            $imageVM->imagePath = $photo->Path();
            $imageVM->deletePath = route('removeImageFromEvent', array('danceEvent' => $danceEvent->id, 'eventPhoto' => $photo->id));
            $imageVMs[] = $imageVM;
        }
        
        return $imageVMs;
    }
    
    public function RemoveImage($danceEvent, $eventPhoto)
    {
        $danceEvent->photos()->detach($eventPhoto);
        
        return Redirect::route('eventImagesCRUD', array('danceEvent' => $danceEvent->id));
    }
}
