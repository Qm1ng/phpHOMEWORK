<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
</head>
<body>
    <div class="container">
    <?php if (!isset($_POST['submit'])) { ?>
        <h2>檔案上傳</h2>
        <hr>
        <form action="week10.php" method="post" enctype="multipart/form-data">
                
            <label for="">上傳檔案</label><br>
            <input type="file" name="uploadFile">
            <input type="submit" value="上傳" name="submit">

        </form>


   <?php }else {
       
        echo $_FILES['uploadFile']['name'];
        echo "檔案上傳成功!";
        echo "<hr>";
        var_dump($_FILES);
    } 
    ?>
    
    </div>
</body>
</html>