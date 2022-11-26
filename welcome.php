<!DOCTYPE html>
<html>

<body>
    <div class="text-center">
        <h1 style=" text-align: center;">Welcome</h1>
        Your First Name is:
        <?php echo $_POST["firstname"]; ?><br>
        Your Last Name is:
        <?php echo $_POST["lastname"]; ?><br>
        Your Email Address is:
        <?php echo $_POST["email"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

$sql = "INSERT INTO MYGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "<br>"."New records created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT firstname, lastname, email FROM MYGuests";
?>
    </div>
</body>

</html>