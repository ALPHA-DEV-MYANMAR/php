<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .show-photo{
            margin: 10px;
        }
        .show-photo img{
            height: 100px;
        }
    </style>
</head>
<body>

<form action="save.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upload"> <br>
    <button>upload</button>
</form>

<div class="show-photo">
    <?php 
    $store = scandir("store");
    foreach ($store as $key=>$s){
    ?>
        <img src="store/<?php echo $s; ?>" alt="">
    <?php }?>
</div>

</body>
</html>