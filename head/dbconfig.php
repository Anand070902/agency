<?php
define("HOST","localhost");
define("USER","root");
define("DB","agency");
define("PASS","");

session_start();
$connect= mysqli_connect(HOST,USER,PASS,DB) or die("db connection fail");


function insertData($table,$array){
    global $connect;

     $columns = implode(",",array_keys($array));
     $values = implode("','",array_values($array));

     $query = mysqli_query($connect,"insert into $table ($columns) value('$values')");

     return $query;
}

   function callingData($table){
       global $connect;

       $array = [];
       $query = mysqli_query($connect,"select * from $table");
       while($row = mysqli_fetch_array($query)){
           $array[] = $row;
       }
       return $array;
   }
   
   function delete($table,$delete){
       global $connect;
       $query = mysqli_query($connect,"delete from $table where $delete");
       return true;
   }

   function redirect($page){
       echo "<script>window.open('$page','_self')</script>";
   }

?>
