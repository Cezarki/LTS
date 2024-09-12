<?php
session_start();
    require_once('../connection.php');
    $conn = connection();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="image/cuyapo-logo.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
<style>

        .form-container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 100px;
        }

        form{
            background-color: white;
            position: relative;
            top: 70px;
            text-align: center;
            border: 2px solid gray;
            border-radius: 10px;
            width: 300px;
            padding-bottom: 30px;
            padding-left: 15px;
            padding-right: 15px;
            color: black;
            margin-top: 30px;
            
        }

        label, input{
            padding: 10px;
        }

        .myLoginBtn{
           width: 100%;
           margin-top: 10px;
           margin-bottom: 10px;
        }

        .errorMessage{
         position: absolute;
         top: 60px;
         left: 5px;
        background-color: red;
        color: whitesmoke;
        z-index: 2;
        width: 96%;
        }



        @media only screen and (max-width: 768px) {
  /* For mobile phones: */
      
    }


    /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
   
}


/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
   
       
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
   

    
}
    </style>




<div class="form-container">
    <form class="form" class="mb-3" action="admin/login_process.php" method="post" id="loginform" onsubmit="return validateForm()">
    <img src="image/cuyapo-logo.png" width="65px;" alt="">
    <h4 style="position: relative; top: 10px;">Log In</h4>

            <div id="errorMessage" class="errorMessage"></div>

            <label for="username" class="form-label"><b>User Name</b></label>
            <input  class="form-control"  id="username" type="text" name="username" required>
            
            <label for="password" class="form-label">Password</label>
            <div class="mb-3 input-group">
                <input type="password" class="form-control" name="password" id="passwordInput">
                <button class="btn btn-outline-secondary" type="button" id="togglePasswordVisibility">
                    <i class="fas fa-eye"></i>
                </button>
            </div>

            <button  class="btn btn-primary myLoginBtn" type="submit" name="submit">Login</button>
            
            <a style=" padding: 5px;" href="../index.php">Back to Home</a>

            <a style=" padding: 5px;" href="forgot_password.php">Forgot Password</a>
            
    
        </form>
    </div>

 <script>
        document.getElementById("loginform").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Send form data via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login_process.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Response from PHP file
            var response = xhr.responseText;
            document.getElementById("errorMessage").innerText = response;
            
            // Check if the response is either "Success" or "Unsuccessful"
        if (response.trim() === "Success") {
            // Redirect to admin_dashboard.php
            window.location.href = "resolutions_dash.php";

        } else {
            // Handle unexpected responses (optional)
            console.log("Unexpected response:", response.trim());
        }

        }
    };
    xhr.send(formData);
});
</script>
<script src="Js/pass_eye.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>