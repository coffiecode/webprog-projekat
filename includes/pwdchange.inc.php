<?php 
if (isset($_POST["submit"])){
   $oldPwd = $_POST["oldPwd"];
   $newPwd = $_POST["newPwd"];
   $repeatNewPwd = $_POST["repeatNewPwd"];

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

   if(emptyInputPwdChange($oldPwd, $newPwd, $repeatNewPwd) !== false){
        header("location: ../signup.php?error=emptyInput");
        exit();
   }    

   //changePwd();

} else {
    header("location: ../pwdchange.php");
    exit();
}