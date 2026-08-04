<?php
    require_once __DIR__ . '/../database/DbNews.php';
    class NewsController{
        private $pdo;
        private $dbNews;
        
        public function __construct($pdo) {
            $this->pdo = $pdo;
            $this->dbNews = new DbNews($this->pdo);
        }
       

        public function selectAllNews(){
           return $this->dbNews->selectAll();  
        }
        public function getPageCount(){
            $limit = 4;
            return ceil($this->dbNews->getCount()/$limit);
        }
        public function getPageNumber(){
          return  isset($_GET["page"]) ? $_GET["page"] :1;
        }
       
        public function getNewsOnPage(){
            $limit = 4;
            $offset = ($this->getPageNumber() - 1) * $limit;
           return $this->dbNews->getAllWithLimit($limit, $offset);
        }
        public function getNewsItem(){
           $id = isset($_GET["id"]) ? $_GET["id"] :1;
           return $this->dbNews->getNewsById($id);
        }
        public function getLastNews(){
              return $this->dbNews->getLastNews(); 
        }

    }
?>