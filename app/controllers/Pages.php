<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = ['title' => 'home page'];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = ['title' => 'abot page'];
        $this->view('pages/index', $data);
    }
}
