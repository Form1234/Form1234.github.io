// sql to create table
$sql ="INSERT INTO members (name, post) VALUES ('" . $_POST["name"] . "','" . $_POST["post"] . "')"; 

echo "<br>";
echo $sql;

echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
    echo "<br>";
    echo $sql;
}

$conn->close();
?>
<a href="addMember.php">Add another post</a>
