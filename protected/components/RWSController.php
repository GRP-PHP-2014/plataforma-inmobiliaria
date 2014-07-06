<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class RWSController extends CController
{
    
    public function __construct() {
        $this->arguments = (new HttpUtils())->fillArguments();
    }  
    
    protected $arguments;
    
}