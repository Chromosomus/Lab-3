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

$query = $_GET['query']; 
    // gets value sent over search form
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $sql="SELECT general_info.c_id, country_name,region,pop,pop_density,gdp,agriculture,industry,service,migration,deathrate,birthrate,area,coastline,climate from ((((general_info inner join population on general_info.c_id=population.c_id)inner join economics on general_info.c_id=economics.c_id)inner join pop_change on general_info.c_id=pop_change.c_id)inner join geogr_info on general_info.c_id=geogr_info.c_id)
            WHERE (`country_name` LIKE '%".$query."%')" or die(mysql_error());
		$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    include('tabel_template_view_search.html'); 
    while($row = mysqli_fetch_assoc($result)) {
         echo "<tr>\n";
         echo "<td>".$row['c_id']."</td>\n";
    echo "<td>".$row['country_name']."</td>\n";
    echo "<td>".$row['region']."</td>\n";
    echo "<td>".$row['pop']."</td>\n";
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