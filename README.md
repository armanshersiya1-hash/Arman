<?php include "db3.php";?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn{
            color:black;
            background-color:yellow;
        }
        .a{
            color:red;
        }
        .b{
            width:1000px;
            margin-left:150px;
            margin-top:15px;
        }
        .c{
            text-align:center;
            margin-bottom:30px;
        }
        .d{
            width: 100%;
            background-color: #d1ecf1; 
            text-align: center;
        }
            table tr,table th {
            border: 1px solid #000;
        }
        .e{
            color:black;
        }
        
        
    </style>
</head>
<body class="a">
<div class="b">
    <h2 class="c">User Details Table</h2>
    <table class="d">
        <thead class="e">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>city name</th>
                <th>statename</th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
        <?php
         $sql = "Select user.id,user.name, user.email, city.cityname, state.statename from user
                 join city on user.cid = city.id
                 join state on user.stateid = state.id";                       
         $result = mysqli_query($conn,$sql);  
                                                                
             while ($row = mysqli_fetch_assoc($result)){                                                  
                $id = $row["id"];
                $name = $row["name"]; 
                $email = $row["email"];
                $cityname = $row["cityname"];
                $statename =$row["cityname"];

                 echo '               
                  <tr>
                       <td>'.$id.'</td>
                       <td>'.$name.'</td>
                       <td>'.$email.'</td>
                       <td>'.$cityname.'</td>
                       <td>'.$statename.'</td>
                    
                        <td>
                        <a href="edit3.php?id='.$id.'">
                        <button class="btn">Edit</button>
                        </a>
                        <a href="delete3.php?deleteid='.$id.'">
                        <button class="btn">Delete</button>
                        </a>
                        </td>

                   </tr>
                   ';
               }
             
       ?> 
        </tbody>
    </table>
</div>
</body>
</html>

<?php

$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $cityname = $row["cityname"];
    $statename = $row["statename"];
    echo '

        <tr>

        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$cityname.'</td>
        <td>'.$statename.'</td>

        <td>
        <a href="update.php?id='.$id.'">
        <a href="delete.php?deleteid='.$id.'">
        </td>
        </tr>
    ';
}
?>
