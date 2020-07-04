<?php


namespace App\classes;


class Student
{
    public function saveStudentInfo(){
       /* echo "<pre>";
        print_r($_POST);
       */
        extract($_POST);
        $link = mysqli_connect('localhost','root','','student');
        $sql="INSERT INTO students(name,email,mobile) VALUES('$name', '$email', '$mobile')";
        if(mysqli_query($link,$sql)){
            return "Success";

        }
        else{
            die("problem".mysqli_error($link)) ;
        }

    }
}