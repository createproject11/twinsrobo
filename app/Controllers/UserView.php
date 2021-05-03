<?php

namespace App\Controllers;

class UserView extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'TwinsRobo App'
        ];
        return view('user/index', $data);
    }

    // public function add()
    // {
    //     $data = [
    //         'title' => 'TwinsRobo App'
    //     ];
    //     return view('user/index', $data);
    // }
}