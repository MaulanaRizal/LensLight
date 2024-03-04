<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

}

class BreadCrumb{
    private $BreadCrumbs;

    public function addBreadCrumb($name,$link,$isActive = false){
        // $crumb = array("name"=>$name,"link"=>$link, "isActive" => $isActive);
        if($isActive || $link==""){
            $this->BreadCrumbs = $this->BreadCrumbs."<li class='breadcrumb-item active' aria-current='page'> $name </li>";
        }else{
            $this->BreadCrumbs = $this->BreadCrumbs."<li class='breadcrumb-item'><a href=' $link '> $name </a></li>";
        }
        // array_push($this->BreadCrumbs,$crumb);
    }

    public function getBreadCrumb(){
        return $this->BreadCrumbs;
   }
}
