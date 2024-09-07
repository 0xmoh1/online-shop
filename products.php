<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         /* *{
            margin-top: 40px
        } */
        h3{
            font-family: "Cairo", sans-serif;
            font-weight: bold;
            margin-top: 10px
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width:90% ;
        }
        #a{
            margin-left:70px;
            text-decoration: none;
            color: white;


        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="index.php" class="navber-brand" id="a">Add | اضافه منتج</a>
    </nav>
    <center>
        <h3>جميع المنتجات المتوفره</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM prod1");
    while($moh = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
        <div class='card' style='width: 20rem;'>
            <img src='$moh[image]' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>$moh[name]</h5>
                <p class='-text'>$moh[price]</p>
                <a href='delete.php? id=$moh[id]' class='btn btn-danger'>حذف المنتج</a>
                <a href='update.php? id=$moh[id]' class='btn btn-primary'>تعديل المنتج</a>
            </div>
        </div>
    </main>
        <center>
        ";
    }

    ?>

    


</body>
</html>