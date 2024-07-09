<?php
    function getConnexion(){
        $host="localhost";
        $user="root";
        $password="";
        $dbname="birrwagne";
        $con = mysqli_connect($host,$user,$password,$dbname);
        return $con;
    }
    function executeSQL($sql){
        $exe = mysqli_query(getConnexion(),$sql);
        return $exe;
    }

?>