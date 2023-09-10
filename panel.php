<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #e6b400;
  color: white;
}
</style>
</head>
<body>

<h1>itsmevsyellow</h1>

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Last Name</th>
    <th>e-mail</th>
    <th>Message</th>
  </tr>


  <?php
include("connection.php");

$select = "SELECT * FROM contact";
$final = $connect->query($select);

if ($final->num_rows > 0) {
    while ($insert = $final->fetch_assoc()) {
        echo "<tr>
        <td>" . $insert['name'] . "</td>
        <td>" . $insert['lastname'] . "</td>
        <td>" . $insert['email'] . "</td>
        <td>" . $insert['message'] . "</td>
        </tr>";
    }
} else {
    echo "There is no data in the database";
}
?>









  
</table>

</body>
</html>


