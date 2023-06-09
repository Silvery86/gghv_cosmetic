<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'Homepage',
        ];

        return view('templates/header', $data)
            . view('default-content/slider.php')
            . view('default-content/sale-banner.php')
            . view('default-content/trending-product.php')
            . view('default-content/promo-banner.php')
            . view('default-content/instagram.php')
            . view('templates/footer');
    }
}
