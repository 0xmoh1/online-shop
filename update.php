<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Update | تعديل</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up=mysqli_query($con ,"select * from prod1 where id=$ID");
    $data = mysqli_fetch_array($up);

    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل المنتجات</h2>
                <!-- <img src="img/image.webp" alt="logo" width=450px> -->
                <input type="text" name="id" value='<?php echo $data['id']?>'>
                <br>
                <input type="text" name="name"  value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name="pr"  value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name="image" style="display:none;" required>
                <label for="file">اختيار الصوره</label>
                <button name="update" type="submit">تعديل المنتج</button>  
                <br><br>
                <a href="products.ph">تحديث صورة المنتج</a> 
            </form>
        </div>
        <p>Devloper By gk55h</p>
    </center>
</body>
</html>