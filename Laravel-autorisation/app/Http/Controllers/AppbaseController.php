<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppbaseController extends Controller
{
     public function callAction($method, $parameters)
    {

        $controller = class_basename(get_class($this));
        $action = $method;
        $changeName = str_replace(['Controller', '@'], ['', '-'], $controller);
        $permissions = $action . '-' . $changeName; 
        // dd($permissions);
        $this->authorize($permissions);  
        return parent::callAction($method, $parameters);
    }
}
