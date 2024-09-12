<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        header{
        position: -webkit-sticky; /* For older Safari browsers */
        position: sticky;        /* Standard property for other modern browsers */
        top: 0;                  /* Distance from the top of the viewport */
        color: white;            /* Text color of the links */
        z-index: 1000;           /* Ensure the navbar stays on top of other content */
      }

      #navs{
        background-color: #0c4aad;
      }

     #navs .navbar-nav .nav-link {
        color: white;
    }

   #navs .navbar-nav .nav-link:hover {
        color: black;
    }

    #drop{
        position: absolute;
        top: 40px;
         left: -30px;
    }

    .navbar-brand{
    color: white;
    padding: 6px;
    }

    
    #navbarDropdown{
        color: white;
    }


    #navbarDropdown:hover{
        color: gray;
    }
    </style>






 <nav id="navs" class="navbar navbar-expand-lg  navbar-dark ">
    <div class="container">

        <a class="navbar-brand" href="admin/resolutions_dash.php">SB-CUYAPO</a>

                        <li style="list-style-type: none;" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>

                    <div style="text-align: center; background-color: rgba(0, 0, 0, 0.8);" class="dropdown-menu" id="drop" aria-labelledby="navbarDropdown">
                        <button  style="border-style: none; border-radius: 6px;" type="button" id="prof-btn">Edit Account</button>
                        <a style="text-align: center; color: white; margin: 10px; border-radius: 6px;" id="dropdown-item" href="log-out.php">Logout</a>
                    </div>
                </li>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>