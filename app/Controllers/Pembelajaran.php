<?php

namespace App\Controllers;

class Pembelajaran extends BaseController
{
    public function view()
    {
        $data = [
            'title' => 'Pembelajaran'
        ];
        return view('admin/blog/data_blog', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Pembelajran'
        ];
        return view('admin/blog/add_blog', $data);
    }
    public function pembelajaran()
    {
        return view('/user/pembelajaran');
    }
}
