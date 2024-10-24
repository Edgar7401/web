<!-- setcookie("user_id",1,time()+3600,"/"); -->
<!-- echo $_COOKIE['user_id']; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file_process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button>Up load</button>
    </form>
</body>
</html>