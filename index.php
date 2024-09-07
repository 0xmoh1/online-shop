<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Shopping Happy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>اهلاً بكم بالموقع</h2>
                <img src="img/image.webp" alt="logo" width=450px>
                <input type="text" name="name" required>
                <br>
                <input type="text" name="pr" required>
                <br>
                <input type="file"  id="file" name="image" style="display:none;" required>
                <label for="file">اختيار الصوره</label>
                <button name="upload">رفع المنتج</button>  
                <br><br>
                <a href="products.php">عرض جميع المتجات</a> 
            </form>
        </div>
        <p>Devloper By gk55h</p>
    </center>
</body>
</html>