<?php
namespace app\blog\controller;
use think\Controller;
use think\View;

class Index extends Controller
{

    public function index()
    {
        return $this->fetch();
    }

    public function login()
    {

        return $this->fetch();

    }

    public function blog()
    {
        return $this->fetch("index/blog");
    }

    public function photoAlbum()
    {
        return $this->fetch("index/photoAlbum");
    }

    public function contact()
    {
        return $this->fetch();
    }

}
