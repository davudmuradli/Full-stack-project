<?php
include ('check.php');
$conn = mysqli_connect("localhost", "root", "", "users");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$user_id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) != 1) {
    header('Location: index.php');
    exit;
}

$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET name = ?, surname = ?, salary = ?, address = ?, phone = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssdssi", $name, $surname, $salary, $address, $phone, $user_id);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header('Location: index.php');
    exit;
}

?>

<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required><br>

    <label for="surname">Surname:</label>
    <input type="text" name="surname" id="surname" value="<?php echo $row['surname']; ?>" required><br>

    <label for="salary">Salary:</label>
    <input type="number" name="salary" id="salary" value="<?php echo $row['salary']; ?>" step="0.01" required><br>

    <label for="address">Address:</label>
    <textarea name="address" id="address" ><?php echo $row['address']; ?></textarea><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>" required><br>

    <input type="submit" name="submit" value="Save">
</form>

<?php
mysqli_close($conn);
?>
