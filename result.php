<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body class="bg-image">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div>
            <div class="text-center mx-auto">
                <img src="anh.jpg" alt="anh" width="60px" height="60px ">
            </div>
            <div class="text-center mx-auto">
                <h1>Thank you <?= $_POST["Name"] ?> !!</h1>
                <p>We received your application for the <?= $_POST["club"] ?></p>
                <p>You are a <?php $arr = $_POST["habbit"];
                                //print_r($arr);
                                echo implode(" and ", $arr);
                                ?> </p>
                <p>You will be available on <?= $_POST["time"] ?> </p>
            </div>
        </div>
    </div>
</body>

</html>