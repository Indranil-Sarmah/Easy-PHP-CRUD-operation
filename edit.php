<?php
   
    include('connect.php');

    $id = $_GET['id'];

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $city = $_POST['city'];

        $sql = "update student set name = '$name' ,city='$city' where id='$id'";

        mysqli_query($conn,$sql);

        header('location:index.php');
        die();
    }

    $res = mysqli_query($conn,"select * from student where id='$id'");
    $row = mysqli_fetch_assoc($res);

    $name=$row['name'];
    $city=$row['city'];

?>

<style>
    form{
        margin: 10px;
        border: 1px solid black;
        width: 300px;
        padding: 20px;
    }

    td{
        margin-top: 5px;
    }

    #btn
    {    display: inline-block;
        margin-top: 20px;
    }
    h3{
       margin-left: 10px; 
    }
    h4{
       margin-left: 10px; 
    }
</style>
<h3>CRUD</h3>
<h4>Update</h4>
<form method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" required="true" value="<?php echo $name ?>"></td>
        </tr>

        <tr>
            <td>City</td>
            <td><input type="text" name="city" required="true" value="<?php echo $city ?>"></td>
        </tr>
        
        <tr>
            <td id="btn"><input type="submit" name="submit"><strong></td>    
        <tr>
    </table>

</form>