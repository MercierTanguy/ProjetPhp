<?php
class PostModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllPosts()
    {
        $query ="SELECT * FROM articles";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>