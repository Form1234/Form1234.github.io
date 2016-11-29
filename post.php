$sql = "SELECT name,post FROM members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " " . $row["post"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
