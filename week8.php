<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>營隊報名</title>
</head>
<body>
    <?php

    if (!empty($_POST)) {
        
        
        var_dump($_POST);
        //dbconnect
        $link = mysqli_connect('localhost', 'root', 'cccamp', 'cccamp');
        mysqli_query($link, "SET NAMES 'utf8'");
        mysqli_query($link, "SET character Set 'utf8'");
        $userName = $_POST['userName'];
        $userPhone = $_POST['userPhone'];
        $userArea = $_POST['userArea'];
        $insertForm = mysqli_query('$link', "INSERT INTO `act_join` (`joinName`, `joinPhone`, `joinArea`) VALUES ($userName, $userPhone, $userArea);");

        echo "報名成功";

    ?>

    <?php }else { ?>

    <div class="container text-center">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="page-header">營隊報名</h2>
            </div>
            <div class="panel-body">

                <form action="week3.php" method="POST">
                    <label>姓名 : </label>
                    <input type="text" name="userName" placeholder="輸入名字" require autofocus><br>
                    <label>電話 : </label>
                    <input type="text" name="userPhone" placeholder="輸入電話"><br>
                    <label>地區 : </label>
                    <select name = "userArea">
                        <option >--請選擇--</option>
                        <option value = "Taipei">Taipei</option>
                        <option value = "Tainan">Tainan</option>
                        <option value = "Kaohsiung">Kaosiung</option>
                        <option value = "Chaiyi">Chayi</option>
                    </select>
                    <br>

                    </br><input type="submit" value="確認"></br>

                </form>
            </div>
        </div>
    </div>
    <?php
    }




    ?>
</body>
</html>