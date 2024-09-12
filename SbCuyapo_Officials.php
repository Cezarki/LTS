<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

//Retrieve data from processing another file using require method

require('captain-data.php');
require('kgwd1-data.php');
require('kgwd2-data.php');
require('kgwd3-data.php');
require('kgwd4-data.php');
require('kgwd5-data.php');
require('kgwd6-data.php');
require('kgwd7-data.php');
require('secretary-data.php');
require('treasurer-data.php');
require('sk-chairman-data.php');
require('sk-kgwd1-data.php');
require('sk-kgwd2-data.php'); 
require('sk-kgwd3-data.php');
require('sk-kgwd4-data.php');
require('sk-kgwd5-data.php');
require('sk-kgwd6-data.php');
require('sk-kgwd7-data.php');

//Officials Picture
require('captain-img-data.php');
require('kgwd-img-data.php');
require('kgwd2-img-data.php');
require('kgwd3-img-data.php');
require('kgwd4-img-data.php');
require('kgwd5-img-data.php');
require('kgwd6-img-data.php');
require('kgwd7-img-data.php');
require('secretary-img-data.php');
require('treasurer-img-data.php');
require('sk-c-img-data.php');
require('sk1-img-data.php');
require('sk2-img-data.php');
require('sk3-img-data.php');
require('sk4-img-data.php');
require('sk5-img-data.php');
require('sk6-img-data.php');
require('sk7-img-data.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="image/cuyapo-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css_official/cuyapo_officials.css">
    <title>Officials</title>
</head>
<body>
    <style>

.offical-container{
    padding-left: 60px;
    padding-right: 60px;
}

#prof-btn{
    color: white;
    background-color: rgba(0, 0, 0, 0.1);
}

#prof-btn:hover{
    background-color: #ab1703;
}

#dropdown-item{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}


#dropdown-item:hover{
    display: flex;
    flex-wrap: wrap;
    background-color: #ab1703;
}

.prof-modal{
    position: absolute;
    top: -120px;
    display: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    height: 124vh;
    z-index: 1000;
}

#prof-btn{
    color: white;
    background-color: rgba(0, 0, 0, 0.1);
}

#prof-btn:hover{
    background-color: #ab1703;
}

#dropdown-item{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}


#dropdown-item:hover{
    display: flex;
    flex-wrap: wrap;
    background-color: #ab1703;
}

.profile{
    position: relative;
    width: 600px;
    background-color: white;
    padding: 20px;
    top: 150px;
    left: 330px;
    border-radius: 10px;
}

#Xclose{
    position: relative;
        top: -12px;
        float: right;
}

#Xclose:hover , #Xclose:focus{
      cursor: pointer;
        background-color: black;
        color: white;
}

#togglePasswordVisibility{
    margin-top: 8px;
    margin-bottom: 8px;
}
    </style>


<?php include('header_dash.php'); ?>
<h4 style="text-align: center;">Our Honorable Elected Officials</h4>

<?php

$sql = "SELECT * FROM `admin_db` WHERE 11";  // Select all records
$result = mysqli_query($conn, $sql);

