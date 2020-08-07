<?php

$conn = mysqli_connect("localhost","root","","crud");
$sql ="select * from student";
$res = mysqli_query($conn,$sql);

?>

<style>


    *{
        font-size: large;
    }
    body{
        padding: 10px;
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
<h3>CRUD</h3>
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
          <a href="delete.php?id=<?php echo $row['id']?>"<a>Delete</a></td>
      </tr>
        <?php $i++; } ?>
</table>

<ul>
    <li><a href="add.php">Add a new Record</a></li>
</ul>
<br>
<a href="logut.php">LOGOUT</a>

</body>

