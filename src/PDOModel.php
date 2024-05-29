<?php
    class PDOModel{

        public static function getconection(){
            $conn = new PDO('mysql:host=localhost;port=3307;dbname=pharmacie', 'root', '');
            return $conn;
          
    }
}

?>