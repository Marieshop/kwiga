<?php
$conn = new mysqli("localhost", "root", "", "gisenyi");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fata data
$names = $_POST['names'] ?? '';
$telephone = $_POST['telephone'] ?? '';
$email = $_POST['email'] ?? '';
$irangamuntu = $_POST['Irangamuntu'] ?? '';
$dob = $_POST['date-of-birth'] ?? '';
$gender = $_POST['gender'] ?? '';
$status = $_POST['status'] ?? '';
$baptism = $_POST['baptism_status'] ?? '';
$presbytery = $_POST['presbytery'] ?? '';
$parish = $_POST['parish'] ?? '';
$chapel = $_POST['chapel'] ?? '';
$grassroot = $_POST['grassroot'] ?? '';
$nationality = $_POST['nationality'] ?? '';
$province = $_POST['province'] ?? '';
$district = $_POST['district'] ?? '';
$sector = $_POST['sector'] ?? '';
$cell = $_POST['cell'] ?? '';
$village = $_POST['village'] ?? '';



// Insert query
$sql = "INSERT INTO census (
    names, telephone, email, irangamuntu, dob, gender, status,
    baptism_status, presbytery, parish, chapel, grassroot,
    nationality, province, district, sector, cell, village
) VALUES (
    '$names', '$telephone', '$email', '$irangamuntu', '$dob', '$gender', '$status',
    '$baptism', '$presbytery', '$parish', '$chapel', '$grassroot',
    '$nationality', '$province', '$district', '$sector', '$cell', '$village'
)";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data saved successfully'); window.location='index.html';</script>";
} else {
    echo "Error: " . $conn->error;
}

/*<?php
$conn = new mysqli("localhost", "root", "", "gisenyi");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fata data
$names = $_POST['names'] ?? '';
$telephone = $_POST['telephone'] ?? '';
$email = $_POST['email'] ?? '';
$irangamuntu = $_POST['Irangamuntu'] ?? '';
$dob = $_POST['date-of-birth'] ?? '';
$gender = $_POST['gender'] ?? '';
$status = $_POST['status'] ?? '';
$baptism = $_POST['baptism_status'] ?? '';
$presbytery = $_POST['presbytery'] ?? '';
$parish = $_POST['parish'] ?? '';
$chapel = $_POST['chapel'] ?? '';
$grassroot = $_POST['grassroot'] ?? '';
$nationality = $_POST['nationality'] ?? '';
$province = $_POST['province'] ?? '';
$district = $_POST['district'] ?? '';
$sector = $_POST['sector'] ?? '';
$cell = $_POST['cell'] ?? '';
$village = $_POST['village'] ?? '';



// Insert query
$sql = "INSERT INTO census (
    names, telephone, email, irangamuntu, dob, gender, status,
    baptism_status, presbytery, parish, chapel, grassroot,
    nationality, province, district, sector, cell, village
) VALUES (
    '$names', '$telephone', '$email', '$irangamuntu', '$dob', '$gender', '$status',
    '$baptism', '$presbytery', '$parish', '$chapel', '$grassroot',
    '$nationality', '$province', '$district', '$sector', '$cell', '$village'
)";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data saved successfully'); window.location='index.html';</script>";
} else {
    echo "Error: " . $conn->error;*/
?>