<?php
    include "../connect/connect.php";
    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPass'];
    $youPhone = $_POST['youPhone'];
    $regTime = time();
    // echo $youEmail, $youName, $youPass, $youPhone;
    // $sql ="INSERT INTO members(youEmail, youName, youPass, youPhone, regTime) VALUES('$youEmail', '$youName', '$youPass', ' $youPhone', '$regTime')";
    // $connect -> query($sql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/joinEnd01.png, ../assets/img/joinEnd01@2x.png 2x, ../assets/img/joinEnd01@3x.png 3x" />
                <img src="../assets/img/joinEnd01.png" alt="회원가입이미지">
            </picture>
            <p class="intro__text">
                회원가입을 축하드립니다!<br>로그인 후 이용해주세요!
            </p>
            <div class="intro__btn">
                <a href="#">메인으로</a>
                <a href="#">로그인</a>
            </div>
        </div>
        <!-- // intro__inner -->
    </main>    
    <!-- //main -->

</body>
</html>