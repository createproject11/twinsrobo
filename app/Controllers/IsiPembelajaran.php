<?php

namespace App\Controllers;

class IsiPembelajaran extends BaseController
{
    public function view()
    {
        $data = [
            'title' => 'Isi Pembelajaran'
        ];
        return view('admin/blog/data_blog', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Isi Pembelajran'
        ];
        return view('admin/blog/add_blog', $data);
    }
    public function isiPembelajaran()
    {
        return view('/user/isiPembelajaran');
    }
}
