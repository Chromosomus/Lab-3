<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adq";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT distinct general_info.c_id, country_name, pop FROM (general_info left join population on general_info.c_id=population.c_id) order by CAST(pop as decimal) desc";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    include('tabel_template_view_d.html'); 
    while($row = mysqli_fetch_assoc($result)) {
         echo "<tr>\n";
    echo "<td>".$row['c_id']."</td>\n";
    echo "<td>".$row['country_name']."</td>\n";
    echo "<td>".$row['pop']."</td>\n";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>