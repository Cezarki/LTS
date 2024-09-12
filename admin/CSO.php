<?php
session_start();
$conn = new PDO('mysql:host=localhost; dbname=cuyapo_municipals', 'root', '') or die(mysql_error());

if(isset($_POST['add'])){
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $temp = $_FILES['file']['tmp_name'];
    $referenceNumber = $_POST['ReferenceNum']; // Capture the reference number from the form
    $dateTime = $_POST['time']; // Capture the date and time from the form
    $proponent = $_POST['proponents'];
    $seconded = $_POST['seconded'];
    $committe = $_POST['committe'];

    $fname = date("YmdHis").'_'.$name;
    $chk = $conn->query("SELECT * FROM upload_cso WHERE name = '$name' ")->rowCount();

    if($chk){
        $i = 1;
        $c = 0;
        while($c == 0){
            $i++;
            $reversedParts = explode('.', strrev($name), 2);
            $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
            $chk2 = $conn->query("SELECT * FROM upload_cso WHERE name = '$tname' ")->rowCount();
            if($chk2 == 0){
                $c = 1;
                $name = $tname;
            }
        }
    }

    $move = move_uploaded_file($temp,"cso/".$fname);

    if($move){
        // Include reference_number and date_time in the insert query
        $query = $conn->query("INSERT INTO upload_cso(name, fname, reference_number, date_time ,`proponent`, `seconded`, `committe`) VALUES('$name','$fname','$referenceNumber','$dateTime' , '$proponent', '$seconded', '$committe')");
        if($query){
            header("location: CSO.php");
            exit;
        } else {
            die(mysql_error());
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Css\admin_dash.css">
    <link rel="shortcut icon" href="image/cuyapo-logo.png" type="image/x-icon">
    <title>Resolutions</title>
</head>
<body>

<style>
    #submit{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #mod{
        position: relative;
        top: 150px;
    }

</style>

<?php
require_once('../connection.php');
$conns = connection();

$sql = "SELECT * FROM `admin_db` WHERE 11";  // Select all records
$result = mysqli_query($conns, $sql);

if ($result === false) {
    die("Error: " . mysqli_error($conns));
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $name = $row['name'];
        $email = $row["email"];
        $username = $row['username'];
        $password = $row['password'];

    }
}


// Check if the form is submitted
if (isset($_POST['update'])) {
    // Get form data
    $name = mysqli_real_escape_string($conns, $_POST['name']);
    $username = mysqli_real_escape_string($conns, $_POST['username']);
    $password = mysqli_real_escape_string($conns, $_POST['password']);
    $emaikl = mysqli_real_escape_string($conns, $_POST['email']);

    // Update data in the database
    $sqls = "UPDATE admin_db SET username='$username', password='$password', name='$name' WHERE id = 11";

    if ($conns->query($sqls) === TRUE) {
     //   echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conns->error;
    }
}

// Close the database connection
mysqli_close($conns);



?>
            <div id="prof-modal" class="prof-modal">
                <div class="profile">
                <span id="Xclose">X</span>
                <form action="" method="post">
                <div class="w-10 p-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div> 

                <div class="w-10 p-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div> 

                <div class="w-10 p-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div> 

                <div class="w-10 p-3">
                <label for="password" class="form-label">Password</label>
            <div class="mb-3 input-group">
                <input type="password" class="form-control" name="password" id="passwordInput" value="<?php echo $password; ?>">
                <button class="btn btn-outline-secondary" type="button" id="togglePasswordVisibility">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            </div>

            <div class="w-10 p-3">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
                </form>
                 </div>
                </div>
            </div>



            <div class="myModal" id="Modal">
                <div class="container-modals" id="mod">
                    <span class="modClose" id="CloseModal">X</span>
                    <form class="form" enctype="multipart/form-data" action="" name="form" method="post">
                
                    <div class="w-50 p-3">
                    <label for="file">Select File</label>
                    <input type="file" name="file" id="file" class="form-control mb-3" required/>
                    </div>
            
                    <div id="submit" class="w-50 p-3">
                        <button type="submit" name="add" class="btn btn-primary">Upload</button>
                    </div>
                </form>
                </div>
            </div>

             <!--Edit Form--->
             <div class="myModal" id="editModal">
    <div class="container-modals">
        <span class="modClose" id="Edit-CloseModal">X</span>
        <form class="form" enctype="multipart/form-data" action="res_edit.php" name="form" method="post">
        <div class="w-75 p-3">
                <label for="edit_res">Resolution Number</label>
                <input type="text" name="edit_res" class="form-control mb-3" id="resolution_num" required>
            </div>

            <input type="hidden" name="myId" value="">

            <div class="w-50 p-3">
                <label for="edi_propo">Proponent</label>
                <input type="text" name="edit_propo" class="form-control mb-3" id="proponentId" required>
            </div>

            <div class="w-50 p-3">
                <label for="edit_sec">Seconded</label>
                <input type="text" name="edit_sec" class="form-control mb-3" id="secondeId" required>
            </div>

            <div class="w-50 p-3">
                <label for="edit_com">Committe</label>
                <input type="text" name="edit_com" class="form-control mb-3" id="committeId" required>
            </div>

            <div class="w-50 p-3">
                <label for="edit_times">Date</label>
                <input type="text" id="times" class="form-control mb-3" name="edit_times" required>
            </div>

            <button type="submit" name="update" id="adds" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>                           <!--End---->
<header>
            
            <nav id="navs" class="navbar navbar-expand-lg  navbar-dark ">
    <div class="container">

        <a class="navbar-brand" href="resolutions_dash.php">SB-CUYAPO</a>

                        <li style="list-style-type: none;" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>

                    <div style="text-align: center; background-color: rgba(0, 0, 0, 0.8);" class="dropdown-menu" id="drop" aria-labelledby="navbarDropdown">
                        <button  style="border-style: none; border-radius: 6px;" type="button" id="prof-btn">Edit Account</button>
                        <a style="text-align: center; color: white; margin: 10px; border-radius: 6px;" id="dropdown-item" href="../log-out.php">Logout</a>
                    </div>
                </li>
        </div>
    </div>
</nav>

            </header>
    
<div class="row-fluid">
    <div class="span12">
        <div class="container">

            <h3 style="text-align: center; padding: 10px;"><p>ISSUANCES ARCHIVE</p></h3> 
            
            <div class="search">
            <div>
            <b>Search:</b>
            </div>
            <div>
            <input  type="text" class="form-control" id="searchInput" placeholder="Type to search..." oninput="filterTable()">
            </div>
        </div>
                <H4 style="position: static; left: 30px;">CSO Dashboard</H4>
                
                <div style="position: static;" class="dropdown">
                <button id="add-btn" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Choose Dashboard
                </button>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../SbCuyapo_Officials.php">Officials</a></li>
                    <li><a class="dropdown-item" href="resolutions_dash.php">Resolution</a></li>
                    <li><a class="dropdown-item" href="ordinances_dash.php">Ordinance</a></li>
                    <li><a class="dropdown-item" href="CSO.php">CSO</a></li>
                    <li><a class="dropdown-item" href="TODA.php">TODA</a></li>
                    <li><a class="dropdown-item" href="LRC.php">LRC</a></li>
                </ul>
                </div>
            <br />
            <br />

        <div class="document-container">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        
                        <th width="70%" style="text-align: center">Title</th>
                        
                        <th colspan="2" style="text-align: center">Action</th>  
                    </tr>
                </thead>

                <tbody id="dataTable">


                <?php
                $query = $conn->query("SELECT * FROM upload_cso ORDER BY id DESC");
                while($row = $query->fetch()){
                    echo "<tr>";
                   
                    echo '<td style="text-align: center"><a href="cso_pdf.php?filename=' . $row['id'] . '&f=' . $row['fname'] . '">' . $row['name'] . '</a></td>';
                    
                    
                    echo '<td><center><button class="btn btn-danger"><a class="link" href="delete_cso.php?id=' . $row['id'] . '"><i class="fa-solid fa-trash"></i></a></button></center></td>';
                    echo "</tr>";
                ?>
                <?php }?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="footer">
<?php include('../footer.php'); ?>
</div>
<script src="Js/pass_eye.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        const modal = $('#editModal');
        const closeBtn = $('.modClose');
        const resolutionInput = $('#resolution_num');
        const proponentInput = $('#proponentId');
        const secondedInput = $('#secondeId');
        const committeeInput = $('#committeId');
        const timesInput = $('#times');
        const filesInput = $('#files');

        // Function to fetch data and populate modal
        function fetchDataAndPopulateModal(id) {
            // You may need to adjust the AJAX URL based on your server setup
            $.ajax({
                url: 'resolution_id.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    const selectedData = data.find(item => item.id == id);

                    if (selectedData) {
                        // Populate modal inputs with selected data
                       // Populate modal inputs with selected data
                        resolutionInput.val(selectedData.reference_number);
                        proponentInput.val(selectedData.proponent);
                        secondedInput.val(selectedData.seconded);
                        committeeInput.val(selectedData.committe);
                        timesInput.val(selectedData.date_time);
                       
                        $('input[name="myId"]').val(selectedData.id); // Set the value of the hidden ID input field
                        modal.show();
                        
                    } else {
                        console.error('No data found for ID:', id);
                        alert('No data found for this entry.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                    alert('Failed to fetch data. Please try again.');
                }
            });
        }

        // Event handler for opening the modal with fetched data
        $('.edit-btn-res').on('click', function() {
            const id = $(this).data('id-res');
            fetchDataAndPopulateModal(id);
        });

        // Closing the modal interactions
        closeBtn.on("click", function() {
            modal.hide();
        });

        $(window).on("click", function(event) {
            if ($(event.target).is(modal)) {
                modal.hide();
            }
        });
    });
</script>


<script>

var viewModal = document.getElementById('Modal');

var addButton = document.getElementById('add-btn');

var myClose = document.getElementById('CloseModal');

addButton.onclick = function show(){
    viewModal.style.display = 'block';
}

myClose.onclick = function close(){
    viewModal.style.display = 'none';
}
</script>


<script>
    var profmodal = document.getElementById('prof-modal');

var probtn = document.getElementById('prof-btn');

var profspan = document.getElementById('Xclose');

probtn.onclick = function show(){
    profmodal.style.display = 'block';
}

profspan.onclick = function close(){
    profmodal.style.display = 'none';

}
</script>
<script src="Js/search.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>




