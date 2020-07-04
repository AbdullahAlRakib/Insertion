<?php
require_once "./Student.php";
use App\classes\Student;
$message='';
if(isset($_POST['btn'])){
    $student=new Student();
   $message = $student->saveStudentInfo();
}
?>
<h2><?php echo $message;?></h2>
<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" ></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" name="mobile"> </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"> </td>
        </tr>
    </table>
</form>
