<?php
    $conn = mysqli_connect("localhost","root","","crud");

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $city = $_POST['city'];

        $sql = "insert into student(name,city) values ('$name','$city')";

        mysqli_query($conn,$sql);

        header('location:index.php');
        die();
    }


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
</style>
<h3>CRUD</h3>
<form method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" required="true"></td>
        </tr>

        <tr>
            <td>City</td>
            <td><input type="text" name="city" required="true"></td>
        </tr>
        
        <tr>
            <td id="btn"><input type="submit" name="submit"></td>    
        <tr>
    </table>

</form>