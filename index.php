<?php
// ex1
// verif de lastname
if ( isset($_GET['lastname']) && $_GET['lastname'] !==''){
    // verif de firstname
    if ( isset($_GET['firstname']) && $_GET['firstname'] !==''){
        echo 'Lastname : ' . $_GET['lastname'];
        echo '<br>Firstname : ' . $_GET['firstname'];
    }
}
?>
<br>


<?php
// ex2
if(isset($_GET['age'])){
    echo "Age: " . $_GET['age'];
}
else{
    echo "Parameter 'age' is missing in the URL.";
}
?>
<br>


<?php
// ex3
if(isset($_GET['startDate']) && isset($_GET['endDate'])){
    echo "Start Date: " . $_GET['startDate'] . "<br>";
    echo "End Date: " . $_GET['endDate'];
}
?>
<br>


<?php
// ex4
if(isset($_GET['language']) && isset($_GET['server'])){
    echo "Language: " . $_GET['language'] . "<br>";
    echo "Server: " . $_GET['server'];
}
?>
<br>

<?php
// ex5
if(isset($_GET['week'])){
    echo "Week: " . $_GET['week'];
}
?>
<br>


<?php
// ex6
if(isset($_GET['building']) && isset($_GET['room'])){
    echo "Building: " . $_GET['building'] . "<br>";
    echo "Room: " . $_GET['room'];
}
?>

