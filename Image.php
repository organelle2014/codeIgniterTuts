<?php

namespace App\Controllers;

class Image extends BaseController
{
    public function index(): string
    {
        return view('image');
    }
}
