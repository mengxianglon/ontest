<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return view();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function addt(){
        //rint_r($_FILES["file"]["name"] );
        return view();
    }
    public function race()
    {
        return view();
    }
    public function timeline()
    {
        return view();
    }
}
