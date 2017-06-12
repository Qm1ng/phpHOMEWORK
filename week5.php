<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>末日計算</title>
</head>
<body>
    <?php if (!empty($_POST['date'])) {
        
        date_default_timezone_get("Asia/Taipei");
        $rawDate = $_POST['date'];
        $endDate = strtotime(($rawDate));
        $crntDate = strtotime(Date('Y-m-d'));
        $days=round(($endDate - $crntDate)/3600/24);
        ?>

    <div class="container text-center">
        <h2>末日計算</h2>
        <hr>
        <p>今天是<?php echo $rawDate?></p>
        <p>距離你的末日還有<?php echo $days ?>天</p>
    </div>

    <?php }else { ?>

    <div class="container text-center">
        <h2>末日計算</h2>
        <hr>
        <form action="week5.php" method="post">

            <label for="">輸入你的末日日期</label>
            <input type="date" name="date" value="">
            <input type="submit" value="送出">

        </form>
    </div>
    <?php
    }




    ?>
</body>
</html>