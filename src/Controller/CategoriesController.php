<?php
class CategoryController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $categories = $this->model->getAllCategories();
        include 'view/Categories.php';
    }
    public function getCategoryById($categoryId)
    {
        $category = $this->model->getCategoryById($categoryId);
        include 'view/category.php';
    }
    public function updateCategory($categoryId, $newName)
    {
        $success = $this->model->updateCategory($categoryId, $newName);
        if ($success) {
            echo "La catégorie a été mise à jour avec succès.";
        } else {
            echo "Erreur lors de la mise à jour de la catégorie.";
        }
    }
}
