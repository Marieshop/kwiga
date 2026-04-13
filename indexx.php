<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my Church</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div container="my Church mt-5">
        <h1>list of Christians</h1>
<a class="btn btn-primary" href="/kwiga/create.php" role="button">Add New</a>
<br>
<table class="table">
    <thead>
        <tbody>
<tr>
 <th>Id</th>
 <th>Names</th>
 <th>Telephone</th>
 <th>Email</th>
 <th>Irangamuntu</th>
 <th>Dob</th>
 <th>Gender</th>
 <th>Status</th>
 <th>Baptism_status</th>
 <th>Presbytery</th>
 <th>Parish</th>
 <th>Chapel</th>
 <th>Grassroot</th>
 <th>Nationality</th>
 <th>Province</th>
 <th>District</th>
 <th>Sector</th>
 <th>Cell</th>
 <th>Village</th>
 <th>Action</th>
</tr>
</thead>
</tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gisenyi";

// Create connection
$conn = new mysqli("localhost", "root", "", "gisenyi");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $sql = "SELECT * FROM census";
    $result = $conn->query($sql);

    if (!$result) {
        die("invalid Query : " . $conn->error);
    }
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[names]</td>
                <td>$row[telephone]</td>
                <td>$row[email]</td>
                <td>$row[irangamuntu]</td>
                <td>$row[dob]</td>
                <td>$row[gender]</td>
                <td>$row[status]</td>
                <td>$row[baptism_status]</td>
                <td>$row[presbytery]</td>
                <td>$row[parish]</td>
                <td>$row[chapel]</td>
                <td>$row[grassroot]</td>
                <td>$row[nationality]</td>
                <td>$row[province]</td>
                <td>$row[district]</td>
                <td>$row[sector]</td>
                <td>$row[cell]</td>
                <td>$row[village]</td>
                <td>
       
<a class='btn btn-primary' href='/gisenyi/edit.php? id=$row[id]'> Edit</a>
<a class='btn btn-danger' href='/gisenyi/delete.php?id=$row[id]'>Delete</a>
</td>
</tr> "; 
}

?>
<!--tr>
    <td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
<a class='btn btn-primary' href='/kwiga/edit.php'> Edit</a>
<a class='btn btn-danger' href='/kwiga/delete.php'>Delete</a>
</td--> 
</tr>
</tbody>
</table>
</div> 
</body>
</html>