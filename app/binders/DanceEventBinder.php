<?php
class DanceEventBinder {
    private function BindInputToModel($inputArray)
    {
        $danceEvent = new DanceEvent;
        $danceEvent->title = $inputArray['eventTitle'];
        $danceEvent->description = $inputArray['eventDescription'];
        $danceEvent->eventDate = $inputArray['eventDate'];
        
        return $danceEvent;
    }
    
    /**
     * assumes valid inputArray
     * 
     * @param type $inputArray
     */
    public function SaveModel($inputArray)
    {
        $danceEventM = $this->BindInputToModel($inputArray);
        
        if (!$danceEventM->save())
        {
            return false;
        }
        
        foreach($inputArray['eventStyles'] as $ds)
        {
            $danceEventM->danceStyles()->attach(DanceStyle::find($ds));
        }
        
        return true;
    }
}
