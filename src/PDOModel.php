<?php
   
    class PDOModel{

        public static function getconection(){
            $conn = new PDO('mysql:host=localhost;port=3306;dbname=pharmacie', 'root', '');
            return $conn;
          
    }
}

?>