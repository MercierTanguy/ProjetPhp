<?php
class CategoryModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllCategories()
    {
        $query = "SELECT * FROM categories";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCategoryById($categoryId)
    {
        $query = "SELECT * FROM categories WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function updateCategory($categoryId, $newName)
    {
        $query = "UPDATE categories SET name = :newName WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':newName', $newName, PDO::PARAM_STR);
        $stmt->bindParam(':id', $categoryId, PDO::PARAM_INT);
        
        return $stmt->execute();
    }

}
