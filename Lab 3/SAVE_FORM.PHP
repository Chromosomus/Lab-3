<?php



    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "adq";
    
    $a1 = $_POST['country_name'];
    $a2 = $_POST['region'];
    $a3 = $_POST['pop'];
    $a4= $_POST['pop_density'];
    $a5 = $_POST['industry'];
    $a6 = $_POST['agriculture'];
    $a7 = $_POST['service'];
    $a8 = $_POST['migration'];
    $a9 = $_POST['deathrate'];
    $a10 = $_POST['birthrate'];
    $a11 = $_POST['area'];
    $a12 = $_POST['coastline'];
    $a13 = $_POST['climate'];
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
}
    

$sql = "INSERT INTO `new_table` (`country`,`region`,`population`,`pop_density`,`coastline`,`migration`,`mortality`,`gdp`,`literacy`,`phones`,`arable`,`crops`,`other`)  values('$_POST[country_name]','$_POST[region]','$_POST[pop]','$_POST[pop_density]','$_POST[industry]','$_POST[agriculture]','$_POST[service]','$_POST[migration]','$_POST[deathrate]','$_POST[birthrate]','$_POST[area]','$_POST[coastline]','$_POST[climate]')";
    
    $result = mysqli_query($connect, $sql);
    
    if($result)
    {
        echo 'Data inserted';
        include('view_data_t.php');
    }else{
        echo 'Data Not inserted';
    }
    mysqli_close($connect);


?>