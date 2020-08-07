<?php

$conn = mysqli_connect("localhost","root","","crud");
$sql ="select * from student";
$res = mysqli_query($conn,$sql);

?>
<br>
<a href="">Add a new Record</a>
<br>
</br>
<style>

    *{
        font-size: large;
    }
    td{
        padding: 5px;
        text-align: center;
    }
    a{ 
        text-decoration: none;
    }
    table{
        border: 1px solid black;
    }
</style>
<body>
<table>
    <tr>
        <td>S.No</td>
        <td>Name</td>
        <td>City</td>
        <td>Extra Operation</td>
    </tr>
    <?php 
      $i=1;
        while($row=mysqli_fetch_assoc($res))
        
        { ?>
      <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['city'];?></td>
          <td>
          <a href="">Edit</a>&nbsp;    
          <a href="delete.php">Delete</a></td>
      </tr>
        <?php $i++; } ?>
</table>
</body>

