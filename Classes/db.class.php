<?php

class DB {
    protected function conn()
    {
        try 
        {   
            $usr = "root";
            $pwd = "";
            $db = new PDO('mysql:host=localhost;dbname=loginsys', $usr, $pwd);
            return $db;
        } 
        catch (PDOException $e) 
        {   
            print "ERROR: " . $e->getMessage() . "<br />";
            die();
        }
    }
}