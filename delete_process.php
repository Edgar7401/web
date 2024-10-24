<?php
    $conn = mysqli_connect("localhost", "root","","test");
    $id=$_GET['id'];
    mysqli_query($conn,"DELETE FROM `categories` WHERE `id`=$id");
    header("location:Categories.php");
