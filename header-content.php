
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="admin\Css\header.css">
    <title>Dashboard</title>
    
</head>
<body>

<style>

.header2{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
}

.old-english-text {
font-family: "Old English Text MT", serif;
}

.times-new-roman {
font-family: "Times New Roman", Times, serif;
font-style: italic;
font-weight: bold;
}

.logo{
position: absolute;
top: 95px;
left: 300px;
}

.navdown{
display: flex;
justify-content: flex-end;
}



@media only screen and (max-width: 768px) {
/* For mobile phones: */
#drop{
    position: relative;
    text-align: center;
    margin-left: 60px;
}

.dots {
    display: none;
}

.logo{
position: relative;
left: 10px;
top: -10px;
}

.header2{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
}

}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
.logo{
position: relative;
left: 10px;
top: -10px;
}

.header2{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
}
}


/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
.logo{
    position: relative;
        left: 10px;
        top: -10px;
}

.header2{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
}
   
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
.logo{
    position: relative;
left: 10px;
top: -10px;
}

.header2{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
.logo{
position: absolute;
top: 40px;
left: 160px;
}

.header2{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
.logo{
position: absolute;
top: 40px;
left: 280px;
}

.header2{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
}


}

</style>
        <div class="header2">
        <div class="logo">
            <a href="index.php">
                <img src="admin\image\cuyapo-logo.png" width="100px" alt="">
            </a>
        </div>

               <h5 class="times-new-roman">Republic of the Philippines</h5> 
               <h2 class="old-english-text ">Office of the Sangguniang Bayan</h2>
               <h5 class="times-new-roman">Cuyapo, Nueva Ecija</h5>
        </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<body>
</html>