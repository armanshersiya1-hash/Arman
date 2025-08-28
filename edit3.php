<?php include "db3.php"?>

<?php

if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "Select * from user where id=$id";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $cid = $row['cid'];
    $stateid =$row['stateid'];

}
}
if(isset($_POST['submitt'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cid = $_POST['cid'];
    $stateid = $_POST['stateid'];
    $sql = "UPDATE user SET name='$name', email='$email',cid='$cid',stateid='$stateid' where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:display3.php");
    }
}
?>

<form action="" method="POST">
<label>name:</label>
<input type="text" name="name" value="<?php echo $name ?? ''?>"><br><br>
<label>email:</label>
<input type="email" name="email" value="<?php echo $email ?? ''?>"><br><br>
<label>city:</label>
<input type="text" name="cid" value="<?php echo $cid ?? ''?>"><br><br>
<label>state:</label>
<input type="text" name="stateid" value="<?php echo $stateid ?? ''?>"><br><br>
<input type="submit" name="submitt">
</form>