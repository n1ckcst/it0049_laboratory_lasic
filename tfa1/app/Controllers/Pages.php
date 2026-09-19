<?php
namespace App\Controllers;

class Pages extends BaseController
{

    public function index()
    { // index for Pages::index

        $data = array(
            'title' => 'POS SYSTEM'
        );

        return view('partials/header', $data)
            . view('index', $data)
            . view('partials/footer');
    }

    public function about()
    {
        $data = array(
            'title' => 'ABOUT PAGE'
        );
        return view('partials/header', $data)
            . view('about', $data)
            . view('partials/footer');
    }


}



