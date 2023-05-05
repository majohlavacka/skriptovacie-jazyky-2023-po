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

?>
