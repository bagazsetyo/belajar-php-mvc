<?php 

namespace Bagasfrzetyo\PhpMvc\Controller;

use Bagasfrzetyo\PhpMvc\App\View;

class HomeController
{

    public function index()
    {
        echo 'Hello Woasdasdld';
    }

    public function about()
    {
        echo 123;
        // View::render('about', array(
        //     'title' => 'asdasdasd Us',
        // ));
    }

}