// sql to create table
$sql = "CREATE TABLE members (
memberID INT NOT NULL AUTO_INCREMENT,
name VARCHAR(128),
post VARCHAR(128),
PRIMARY KEY memberID
)";

if ($conn->query($sql) === TRUE) {
    echo "Post table created";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