if ($result === false) {
    die("Error: " . mysqli_error($conn));
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
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $emaikl = mysqli_real_escape_string($conn, $_POST['email']);

    // Update data in the database
    $sqls = "UPDATE admin_db SET username='$username', password='$password', name='$name' WHERE id = 11";

    if ($conn->query($sqls) === TRUE) {
     //   echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
mysqli_close($conn);



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

                <label for="password" class="form-label">Password</label>
            <div class="mb-3 input-group">
                <input type="password" class="form-control" name="password" id="passwordInput" value="<?php echo $password; ?>">
                <button class="btn btn-outline-secondary" type="button" id="togglePasswordVisibility">
                    <i class="fas fa-eye"></i>
                </button>
            </div>

                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                </div>
            </div>


<div class="offical-container">
<!--Captain Form-->
 <div id="myModal" class="modal">
 <div class="modal-content--">
    <span class="close">&times</span>
    <form action="captain-form.php" class="form-container" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <div class="mb-3">
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="term" name="term" required>
            </div>

            <div class="form-control">
            <label for="captain">Position:</label>
            <select id="captain" name="captain" required>
                <option value="Captain">Captain</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

 </div>

 </div>

 <div id="myModal-edit" class="modal-edit">
 <div class="modal-content-edit">
    <span class="close-edit">&times</span>
    <form class="form-container" action="captain-edit.php" method="post">
    <fieldset>
        <legend>Personal Information</legend>
        <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value ="<?php echo $fullname; ?>" required>
        </div>

        <div class="form-control">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
        <option value="Male" <?php if ($gender == 'Male') echo 'selected'; ?>>Male</option>
        <option value="Female" <?php if ($gender == 'Female') echo 'selected'; ?>>Female</option>
        </select>
        </div>


        <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo  $birthday; ?>" required>
        </div>

        <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship; ?>" required>
        </div>

        <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civilstatus; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
        </div>

        <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="term" name="term" value="<?php echo $term; ?>" required>
        </div>

        <div class="form-control">
            <label for="position">Position:</label>
            <select id="position" name="position" value="<?php echo $position; ?>" required>
                <option value="Captain">Captain</option>
            </select>
        </div>
    </fieldset>

    <fieldset>
        <legend>Contact Information</legend>
        <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address; ?>" required>
        </div>

        <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" value="<?php echo $contact_number; ?>" required>
        </div>

        <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
        </div>
    </fieldset>

    <fieldset>
        <legend>Emergency Contact</legend>
        <div class="form-control">
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname; ?>" required>
        </div>

        <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" value="<?php echo $emergencycontact; ?>" required>
        </div>
    </fieldset>

    <div class="form-control">
    <button class="btn btn-primary btn" type="submit" name="update">Update</button>
    </div>
</form>

 </div>
 </div>

 <div id="myModal-view" class="modal-view">
 <div class="modal-content-views--">
    <span class="close-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!----End Of Captain Form-->

<!---Kagawad 1 Form---->
<div id="myModal-kawagad-1" class="modal-kagawad-1">
 <div class="modal-content-kagawad-1">
    <span class="close-kagawad-1">&times</span>
    <form class="form-container" action="kgwd1-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname"  required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="kagawad1" name="position" required>
                <option value="Kagawad 1">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contacts" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

 </div>

 </div>

 <div id="myModal-kagawad111-edit" class="modal-kawagad111-edit">
 <div class="modal-content-kagawad111-edit">
    <span class="close-kagawad-edit111">&times</span>
    <form class="form-container" action="kgwd1-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname1; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender"  value="<?php echo $gender1; ?>"  required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday1; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship1; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status1; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="" name="term" value="<?php echo $term1; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="kagawad1" name="position" value="<?php echo $position1; ?>" required>
                <option value="Kagawad 1">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address1; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contacts" placeholder="e.g., 09123456789" value="<?php echo $contact_numbersss1; ?>" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email1; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname1; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact1; ?>"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>

 </div>
 </div>

 <div id="myModal-kagawad-view" class="modal-kagawad-view">
 <div class="modal-content-kagawad-view">
    <span class="close-kagawad-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position1 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname1 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender1 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday1 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship1 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status1 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term1 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address1 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_numbersss1 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email1 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname1 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact1 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!---End of Kagawad 1---->

<!--kagawad 2--->
<div id="myModal-kawagad-2" class="modal-kagawad-2">
 <div class="modal-content-kagawad-2">
    <span class="close-kagawad-2">&times</span>
    <form class="form-container" action="kgwd2-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname"  required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="kagawad2">Position:</label>
            <select id="kagawad2" name="kagawad2" required>
                <option value="Kagawad 2">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

 </div>

 </div>

 <div id="myModal-kagawad2-edit" class="modal-kawagad2-edit">
 <div class="modal-content-kagawad2-edit">
    <span class="close-kagawad2-edit">&times</span>
    <form class="form-container" action="kgwd2-edit.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname2; ?>"  required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender2; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday2; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship2; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status2; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="" name="term" value="<?php echo $term2; ?>"required>
            </div>

            <div class="form-control">
            <label for="kagawad2">Position:</label>
            <select id="kagawad2" name="kagawad2" value="<?php echo $position2; ?>" required>
                <option value="Kagawad 2">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address2; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact"  placeholder="e.g., 09123456789" value="<?php echo $contact_number2; ?>" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email2; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname2; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact2; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>

 </div>
 </div>

 <div id="myModal-kagawad2-view" class="modal-kagawad2-view">
 <div class="modal-content-kagawad2-view">
    <span class="close-kagawad2-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position2 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname2 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender2 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday2 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship2 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status2 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term2 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address2 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number2 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email2 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname2 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact2 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 2-->

<!--Kagawad 3-->
<div id="myModal-kawagad-3" class="modal-kagawad-3">
 <div class="modal-content-kagawad-3">
    <span class="close-kagawad-3">&times</span>
    <form class="form-container" action="kgwd3-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" required>
                <option value="Kagawad 3">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

 </div>

 </div>

 <div id="myModal-kagawad3-edit" class="modal-kawagad3-edit">
 <div class="modal-content-kagawad3-edit">
    <span class="close-kagawad3-edit">&times</span>
    <form class="form-container" action="kgwd3-edit.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname3; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender3; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday3; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship3; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status3; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term3; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position3; ?>" required>
                <option value="Kagawad 3">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address3; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number3; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email3; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname3; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact3; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>

 </div>
 </div>

 <div id="myModal-kagawad3-view" class="modal-kagawad3-view">
 <div class="modal-content-kagawad3-view">
    <span class="close-kagawad3-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position3 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname3 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender3 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday3 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship3 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status3 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term3 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address3 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number3 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email3 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname3 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact3 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 3-->

<!--Kagawad 4-->
<div id="myModal-kawagad-4" class="modal-kagawad-4">
 <div class="modal-content-kagawad-4">
    <span class="close-kagawad-4">&times</span>
    <form class="form-container" action="kgwd4-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="kagawad4" name="position" required>
                <option value="Kagawad 4">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

 </div>

 </div>

 <div id="myModal-kagawad4-edit" class="modal-kawagad4-edit">
 <div class="modal-content-kagawad4-edit">
    <span class="close-kagawad4-edit">&times</span>
    <form class="form-container" action="kgwd4-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname4; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender4; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday4; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship4; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status4; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term4; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position4; ?>" required>
                <option value="Kagawad 4">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address4; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number4; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email4; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname4; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact4; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>

 </div>
 </div>

 <div id="myModal-kagawad4-view" class="modal-kagawad4-view">
 <div class="modal-content-kagawad4-view">
    <span class="close-kagawad4-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position4 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname4 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender4 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday4 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship4 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status4 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term4 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address4 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number4 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email4 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname4 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact4 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 4-->

<!--Kagawad 5---->
<div id="myModal-kawagad-5" class="modal-kagawad-5">
 <div class="modal-content-kagawad-5">
    <span class="close-kagawad-5">&times</span>
    <form class="form-container" action="kgwd5-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="kagawad5">Position:</label>
            <select id="kagawad5" name="position" required>
                <option value="Kagawad 5">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-kagawad-a5-edit" class="modal-kawagad-a5-edit">
 <div class="modal-content-kagawad-a5-edit">
    <span class="close-kagawad-a5-edit">&times</span>
    <form class="form-container" action="kgwd5-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname5; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender5; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday5; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship5; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status5; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term5; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position5; ?>" required>
                <option value="Kagawad 5">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address5; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number5; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email5; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname5; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact5; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-kagawad5a-view" class="modal-kagawad5a-view">
 <div class="modal-content-kagawad5a-view">
    <span class="close-kagawad5a-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position5 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname5 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender5 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday5 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship5 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status5 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term5 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address5 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number5 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email5 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname5 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact5 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 5--->

<!--Kagawad 6-->
<div id="myModal-kawagad-6" class="modal-kagawad-6">
 <div class="modal-content-kagawad-6">
    <span class="close-kagawad-6">&times</span>
    <form class="form-container" action="kgwd6-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="kagawad6" name="position" required>
                <option value="Kagawad 6">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-kagawad-a6-edit" class="modal-kawagad-a6-edit">
 <div class="modal-content-kagawad-a6-edit">
    <span class="close-kagawad-a6-edit">&times</span>
    <form class="form-container" action="kgwd6-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname6; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender6; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday6; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship6; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status6; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term6; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position6; ?>" required>
                <option value="Kagawad 6">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address6; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number6; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email6; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname6; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact6; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-kagawad6a-view" class="modal-kagawad6a-view">
 <div class="modal-content-kagawad6a-view">
    <span class="close-kagawad6a-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position6 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname6 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender6 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday6 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship6 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status6 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term6 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address6 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number6 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email6 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname6 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact6 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 6--->

<!--Kagawad 7-->
<div id="myModal-kawagad-7" class="modal-kagawad-7">
 <div class="modal-content-kagawad-7">
    <span class="close-kagawad-7">&times</span>
    <form class="form-container" action="kgwd7-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="kagawad7" name="position" required>
                <option value="Kagawad 7">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-kagawad-a7-edit" class="modal-kawagad-a7-edit">
 <div class="modal-content-kagawad-a7-edit">
    <span class="close-kagawad-a7-edit">&times</span>
    <form class="form-container" action="kgwd7-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname7; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender7; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday7; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship7; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status7; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term7; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position7; ?>" required>
                <option value="Kagawad 7">Kagawad</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address7; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number7; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email7; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname7; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact7; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-kagawad7a-view" class="modal-kagawad7a-view">
 <div class="modal-content-kagawad7a-view">
    <span class="close-kagawad7a-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position7 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname7 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender7 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday7 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship7 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status7 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term7 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address7 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number7 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email7 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname7 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact7 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 7-->

<!--Secretary-->
<div id="myModal-secretary" class="modal-secretary">
 <div class="modal-content-secretary">
    <span class="close-secretary">&times</span>
    <form class="form-container" action="secretary-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="secretary" name="position" required>
                <option value="Secretary">Secretary</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-secretary-a1-edit" class="modal-secretary-a1-edit">
 <div class="modal-content-secretary-a1-edit">
    <span class="close-secretary-a1-edit">&times</span>
    <form class="form-container" action="secretary-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname8; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender8; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday8; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship8; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status8; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term8; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position8; ?>" required>
                <option value="Secretary">Secretary</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address8; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number8; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email8; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname8; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact8; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-secretary-view" class="modal-secretary-view">
 <div class="modal-content-secretary-view">
    <span class="close-secretary-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position8 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname8 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender8 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday8 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship8 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status8 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term8 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address8 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number8 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email8 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname8 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact8 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Secretary-->

<!--Treasurer-->
<div id="myModal-treasurer" class="modal-treasurer">
 <div class="modal-content-treasurer">
    <span class="close-treasurer">&times</span>
    <form class="form-container" action="treasurer-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="treasurer" name="position" required>
                <option value="Treasurer">Secretary</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-treasurer-a1-edit" class="modal-treasurer-a1-edit">
 <div class="modal-content-treasurer-a1-edit">
    <span class="close-treasurer-a1-edit">&times</span>
    <form class="form-container" action="treasurer-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname9; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender9; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday9; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship9; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status9; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term9; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position9; ?>" required>
                <option value="Treasurer">Treasurer</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address9; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number9; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email9; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname9; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact9; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-treasurer-view" class="modal-treasurer-view">
 <div class="modal-content-treasurer-view">
    <span class="close-treasurer-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position9 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname9 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender9 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday9 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship9 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status9 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term9 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address9 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number9 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email9 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname9 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact9 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Treasurer-->

<!--Sk Chairman-->
<div id="myModal-sk-chairman" class="modal-sk-chairman">
 <div class="modal-content-sk-chairman">
    <span class="close-sk-chairman">&times</span>
    <form class="form-container" action="sk-chairman-form.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="sk-chairman" name="position" required>
                <option value="Sk Chairman">SK Chairman</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-sk-a1-edit" class="modal-sk-a1-edit">
 <div class="modal-content-sk-a1-edit">
    <span class="close-sk-a1-edit">&times</span>
    <form class="form-container" action="sk-chairman-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname10; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender10; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday10; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship10; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status10; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term10; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position10; ?>" required>
                <option value="Sk Chairman">Sk Chairman</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address10; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number10; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email10; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname10; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact10; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-Sk-view" class="modal-Sk-view">
 <div class="modal-content-Sk-view">
    <span class="close-Sk-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position10 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname10 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender10 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday10 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship10 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status10 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term10 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address10 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number10 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email10 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname10 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact10 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Sk Chairman-->


<!--Sk Kagawad 1-->
<div id="myModal-sk-kagawad" class="modal-sk-kagawad1">
 <div class="modal-content-sk-kagawad1">
    <span class="close-sk-kagawad1">&times</span>
    <form class="form-container" action="sk-kgwd1-form.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="sk-chairman" name="position" required>
                <option value="Sk Kagawad 1">SK Kagawad 1</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-sk-kagawad-a1-edit" class="modal-sk-kagawad-a1-edit">
 <div class="modal-content-sk-kagawad-a1-edit">
    <span class="close-sk-kagawad-a1-edit">&times</span>
    <form class="form-container" action="sk-kgwd1-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname11; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender11; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday11; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship11; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status11; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term11; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position11; ?>" required>
                <option value="Sk Kagawad 1">Sk Kagawad 1</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address11; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number11; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email11; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname11; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact11; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-Sk-kagawad1-view" class="modal-Sk-kagawad1-view">
 <div class="modal-content-Sk-kagawad1-view">
    <span class="close-Sk-kagawad1-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position11 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname11 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender11 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday11 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship11 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status11 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term11 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address11 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number11 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email11 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname11 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact11 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Sk Kagawad 1-->

<!--Sk Kagawad 2-->
<div id="myModal-sk-kagawad2" class="modal-sk-kagawad2">
 <div class="modal-content-sk-kagawad2">
    <span class="close-sk-kagawad2">&times</span>
    <form class="form-container" action="sk-kgwd2-form.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="sk-chairman" name="position" required>
                <option value="Sk Kagawad 2">SK Kagawad 2</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-sk-kagawad-a2-edit" class="modal-sk-kagawad-a2-edit">
 <div class="modal-content-sk-kagawad-a2-edit">
    <span class="close-sk-kagawad-a2-edit">&times</span>
    <form class="form-container" action="sk-kgwd2-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname12; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender12; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday12; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship12; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status12; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term12; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position12; ?>" required>
                <option value="Sk Kagawad 2">Sk Kagawad 2</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address12; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number12; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email12; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname12; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact12; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-Sk-kagawad2-view" class="modal-Sk-kagawad2-view">
 <div class="modal-content-Sk-kagawad2-view">
    <span class="close-Sk-kagawad2-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position12 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname12 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender12 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday12 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship12 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status12 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term12 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address12 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number12 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email12 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname12 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact12 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 2-->

<!--Sk Kagawad 3-->
<div id="myModal-sk-kagawad3" class="modal-sk-kagawad3">
 <div class="modal-content-sk-kagawad3">
    <span class="close-sk-kagawad3">&times</span>
    <form class="form-container" action="sk-kgwd3-form.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="sk-chairman" name="position" required>
                <option value="Sk Kagawad 3">SK Kagawad 3</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-sk-kagawad-a3-edit" class="modal-sk-kagawad-a3-edit">
 <div class="modal-content-sk-kagawad-a3-edit">
    <span class="close-sk-kagawad-a3-edit">&times</span>
    <form class="form-container" action="sk-kgwd3-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname13; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender13; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday13; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship13; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status13; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term13; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position13; ?>" required>
                <option value="Sk Kagawad 3">Sk Kagawad 3</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address13; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number13; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email13; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname13; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact13; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-Sk-kagawad3-view" class="modal-Sk-kagawad3-view">
 <div class="modal-content-Sk-kagawad3-view">
    <span class="close-Sk-kagawad3-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position13 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname13 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender13 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday13 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship13 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status13 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term13 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address13 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number13 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email13 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname13 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact13 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 3-->

<!--Sk Kagawad 4-->
<div id="myModal-sk-kagawad4" class="modal-sk-kagawad4">
 <div class="modal-content-sk-kagawad4">
    <span class="close-sk-kagawad4">&times</span>
    <form class="form-container" action="sk-kgwd4-form.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="sk-chairman" name="position" required>
                <option value="Sk Kagawad 4">SK Kagawad 4</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-sk-kagawad-a4-edit" class="modal-sk-kagawad-a4-edit">
 <div class="modal-content-sk-kagawad-a4-edit">
    <span class="close-sk-kagawad-a4-edit">&times</span>
    <form class="form-container" action="sk-kgwd4-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname14; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender14; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday14; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship14; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status14; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term14; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position14; ?>" required>
                <option value="Sk Kagawad 4">Sk Kagawad 4</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address14; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number14; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email14; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname14; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact14; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-Sk-kagawad4-view" class="modal-Sk-kagawad4-view">
 <div class="modal-content-Sk-kagawad4-view">
    <span class="close-Sk-kagawad4-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position14 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname14 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender14 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday14 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship14 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status14 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term14 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address14 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number14 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email14 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname14 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact14 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Sk Kagawad 4-->

<!--Sk Kagawad 5-->
<div id="myModal-sk-kagawad-b5" class="modal-sk-kagawad-b5">
 <div class="modal-content-sk-kagawad-b5">
    <span class="close-sk-kagawad-b5">&times</span>
    <form class="form-container" action="sk-kgwd5-form.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="sk-chairman" name="position" required>
                <option value="Sk Kagawad 5">SK Kagawad 5</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-sk-kagawad-b5-edit" class="modal-sk-kagawad-b5-edit">
 <div class="modal-content-sk-kagawad-b5-edit">
    <span class="close-sk-kagawad-b5-edit">&times</span>
    <form class="form-container" action="sk-kgwd5-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname15; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender15; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday15; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship15; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status15; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term15; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position15; ?>" required>
                <option value="Sk Kagawad 5">Sk Kagawad 5</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address15; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number15; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email15; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname15; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact15; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-Sk-kagawad-b5-view" class="modal-Sk-kagawad-b5-view">
 <div class="modal-content-Sk-kagawad-b5-view">
    <span class="close-Sk-kagawad-b5-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position15 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname15 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender15 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday15 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship15 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status15 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term15 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address15 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number15 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email15 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname15 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact15 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Kagawad 5-->

<!--Sk Kagawad 6-->
<div id="myModal-sk-kagawad-b6" class="modal-sk-kagawad-b6">
 <div class="modal-content-sk-kagawad-b6">
    <span class="close-sk-kagawad-b6">&times</span>
    <form class="form-container" action="sk-kgwd6-from.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="sk-chairman" name="position" required>
                <option value="Sk Kagawad 6">SK Kagawad 6</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-sk-kagawad-b6-edit" class="modal-sk-kagawad-b6-edit">
 <div class="modal-content-sk-kagawad-b6-edit">
    <span class="close-sk-kagawad-b6-edit">&times</span>
    <form class="form-container" action="sk-kgwd6-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname16; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender16; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday16; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship16; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status16; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term16; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position16; ?>" required>
                <option value="Sk Kagawad 6">Sk Kagawad 6</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address16; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number16; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email16; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname16; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact16; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-Sk-kagawad-b6-view" class="modal-Sk-kagawad-b6-view">
 <div class="modal-content-Sk-kagawad-b6-view">
    <span class="close-Sk-kagawad-b6-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position16 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname16 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender16 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday16 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship16 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status16 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term16 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address16 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number16 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email16 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname16 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact16 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Sk Kagawad 6-->

<!--Sk Kagawad 7-->
<div id="myModal-sk-kagawad-b7" class="modal-sk-kagawad-b7">
 <div class="modal-content-sk-kagawad-b7">
    <span class="close-sk-kagawad-b7">&times</span>
    <form class="form-container" action="sk-kgwd7-form.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>

            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="sk-chairman" name="position" required>
                <option value="Sk Kagawad 7">SK Kagawad 7</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact"  placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" type="submit">Submit</button>
        </div>
    </form>

     </div>
 </div>

 <div id="myModal-sk-kagawad-b7-edit" class="modal-sk-kagawad-b7-edit">
 <div class="modal-content-sk-kagawad-b7-edit">
    <span class="close-sk-kagawad-b7-edit">&times</span>
    <form class="form-container" action="sk-kgwd7-edit.php" method="post">
    <fieldset>
            <legend>Personal Information</legend>
    
            <div class="form-control">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo $fullname17; ?>" required>
            </div>

            <div class="form-control">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" value="<?php echo $gender17; ?>" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-control">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthday17; ?>" required>
            </div>

            <div class="form-control">
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo $citizenship17; ?>" required>
            </div>

            <div class="form-control">
            <label for="civilstatus">Civil Status:</label>
            <select id="civilstatus" name="civilstatus" value="<?php echo $civil_status17; ?>" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Mivorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
            </div>

            <div class="form-control">
            <label for="term">Term from to:</label>
            <input type="text" id="citizenship" name="term" value="<?php echo $term17; ?>" required>
            </div>

            <div class="form-control">
            <label for="position">Position:</label>
            <select id="" name="position" value="<?php echo $position17; ?>" required>
                <option value="Sk Kagawad 7">Sk Kagawad 7</option>
            </select>
            </div>

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <div class="form-control">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address17; ?>" required>
            </div>

            <div class="form-control">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $contact_number17; ?>"  placeholder="e.g., 09123456789" required>
            </div>

            <div class="form-control">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email17; ?>" required>
            </div>
        </fieldset>

        <fieldset>
        <div class="form-control">
            <legend>Emergency Contact</legend>
            <label for="emergencyname">Emergency Contact Name:</label>
            <input type="text" id="emergencyname" name="emergencyname" value="<?php echo $emergencyname17; ?>" required>
            </div>

            <div class="form-control">
            <label for="emergencycontact">Emergency Contact Number:</label>
            <input type="tel" id="emergencycontact" name="emergencycontact" value="<?php echo $emergencycontact17; ?>" placeholder="e.g., 09123456789" required>
            </div>
        </fieldset>

        <div class="form-control">
        <button class="btn btn-primary btn" name="update" type="submit">Update</button>
        </div>
    </form>
    </div>
</div>

<div id="myModal-Sk-kagawad-b7-view" class="modal-Sk-kagawad-b7-view">
 <div class="modal-content-Sk-kagawad-b7-view">
    <span class="close-Sk-kagawad-b7-view">&times</span>
                    <table class="table-view">
                        <legend class="personal-I">Personal Information</legend>

                        <tr>
                            <td>Position:</td>
                            <td><?php echo $position17 ?></td>
                        </tr>

                        <tr>
                            <td>Fullname:</td>
                            <td><?php echo $fullname17 ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender17 ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $birthday17 ?></td>
                        </tr>
                        <tr>
                            <td>Citizenship:</td>
                            <td><?php echo $citizenship17 ?></td>
                        </tr>
                        <tr>
                            <td>Civil Status</td>
                            <td><?php echo $civil_status17 ?></td>
                        </tr>

                        <tr>
                            <td>Term from to:</td>
                            <td><?php echo $term17 ?></td>
                        </tr>
                        
                        <tr>
                            <td>Address:</td>
                            <td><?php echo $address17 ?></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td><?php echo $contact_number17 ?></td>
                        </tr>

                        <tr>
                            <td>Email Address:</td>
                            <td><?php echo $email17 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Name:</td>
                            <td><?php echo $emergencyname17 ?></td>
                        </tr>

                        <tr>
                            <td>Emergency Contact:</td>
                            <td><?php echo $emergencycontact17 ?></td>
                        </tr>
                    </table>
             </div>
        </div>
<!--End of Sk Kagawad 7-->


<!--Upload Modal-->
<div id="upload-modal" class="style-modal">
    <div class="upload-modal-content">
        <span class="close-upload-modal">&times</span>
        <div class="mb-3">
        <form action="captain-img.php" method="post" enctype="multipart/form-data">
        <label for="img">Select image:</label>
        <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
        <input type="submit" class="btn btn-primary" name="submit" value="Upload">
         </form>
        </div>
    </div>
</div>

<div id="upload-modalk1" class="style-modalk1">
    <div class="upload-modal-contentk1">
        <span class="close-upload-modalk1">&times;</span>
        <div class="mb-3">
            <form action="kgwd-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </form>
        </div>
    </div>
</div>


<div id="upload-modalk2" class="style-modalk2">
    <div class="upload-modal-contentk2">
        <span class="close-upload-modalk2">&times</span>
        <div class="mb-3">
        <form action="kgwd2-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalk3" class="style-modalk3">
    <div class="upload-modal-contentk3">
        <span class="close-upload-modalk3">&times</span>
        <div class="mb-3">
        <form action="kgwd3-img.php"  method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalk4" class="style-modalk4">
    <div class="upload-modal-contentk4">
        <span class="close-upload-modalk4">&times</span>
        <div class="mb-3">
        <form action="kgwd4-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalk5" class="style-modalk5">
    <div class="upload-modal-contentk5">
        <span class="close-upload-modalk5">&times</span>
        <div class="mb-3">
        <form action="kgwd5-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalk6" class="style-modalk6">
    <div class="upload-modal-contentk6">
        <span class="close-upload-modalk6">&times</span>
        <div class="mb-3">
        <form action="kgwd6-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalk7" class="style-modalk7">
    <div class="upload-modal-contentk7">
        <span class="close-upload-modalk7">&times</span>
        <div class="mb-3">
        <form action="kgwd7-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modals" class="style-modals">
    <div class="upload-modal-contents">
        <span class="close-upload-modals">&times</span>
        <div class="mb-3">
        <form action="secretary-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalt" class="style-modalt">
    <div class="upload-modal-contentt">
        <span class="close-upload-modalt">&times</span>
        <div class="mb-3">
        <form action="treasurer-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalskchaiman" class="style-modalskchaiman">
    <div class="upload-modal-contentskchaiman">
        <span class="close-upload-modalskchaiman">&times</span>
        <div class="mb-3">
        <form action="sk-c-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalsk1" class="style-modalsk1">
    <div class="upload-modal-contentsk1">
        <span class="close-upload-modalsk1">&times</span>
        <div class="mb-3">
        <form action="sk1-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalsk2" class="style-modalsk2">
    <div class="upload-modal-contentsk2">
        <span class="close-upload-modalsk2">&times</span>
        <div class="mb-3">
        <form action="sk2-img.php" method="post" enctype="multipart/form-data">
             <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalsk3" class="style-modalsk3">
    <div class="upload-modal-contentsk3">
        <span class="close-upload-modalsk3">&times</span>
        <div class="mb-3">
        <form action="sk3-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalsk4" class="style-modalsk4">
    <div class="upload-modal-contentsk4">
        <span class="close-upload-modalsk4">&times</span>
        <div class="mb-3">
        <form action="sk4-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalsk5" class="style-modalsk5">
    <div class="upload-modal-contentsk5">
        <span class="close-upload-modalsk5">&times</span>
        <div class="mb-3">
        <form action="sk5-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalsk6" class="style-modalsk6">
    <div class="upload-modal-contentsk6">
        <span class="close-upload-modalsk6">&times</span>
        <div class="mb-3">
        <form action="sk6-img.php"  method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<div id="upload-modalsk7" class="style-modalsk7">
    <div class="upload-modal-contentsk7">
        <span class="close-upload-modalsk7">&times</span>
        <div class="mb-3">
        <form action="sk7-img.php" method="post" enctype="multipart/form-data">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="file" accept="image/*" required>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </div>
        </form>
    </div>
</div>

<!--End of Upload Modal-->

    <div class="box-container">
        <div>
            <div class="box">Captain</div>
            <div class="captain_conatainer"> 
        <!-- Display the uploaded image -->
        <?php if (!empty($imagePath)) : ?>
            <img class="profile_" src="<?php echo $imagePath; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
        </div>

            <div class="button">
                <button id="view-btn" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="myBtn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="edit_btn" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="upload" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Kagawad 1</div>
            <div class="captain_conatainer"><?php if (!empty($imagePath1)) : ?>
            <img class="profile_" src="<?php echo $imagePath1; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
        </div>
            <div class="button">
                <button id="kagawad-view-btn" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="kagawad-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="kagawad-edit111-btn" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="k1-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Kagawad 2</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath2)) : ?>
            <img class="profile_" src="<?php echo $imagePath2; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="kagawad2-view-btn"  class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="kagawad2-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="kagawad2-edit-btn"  class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="k2-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Kagawad 3</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath3)) : ?>
            <img class="profile_" src="<?php echo $imagePath3; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="kagawad3-view-btn" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="kagawad3-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="kagawad3-btn-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="k3-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Kagawad 4</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath4)) : ?>
            <img class="profile_" src="<?php echo $imagePath4; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="kagawad4-view-btn" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="kagawad4-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="kagawad4-edit-btn" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="k4-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Kagawad 5</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath5)) : ?>
            <img class="profile_" src="<?php echo $imagePath5; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="kagawad5-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="kagawad5-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="kagawad5-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="k5-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Kagawad 6</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath6)) : ?>
            <img class="profile_" src="<?php echo $imagePath6; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="kagawad6-btn-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="kagawad6-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="kagawad6-btn-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="k6-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Kagawad 7</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath7)) : ?>
            <img class="profile_" src="<?php echo $imagePath7; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="kagawad7-btn-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="kagawad7-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="kagawad7-btn-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="k7-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Secretary</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath8)) : ?>
            <img class="profile_" src="<?php echo $imagePath8; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="secretary-btn-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="secretary-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="secretary-btn-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="s1-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Treasurer</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath9)) : ?>
            <img class="profile_" src="<?php echo $imagePath9; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="treasurer-btn-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="treasurer-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="treasurer-btn-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="t1-button" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
            <div class="box">Sk Chairman</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath10)) : ?>
            <img class="profile_" src="<?php echo $imagePath10; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="sk-btn-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="sk-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="sk-btn-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="sk-c-btn" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Sk Kagawad 1</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath11)) : ?>
            <img class="profile_" src="<?php echo $imagePath11; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="sk-kgwd1-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="sk-kgwd1-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="sk-kgwd1-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="sk1" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Sk Kagawad 2</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath12)) : ?>
            <img class="profile_" src="<?php echo $imagePath12; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="sk-kgwd2-view"  class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="sk-kgwd2-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="sk-kgwd2-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="sk2" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Sk Kagawad 3</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath13)) : ?>
            <img class="profile_" src="<?php echo $imagePath13; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="sk-kgwd3-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="sk-kgwd3-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="sk-kgwd3-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="sk3" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Sk Kagawad 4</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath14)) : ?>
            <img class="profile_" src="<?php echo $imagePath14; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="sk-kgwd4-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="sk-kgwd4-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="sk-kgwd4-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="sk4" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Sk Kagawad 5</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath15)) : ?>
            <img class="profile_" src="<?php echo $imagePath15; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="sk-kgwd5-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="sk-kgwd5-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="sk-kgwd5-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="sk5" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Sk Kagawad 6</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath16)) : ?>
            <img class="profile_" src="<?php echo $imagePath16; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="sk-kgwd6-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="sk-kgwd6-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="sk-kgwd6-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="sk6" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
        <div>
        <div class="box">Sk Kagawad 7</div>
            <div class="captain_conatainer">
            <?php if (!empty($imagePath17)) : ?>
            <img class="profile_" src="<?php echo $imagePath17; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            </div>
            <div class="button">
                <button id="sk-kgwd7-view" class="btn btn-primary btn"><i class="fa-solid fa-eye"></i></button>
                <button id="sk-kgwd7-btn" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                <button id="sk-kgwd7-edit" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></button>
                <button id="sk7" class="btn btn-warning"><i class="fa-solid fa-upload"></i></i></button>
            </div>
        </div>
    </div>
