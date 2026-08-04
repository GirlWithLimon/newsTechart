<?php
   include_once "connect.php";
   require_once 'IdbNews.php';
    class DbNews implements IdbNews{
        private $pdo;
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
    #override    
        public function selectAll(){
            $sql = "SELECT * FROM news";
            $query = $this->pdo->prepare($sql);
            $query->execute();
            $errInfo = $query->errorInfo();
            if($errInfo[0] !== PDO::ERR_NONE){
                echo $errInfo[2];
                exit();
            }
            $date = $query->fetchAll();
           return $date;
        }
        public function getCount(){
            $sql = "SELECT COUNT(*) FROM news";
            $query = $this->pdo->prepare($sql);
            $query->execute();
            $errInfo = $query->errorInfo();
            if($errInfo[0] !== PDO::ERR_NONE){
                echo $errInfo[2];
                exit();
            }
            $date = $query->fetchColumn();
           return $date;
        }
        public function getAllWithLimit($limit, $offset){
                $sql = "SELECT * FROM news ORDER BY date DESC LIMIT $limit OFFSET $offset";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $errInfo = $query->errorInfo();
                if($errInfo[0] !== PDO::ERR_NONE){
                    echo $errInfo[2];
                    exit();
                }
                $date = $query->fetchAll();
            return $date;
        }

        public function getNewsById($id){
             $sql = "SELECT * FROM news where id = $id";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $errInfo = $query->errorInfo();
                if($errInfo[0] !== PDO::ERR_NONE){
                    echo $errInfo[2];
                    exit();
                }
                $date = $query->fetch();
            return $date;
        }
        
        public function getLastNews(){
              $sql = "SELECT title, announce, image FROM news ORDER BY date DESC LIMIT 1";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $errInfo = $query->errorInfo();
                if($errInfo[0] !== PDO::ERR_NONE){
                    echo $errInfo[2];
                    exit();
                }
                $date = $query->fetch();
            return $date;
        }
    }
?>