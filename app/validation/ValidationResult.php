<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidationResult
 *
 * @author MateuszT
 */
class ValidationResult {
    
    public function __construct()
    {
        $this->errorList = array();
    }
    
    public function IsValid()
    {
        return count($this->errorList) === 0;
    }
    
    public function AddError($error)
    {
        $this->errorList[] = $error;
    }
    
    public function ErrorList()
    {
        return $this->errorList;
    }
    
    private $errorList;
}
