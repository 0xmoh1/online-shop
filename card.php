<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منتجاتي</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    h3{
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
    }
    main{
        width: 40%;
        margin-top: 30px;
    }
    table{
        box-shadow: 1px 1px 10px silver;
    }
    thead{
        background-color: #3498db;
        color: white;
        text-align: center;
    }
    tbody{
        text-align: center;
    }

    </style>
</head>
<body>
    <center>
    <h3>النتجات المحجوزه</h3>
    </center>
    <?php
    include('config.php');
    $result= mysqli_query($con, "SELECT * FROM addcard");
    while($row =mysqli_fetch_array($result)){
        echo"
        <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Name Product</th>
                        <th scope='col'>Price Product </th>
                        <th scope='col'>Delete Product</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازالة</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center>
        
        ";

    }
    ?>

    <center>
        <a href="shop.php">الصفحة الرئيسية</a>
    </center>

</body>
</html>