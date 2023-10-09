<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "log";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, teste, periodo FROM sauditorio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Data</th><th>Periodo</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["teste"]."</td><td>". $row["periodo"]."</td></tr>";
    }
    echo "Verifique a data do agendamento 
            </table>";
} else {
    echo " NENHUM AGENDAMENTO ";
}

$conn->close();
?>

</body>
</html>