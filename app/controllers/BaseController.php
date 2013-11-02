<?php

class BaseController extends Controller {
    
    public function __construct()
    {
        $this->InitFormMacros();
    }
    
    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
            if ( ! is_null($this->layout))
            {
                    $this->layout = View::make($this->layout);
            }
    }
    
    private function InitFormMacros()
    {
        Form::macro('date', function(){
            return '<input type="date" />';
        });
    }
}