</div>
    <script src="js/upload-imgsk7.js"></script>
    <script src="js/upload-imgsk6.js"></script>
    <script src="js/upload-imgsk5.js"></script>
    <script src="js/upload-imgsk4.js"></script>
    <script src="js/upload-imgsk3.js"></script>
    <script src="js/upload-imgsk2.js"></script>
    <script src="js/upload-imgsk1.js"></script>
    <script src="js/upload-imgskchairman.js"></script>
    <script src="js/upload-imgtreas.js"></script>
    <script src="js/upload-img-sec.js"></script>
    <script src="js/upload-imgk7.js"></script>
    <script src="js/upload-imgk6.js"></script>
    <script src="js/upload-imgk5.js"></script>
    <script src="js/upload-imgk4.js"></script>
    <script src="js/upload-imgk3.js"></script>
    <script src="js/upload-imgk2.js"></script>
    <script src="js/upload-imgk1.js"></script>
    <script src="js/upload-img.js"></script>
    <script src="js/sk-kagawad-7-view.js"></script>
    <script src="js/sk-kagawad-7-edit.js"></script>
    <script src="js/modal-sk-kagawad-7.js"></script>
    <script src="js/sk-kagawad-6-view.js"></script>
    <script src="js/sk-kagawad-6-edit.js"></script>
    <script src="js/modal-sk-kagawad-6.js"></script>
    <script src="js/sk-kagawad-5-view.js"></script>
    <script src="js/sk-kagawad-5-edit.js"></script>
    <script src="js/modal-sk-kagawad-5.js"></script>
    <script src="js/sk-kagawad4-view.js"></script>
    <script src="js/sk-kagawad4-edit.js"></script>
    <script src="js/modal-sk-kagawad4.js"></script>
    <script src="js/sk-kagawad3-view.js"></script>
    <script src="js/sk-kagawad3-edit.js"></script>
    <script src="js/modal-sk-kagawad3.js"></script>
    <script src="js/sk-kagawad2-view.js"></script>
    <script src="js/sk-kagawad2-edit.js"></script>
    <script src="js/modal-sk-kagawad2.js"></script>
    <script src="js/sk-kagawad1-edit.js"></script>
    <script src="js/sk-kagawad-1.js"></script>
    <script src="js/modal-sk-kagawad-1.js"></script>
    <script src="js/sk-view.js"></script>
    <script src="js/sk-edit.js"></script>
    <script src="js/modal-sk.js"></script>
    <script src="js/treasurer-view.js"></script>
    <script src="js/treasurer-edit.js"></script>
    <script src="js/modal-treasurer.js"></script>
    <script src="js/secretary-view.js"></script>
    <script src="js/secretary-edit.js"></script>
    <script src="js/modal-secretary.js"></script>
    <script src="js/kagawad7-view.js"></script>
    <script src="js/kagawad7-edit.js"></script>
    <script src="js/modal-kagawad-7.js"></script>
    <script src="js/kagawad6-view.js"></script>
    <script src="js/kagawad6-edit.js"></script>
    <script src="js/modal-kagawad-6.js"></script>
    <script src="js/kagawad5-view.js"></script>
    <script src="js/kagawad5-edit.js"></script>
    <script src="js/modal-kagawad-5.js"></script>
    <script src="js/kagawad4-view.js"></script>
    <script src="js/kagawad4-edit.js"></script>
    <script src="js/modal-kagawad-4.js"></script>
    <script src="js/kagawad3-view.js"></script>
    <script src="js/kagawad3-edit.js"></script>
    <script src="js/modal-kagawad-3.js"></script>
    <script src="js/kagawad2-view.js"></script>
    <script src="js/kagawad2-edit.js"></script>
    <script src="js/modal-kagawad2.js"></script>
    <script src="js/kagawad1-view.js"></script>
    <script src="js/kagawad1-edit.js"></script>
    <script src="js/modal-kagawad-1.js"></script>
    <script src="js/modal-edit.js"></script>
    <script src="js/modal-view.js"></script>
    <script src="js/modal.js"></script>
    <script>
        document.getElementById('togglePasswordVisibility').addEventListener('click', function() {
    // Get the password input field
    var passwordInput = document.getElementById('passwordInput');
    
    // Get the current type of the password input field
    var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    
    // Set the new type for the password input field
    passwordInput.setAttribute('type', type);
    
    // Get the eye icon inside the button
    var eyeIcon = this.querySelector('i');
    
    // Toggle the eye icon class based on the new type
    if (type === 'password') {
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    } else {
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    }
});
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
</body>
</html>