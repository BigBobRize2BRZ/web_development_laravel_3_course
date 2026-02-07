<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // Контроллер одиночного действия
    public function __invoke()
    {
        return 'Single controller';
    }
}
