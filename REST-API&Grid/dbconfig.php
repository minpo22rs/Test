<?php

   class Database{
       private $pdo;
       
       public function __construct($host,$dbname,$username,$password){//รับค่าจาก db in index.php แล้วทำการเชื่อมต่อกับฐานข้อมูล
         $con = new PDO('mysql:host='.$host.'; dbname='.$dbname.';',$username,$password);
         $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         $this->pdo =$con;
           
       }
       
       public function query($show){
          $stmt = $this->pdo->prepare($show);
          $stmt->execute();

          if($show){
            $data = $stmt->fetchAll();
            return $data;

          }
       }

   }


?>