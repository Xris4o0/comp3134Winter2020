<form method="get">
  <input type="text" name="firstname" id="firstName">
  <input type="submit" value="Submit">
</form>

<?php
$host = "127.0.0.1";
$username = "wk13_user";
$password ="wk13";
$dbname="wk13";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET["firstname"])){
  $fn = $_GET["firstname"];
  $sql = $conn->prepare("SELECT u.id, u.username, u.email, u.firstname, u.lastname, $
  $sql->bind_param("s", $fn);
  $sql->execute();
}else{
  $sql = $conn->prepare("SELECT id, username, email, firstname, lastname, active FRO$
  $sql->execure();
}

$result = $sql->get_result();

//if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Username</th>";
                echo "<th>Email</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Active</th>";
            echo "</tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['active'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
//    } else{
//        echo "No records matching your query were found.";
//    }

mysqli_close($conn);
?>
