<!DOCTYPE html>
<html lang="en">
<style>

td {
  width:100px;
  text-align:center;
}

input {
  width:90px;
  height:50px;
  margin:5px;  
  text-align:center;
  background-color:blue;
  color:white;
}


.container {
  height: 200px;
  position: relative;
  border: 3px solid green;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.content {
  max-width: 400px;
 

  margin: auto;
  background: lightblue;
  padding: 10px;
  
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot</title>





    

    <?php
$conn =  mysqli_connect("robot", "root", "", "robot", 3306 );
 if ($conn === false)
 {
    die ("ERROR: qwewqe"  .mysqli_connect_error());
 }
echo "connected successfully host info:" . mysqli_get_host_info($conn);
?>







</head>


<div class='vertical-center'>
<body class='content' >







   <form method="post">  
<table >

    <tr >
        <td></td>
        <td>  <input type="submit" name="Forward" class="button" value="Forward" /> </td>
        <td></td>
        

    </tr>


    <tr>
    <td>  <input type="submit" name="Left" class="button" value="Left" /> </td>

        <td><input type="submit" name="Stop" class="button" value="Stop" /></td>
        <td><input type="submit" name="Right" class="button" value="Right" /></td>
    </tr> 
    
    

    <tr>
        <td></td>
        <td><input type="submit" name="Backward" class="button" value="Backward" /></td>
        <td></td>
        

    </tr>

  </table>

  
<div>
</form>

<br><br><br>
<a href="/viewer.php" target="_blank"> THE OUTPUT PAGE </a>
<br><br><br>
<?php
        if(array_key_exists('Forward', $_POST)) {

          $sql = "UPDATE direction_table SET dir ='Forward' WHERE ID=1";
          $conn->query($sql);
            $conn->close();
            echo "Forward is selected";
        }
        else if(array_key_exists('Left', $_POST)) {
          $sql = "UPDATE direction_table SET dir ='Left' WHERE ID=1";
          $conn->query($sql);
            $conn->close();
            echo "Left is selected";
        }
        else if(array_key_exists('Stop', $_POST)) {
          $sql = "UPDATE direction_table SET dir ='Stop' WHERE ID=1";
          $conn->query($sql);
            $conn->close();
          echo "Stop is selected";

        }

        else if(array_key_exists('Right', $_POST)) {

          $sql = "UPDATE direction_table SET dir ='Right' WHERE ID=1";
          $conn->query($sql);
            $conn->close();
            echo "Right is selected";
        }

        else if(array_key_exists('Backward', $_POST)) {

          $sql = "UPDATE direction_table SET dir ='Backward' WHERE ID=1";
          $conn->query($sql);
            $conn->close();
            echo "Backward is selected";
        }


    ?>

</body>
</html>