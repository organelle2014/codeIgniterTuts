<?php

namespace App\Controllers;
use App\Models\CustomModel;
class Posts extends BaseController
{
    public function index(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->all();
        
        echo '<pre>';
        print_r($result);
        echo '<prev>';

        return view('posts');
    }

    public function user(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->allUser();
        
        echo '<pre>';
        print_r($result);
        echo '<prev>';

        return view('posts');
    }

    public function where(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->where();
        
        echo '<pre>';
        print_r($result);
        echo '<prev>';

        return view('posts');
    }

    public function featured(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->featured();
        
        echo '<pre>';
        print_r($result);
        echo '<prev>';

        return view('posts');
    }

    public function join(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->join();
        
        echo '<pre>';
        print_r($result);
        echo '<prev>';

        return view('posts');
    }

    public function like(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->like();
        
        echo '<pre>';
        print_r($result);
        echo '<prev>';

        return view('posts');
    }

    
    public function grouping(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->grouping();
        
        echo '<pre>';
        print_r($result);
        echo '<prev>';

        return view('posts');
    }

    public function wherein(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->wherein();
        
        echo '<pre>';
        print_r($result);
        echo '<prev>';

        return view('posts');
    }
}
