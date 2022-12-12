<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $name='Amit Sharma';
    $mobile='9856789345';
    $email='test@gmail.com';
    $sso='amittest';
    $unit='Sikar';
    $IA='area1';
    $plot='H1-234';

    echo "<h1>User details</h1>";
    echo "<b><a href='dashboard.php?name=$name,mobile=$mobile,email=$email,sso=$sso,unit=$unit,industrail area=$IA,plot=$plot'>Help</a></b>";


    ?>
</body>
</html>