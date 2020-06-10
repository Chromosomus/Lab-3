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

$sql = "SELECT general_info.c_id, general_info.country_name, population.pop_density FROM general_info inner join population on general_info.c_id = population.c_id order by CAST(pop_density as decimal) desc";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    include('tabel_template_view_c.html'); 
    while($row = mysqli_fetch_assoc($result)) {
         echo "<tr>\n";
    echo "<td>".$row['c_id']."</td>\n";
    echo "<td>".$row['country_name']."</td>\n";
    echo "<td>".$row['pop_density']."</td>\n";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>