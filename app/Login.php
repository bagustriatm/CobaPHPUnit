<?php
namespace App;
class Login
{
public $email;
public $password;
public function setEmail($email)
    {$this->email = $email;}

public function setPassword($password)
    {$this->password = $password;}
public function login() : String
{
    $email = $this->email;
    $password = $this->password;
    $con = mysqli_connect("localhost","root","","modul3Test");
    $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($con, $sql);
    $check = mysqli_num_rows($query);
    if ($check > 0) {
    return "Berhasil";} 

    else {
    return "Gagal";
    }
}
}