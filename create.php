<?php
$servername= "localhost";
$username= "root";
$password = "";
$database ="gisenyi";

$connection = new  mysqli("localhost", "root", "", "gisenyi");


$names ="";
$telephone ="";
$email ="";
$irangamuntu ="";
$dob ="";
$gender ="";
$status ="";
$baptism_status ="";
$presbytery ="";
$parish ="";
$chapel ="";
$grassroot ="";
$nationality ="";
$province ="";
$district ="";
$sector ="";
$cell ="";
$village ="";

$errorMessage ="";
$successMessage ="";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $names = $_POST['names'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'] ;
    $irangamuntu = $_POST['irangamuntu'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $baptism_status = $_POST['baptism_status'];
    $presbytery = $_POST['presbytery'];
    $parish = $_POST['parish'];
    $chapel = $_POST['chapel'];
    $grassroot = $_POST['grassroot'];
    $nationality = $_POST['nationality'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $cell = $_POST['cell'];
    $village = $_POST['village'];
    do {
        if (empty($names) || empty($telephone) || empty($email) || 
        empty($irangamuntu) || empty($dob) || empty($gender) || empty($status) ||
         empty($baptism_status) || empty($presbytery) || empty($parish) || 
         empty($chapel) || empty($grassroot) || empty($nationality) ||
          empty($province) || empty($district) || empty($sector) || 
          empty($cell) || empty($village)) {
            $errorMessage = "All the fields are required";
            break;
        }
        // add new Christian to database
        $sql = "INSERT INTO census (names, telephone, email, irangamuntu, dob, gender, 
        status, baptism_status, presbytery, parish, chapel, grassroot, nationality, 
        province, district, sector, cell, village) values ('$names', '$telephone', '$email', '$irangamuntu', '$dob', '$gender', 
        '$status', '$baptism_status', '$presbytery', '$parish', '$chapel', '$grassroot', '$nationality', 
        '$province', '$district', '$sector', '$cell', '$village')";
    $result = $connection->query($sql);
    if (!$result) {
    $errorMessage = "invalid query: " . $connection->error;
    break;
    }


        $names ="";
        $telephone ="";
        $email ="";
        $irangamuntu ="";
        $dob ="";
        $gender ="";
        $status ="";
        $baptism_status ="";
        $presbytery ="";
        $parish ="";
        $chapel ="";
        $grassroot ="";
        $nationality ="";
        $province ="";
        $district =""; 
        $sector ="";
        $cell ="";
        $village ="";

     $successMessage = "Christian added correctly";

     header ("location: /gisenyi/indexx.php" );
      exit;

    }while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my Church</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <div class="container mt-5">
        <h1>Add New Christian</h1>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="POST">
            <div class="mb-3">
                <label class="col-sm-3 col form-label">names</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="names" value="<?php echo $names; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">telephone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="telephone" value="<?php echo $telephone; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
                <div class="mb-3">
                    <label class="col-sm-3 col form-label">irangamuntu</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="irangamuntu" value="<?php echo $irangamuntu; ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="col-sm-3 col form-label">date of birth</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>">
                    </div>
                </div>
                <div class="mb-3">
                <label class="col-sm-3 col form-label">Gender</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="gender" value="<?php echo $gender; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">status</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="status" value="<?php echo $status; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">baptism_status</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="baptism_status" value="<?php echo $baptism_status; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">presbytery</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="presbytery" value="<?php echo $presbytery;?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">parish</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="parish" value="<?php echo $parish; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">chapel</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="chapel" value="<?php echo $chapel; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">grassroot</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="grassroot" value="<?php echo $grassroot; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">nationality</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nationality" value="<?php echo $nationality; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">province</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="province" value="<?php echo $province; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">district</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="district" value="<?php echo $district; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">sector</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="sector" value="<?php echo $sector; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">cell</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="cell" value="<?php echo $cell; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-sm-3 col form-label">village</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="village" value="<?php echo $village; ?>">
                </div>
            </div>

<?php
if (!empty($successMessage)) {
    echo "
    <div class='row mb-3'>
        <div class='offset-sm-3 col-sm-6'>
             <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        </div>
    </div>
    ";
}
?>

            <div class="mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/kwiga/indexx.php">Cancel</a>
                </div>
            </div>
         </form>
    </div>
</body>
</html>