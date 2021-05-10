<?php

namespace App\Controllers;

class InfoLomba extends BaseController
{
    public function view()
    {
        $data = [
            'title' => 'Info Lomba'
        ];
        return view('admin/blog/data_blog', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Info Lomba'
        ];
        return view('admin/blog/add_blog', $data);
    }
    public function infoLomba()
    {
        return view('/user/infoLomba');
    }
}
