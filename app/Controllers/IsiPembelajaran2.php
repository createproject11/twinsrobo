<?php

namespace App\Controllers;

class IsiPembelajaran2 extends BaseController
{
    public function view()
    {
        $data = [
            'title' => 'Isi Pembelajaran2'
        ];
        return view('admin/blog/data_blog', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Isi Pembelajaran2'
        ];
        return view('admin/blog/add_blog', $data);
    }
    public function isiPembelajaran2()
    {
        return view('/user/isiPembelajaran2');
    }
}
