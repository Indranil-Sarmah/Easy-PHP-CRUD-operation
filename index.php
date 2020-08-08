<?php

include('connect.php');

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
    ul{
        list-style: none;
        padding: 0px;

    }
    #btn{
        border: 1px solid black;
        padding: 5px;
        color: black;
       
    }
    #btn:hover{
        background-color:lightgrey;
    }


</style>
<body>
<h3>CRUD</h3>
<h4>Read</h4>
<table>
    <tr>
        <td><strong>S.No</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>City</strong></td>
        <td><strong>Extra Operations</strong></td>
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
          <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>&nbsp;    
          <a href="delete.php?id=<?php echo $row['id']?>"<a>Delete</a></td>
      </tr>
        <?php $i++; } ?>
</table>

<ul>
    <li><a href="add.php" id="btn">Add a new Record</a></li>
</ul>
<br>
<a href="logut.php">LOGOUT</a>

</body>

