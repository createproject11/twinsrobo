<?php

namespace App\Controllers;

class PricelistSubscription extends BaseController
{
    public function view()
    {
        $data = [
            'title' => 'Pricelist Subscription'
        ];
        return view('admin/blog/data_blog', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Pricelist Subscription'
        ];
        return view('admin/blog/add_blog', $data);
    }
    public function pricelistSubscription()
    {
        return view('/user/pricelistSubscription');
    }
}
