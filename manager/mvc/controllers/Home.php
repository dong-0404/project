<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    public $SinhVienModel;

public function __construct() 
{
    $this->SinhVienModel = $this->model("SinhVienModel");

}   

public function Admin () {
    $this->view("aodep", [
        "Page" => "home"
    ]);
}
}
?>