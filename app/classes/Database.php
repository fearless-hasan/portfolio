<?php
/**
 * Created by PhpStorm.
 * User: fearless-hasan
 * email: hasan.bubt.40@gmail.com
 * Date: 1/14/2018
 * Time: 2:40 AM
 */


namespace App\classes;


class Database
{
    public function dbConnection(){
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'portfolio';
        $link = mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }
}