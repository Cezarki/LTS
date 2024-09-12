<?php
    require_once('connection.php');
    $conn = connection();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <style>
        .dev{
            color: black;
        }

        .dev:hover{
            color: white; 
            text-decoration: underline;
             font-size: 14px;
        }


    </style>
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Contact Information</h5>
                <p>Address: Cuyapo , Nueva Ecija</p>
                <p>Email: cuyapo_example@gmail.com</p>
                <p>Phone: + 09847838573</p>
            </div>
            <div class="col-md-6">
                <h5>Follow Us</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.facebook.com/MyHomeCuyapo/">Facebook</a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/LCuyapo">Twitter</a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/myhomecuyapo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <p>&copy; 2024 Cuyapo Municipal. All rights reserved.</p>
                <div class="dev">
                    <p>&copy; Developed by: <i>Leomar Abad and Cezar Tangalin.</i></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>