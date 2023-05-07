<?php

require_once('database.php');

class IntroPhoto {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getIntroPhoto() {
        $query = "SELECT img FROM intro LIMIT 1";
        $stmt = $this->db->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (isset($result['img'])) {
            $image_url = "img/" . $result['img'];
            return $image_url;
        } else {
        }
    }

    
}

class TextManager {
    public $db;

    function __construct() {
        $this->db = new Database();
    }

    function get_text_content($textID) {
        $query = "SELECT content FROM text WHERE id = :textID";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':textID', $textID);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (isset($result['content'])) {
            return $result['content'];
        } else {
            return '';
        }
    }

    function get_text_name($textID) {
        $query = "SELECT name FROM text WHERE id = :textID";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':textID', $textID);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (isset($result['name'])) {
            return $result['name'];
        } else {
            return '';
        }
    }

    function getSponsorImages() {
        $db = new Database();
        $conn = $db->conn;

        $query = "SELECT img FROM sponsors";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $images = array();
        foreach ($result as $row) {
            $image_path = "img/" . $row['img'];
            $images[] = $image_path;
        }

        return $images;
    }

    function getImages() {
        $db = new Database();
        $conn = $db->conn;

        $query = "SELECT img FROM images";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $images = array();
        foreach ($result as $row) {
            $image_path = "img/" . $row['img'];
            $images[] = $image_path;
        }

        return $images;
    }

    function getImagesLarge() {
        $db = new Database();
        $conn = $db->conn;

        $query = "SELECT img FROM images";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $images = array();
        foreach ($result as $row) {
            $image_path = "img/" . $row['img'];
            $images[] = $image_path;
        }

        return $images;
    }

    function get_text_images_large() {
        $db = new Database();
        $conn = $db->conn;

        $query = "SELECT name FROM images_large";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);

        return $result;
    }
    
}
?>
