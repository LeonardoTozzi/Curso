<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Talk extends BaseController
{
    public function word($value1)
    {
        echo "Palavra: $value1";
    }
    public function words($value1, $value2)
    {
        echo "Palavras: $value1 - $value2";
    }
    public function other($value1 = 'Joao')
    {
        echo "Palavra: $value1";
    }
}
