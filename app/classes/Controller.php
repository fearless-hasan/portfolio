<?php
/**
 * Created by PhpStorm.
 * User: fearless-hasan
 * email: hasan.bubt.40@gmail.com
 * Date: 1/14/2018
 * Time: 2:42 AM
 */


namespace App\classes;
use App\classes\Database;


class Controller
{
    public function adminLoginCheck($data){
       $user = $data['user'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM users WHERE user = '$user' AND password = '$password' ";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            $user = mysqli_fetch_assoc($queryResult);
            if($user){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];

                header('Location: control.php');
            } else {
                $message = "username or password error.";
                return $message;
            }
        } else {
            die("query problem".mysqli_error(Database::dbConnection()));
        }
    }
}