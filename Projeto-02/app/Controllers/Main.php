<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        // home page
        echo view('html_header');
        echo view('nav');
        echo view('home');
        echo view('html_footer');
    }
    public function about()
    {
        // home page
        echo view('html_header');
        echo view('nav');
        echo view('about');
        echo view('html_footer');
    }
    public function services()
    {
        // home page
        echo view('html_header');
        echo view('nav');
        echo view('services');
        echo view('html_footer');
    }
}
