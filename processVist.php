
<html>
<body>
    <?php
// define variables and set to empty values
session_start();
$firstname=$lastname=$telephone=$email=$gender=$live=$decription="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $telephone = test_input($_POST["telephone"]);
    $live =test_input($_POST["live"]);
    $gender = test_input($_POST["gender"]);
    $hobbies = $_POST['hobbies'];
    $decription= test_input($_POST["decription"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $telephone;
echo "<br>";
echo $gender;
echo "<br>";
echo $live;
echo "<br>";

$hbiii ="";
foreach ($hobbies as $hb){
    $hbiii.= $hb.",";
};
echo $hbiii;
echo "<br>";
echo $decription;
echo "<br>";
$link = mysqli_connect('localhost','root','','visiterdb');
$query = "insert into visiter (firstname,lastname,gender,telephone,email,youarein,hobbies,decription)values(?,?,?,?,?,?,?,?)";
if ($stmt = mysqli_prepare($link , $query))
{
	mysqli_stmt_bind_param($stmt , 'ssssssss',$firstname,$lastname,$gender,$telephone,$email,$live,$hbiii,$decription);
    mysqli_stmt_execute($stmt);
}
mysqli_close($link);

//header('Location:Person.php');// chuyen trang
    ?>

    <button type="submit" value="Back">
        <a href="http://localhost:8098/Assignment/Person.php">Back</a>
    </button>
</body>

</html>



