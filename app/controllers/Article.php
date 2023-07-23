<?php

class Article
{

    public function __construct()
    {
        echo "Article ";
    }
    public function index()
    {
        echo " index Article ";
    }

    public function edit($id)
    {
        echo $id;
    }
}
