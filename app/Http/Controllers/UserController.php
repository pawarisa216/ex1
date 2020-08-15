<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'หน้า user';
    }

    public function about()
    {
        return 'สร้าง user';
    }

    public function showName($name)
    {
        return "สวัสดี $name";
    }
    public function showNameAndAge($name, $age)
    {
        return "สวัสดี $name อายุ $age";
    }

}
