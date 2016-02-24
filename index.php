<?php
class Test{
    public  function test(){
        $a=1;
        echo $a;
    }
    public function  connectmysql(){
       $conn = mysql_connect("localhost","root","root");
    }
}