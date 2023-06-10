<?php

namespace App\Controllers;


use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
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
            . view('default-content/categories.php')
            . view('default-content/instagram.php')
            . view('templates/footer');
    }
    public function view($page = '')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => ucfirst($page),
        ];
       
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
