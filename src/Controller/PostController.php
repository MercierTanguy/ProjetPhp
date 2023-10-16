<?php
class PostController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $posts = $this->model->getAllPosts();
        include 'view/posts.php';
    }
}
