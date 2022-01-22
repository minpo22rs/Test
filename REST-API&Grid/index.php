<?php

require_once('dbconfig.php');

$db = new Database('localhost','test_case','root','123456789ee'); //ส่งข้อมูลไปให้ function __construct เพื่อเชื่อมต่อกับฐานข้อมูล

if($_SERVER['REQUEST_METHOD']=="GET"){//ถ้า request == get (รับ GET มาจาก xhttp.open)
    echo json_encode($db->query('SELECT * FROM orders ORDER BY id DESC' ));//ก็จะทำการเลือกข้อมูลในตาราง orders และแปลงจาก array เป็น json ส่งกลับมา

}else if($_SERVER['REQUEST_METHOD']=="POST"){
  echo'This is POST';
}else{
    http_response_code(405);
}




?>