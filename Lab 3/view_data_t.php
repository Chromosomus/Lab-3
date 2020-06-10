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

        $sql="SELECT id, country,region,population,pop_density,gdp,agriculture,industry,service,migration,deathrate,birthrate,area,coastline,climate from new_table";
		$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    include('tabel_template_view_t.html'); 
    while($row = mysqli_fetch_assoc($result)) {
         echo "<tr>\n";
         echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['country']."</td>\n";
    echo "<td>".$row['region']."</td>\n";
    echo "<td>".$row['population']."</td>\n";
    echo "<td>".$row['pop_density']."</td>\n";
    echo "<td>".$row['gdp']."</td>\n";
    echo "<td>".$row['industry']."</td>\n";
    echo "<td>".$row['agriculture']."</td>\n";
    echo "<td>".$row['service']."</td>\n";
    echo "<td>".$row['migration']."</td>\n";
    echo "<td>".$row['deathrate']."</td>\n";
    echo "<td>".$row['birthrate']."</td>\n";
    echo "<td>".$row['area']."</td>\n";
    echo "<td>".$row['coastline']."</td>\n";
    echo "<td>".$row['climate']."</td>\n";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>