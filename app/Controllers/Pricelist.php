<?php

namespace App\Controllers;

class Pricelist extends BaseController
{
    public function view()
    {
        $data = [
            'title' => 'Pricelist'
        ];
        return view('admin/blog/data_blog', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Pricelist'
        ];
        return view('admin/blog/add_blog', $data);
    }
    public function pricelist()
    {
        return view('/user/pricelist');
    }
}
