<?php

class Binder {
    
    public function Bind($type, $inputArray)
    {
        $bindable = new $type;
        
        if (!($bindable instanceof IBindable))
        {
            //throw an exception
            return null;
        }
        
        foreach($bindable->GetBindableProperties() as $propertyName)
        {
            $bindable->{$propertyName} = $inputArray[$propertyName];
        }
        
        return $bindable;
    }
}
