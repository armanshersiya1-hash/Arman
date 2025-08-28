<?php include "db3.php"; ?>

<form method="POST">
  <label>First name:</label><br>
  <input type="text" name="name"><br><br>
  
  <label>email:</label><br>
  <input type="text" name="email"><br><br> 

  <select name="cid">
    <option value="">select city</option>
    <?php
    $sql = "select * from city";
    $rel = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($rel)){
     echo  "<option value='".$row['id']."'>".$row['cityname']."</option>";
    }
    ?>
</select><br><br>

  <select name="stateid">
    <option value="">select state</option>
    <?php
    $sql = "select * from state";
    $rel = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($rel)) {
        echo "<option value='" . $row['id'] . "'>" . $row['statename'] . "</option>";
    }
    ?>
  </select><br><br>

  
  <input type="submit" value="Submit" name="submitt">
</form> 

<?php
if(isset($_POST["submitt"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cid = $_POST["cid"];
    $stateid = $_POST["stateid"];

    // SQL query
    $sql = "INSERT INTO `user` (`id`, `name`, `email`,`cid`,`stateid`) VALUES (NULL, '$name', '$email','$cid',$stateid)";
    
    // Execute query
    $result = mysqli_query($conn, $sql);

    // Check result
    if($result){
        echo "yes";
        header("location:display3.php");
    
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>