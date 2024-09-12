<?php
session_start();
$conn = new PDO('mysql:host=localhost; dbname=cuyapo_municipals', 'root', '') or die(mysql_error());

if(isset($_POST['add'])){
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $temp = $_FILES['file']['tmp_name'];

    $fname = date("YmdHis").'_'.$name;
    $chk = $conn->query("SELECT * FROM upload_ord WHERE name = '$name' ")->rowCount();

    if($chk){
        $i = 1;
        $c = 0;
        while($c == 0){
            $i++;
            $reversedParts = explode('.', strrev($name), 2);
            $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
            $chk2 = $conn->query("SELECT * FROM upload_ord WHERE name = '$tname' ")->rowCount();
            if($chk2 == 0){
                $c = 1;
                $name = $tname;
            }
        }
    }

    $move =  move_uploaded_file($temp,"upload_ord/".$fname);

    if($move){
        $query = $conn->query("INSERT INTO upload_ord(name,fname) VALUES('$name','$fname')");
        if($query){
            header("location: admin-dashboard.php");
            exit;
        } else {
            die(mysql_error());
        }
    }
}

// Pagination variables
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$query = $conn->prepare("SELECT * FROM upload_ord ORDER BY id DESC LIMIT :limit OFFSET :offset");
$query->bindParam(':limit', $limit, PDO::PARAM_INT);
$query->bindParam(':offset', $offset, PDO::PARAM_INT);
$query->execute();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin\Css\index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Css\ordinance.css">
    <link rel="shortcut icon" href="admin/image/cuyapo-logo.png" type="image/x-icon">
    <title>Ordinances</title>
</head>
<html>
    <body>
    <?php  include('admin/header.php'); ?>

    <div class="myContainer">
    <h3 style="background-color: #ab1703; color: white; text-align: center; "><p>ISSUANCES ARCHIVE</p></h3> 
        <div style="color: black; width: 100%; text-align: center;">
            <h5>ORDINANCES</h5>
        </div>

        <div class="search-con">
            <label for="search"><b>Search:</b></label>
            <input type="text" class="form-control" id="searchInput" placeholder="Type to search..." oninput="filterTable()">
        </div>

        <div class="document-container">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <thead style="text-align: center;">
                        <tr>
                        <th>Ordinance Number</th>
                            <th width="70%">Title</th>
                            <th>Date Approved</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable">
                        <?php while($row = $query->fetch()): ?>
                        <tr>
                        <td style="text-align: center;"><?php echo $row['reference_number']; ?></td>

                            <td style="text-align: center;">
                                <a href="view_ord.php?filename=<?php echo $row['id'];?>&f=<?php echo $row['fname'] ?>"><?php echo $row['name'] ?></a>
                            </td>
                            <td style="text-align: center;"><?php echo $row['date_time']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <div style="text-align: center;">
                </table>
            </div>
        </div>
        <?php
       // Previous button
            if ($page > 1) {
                echo '<a href="?page=' . ($page - 1) . '">Previous</a>';
            }

            // Display current page number
            echo '<span> Page ' . $page . ' </span>';

            // Next button
            if ($query->rowCount() == $limit) {
                echo '<a href="?page=' . ($page + 1) . '">Next</a>';
            }

        ?>
    </div>
    </div>
    
<div class="footer">
    <?php include('footer.php'); ?>
</div>+

    <script src="admin/Js/search.js"></script>
</body>
</html>