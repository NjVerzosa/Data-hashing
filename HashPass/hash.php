<?php
include 'db_conn.php';
if(isset($_POST['send']))
{	 
    $password = $_POST['password'];
    $password =md5($password);
    $sql = "INSERT INTO hashlist (password) 
    values ('$password')";
    if (mysqli_query($con, $sql)) {
      header('Location: hash.php');
    }
}

?>
<form action="" method="POST">
<input type="text" name="password">
<button name="send">Click</button>
</form>
<?php
$query = "SELECT * FROM hashlist";
$query_run = mysqli_query($con, $query);

if(mysqli_fetch_assoc($query_run) > 0)
{
foreach($query_run as $row)
{
    ?>
    <td>=>[ <?= $row['password']; ?>  ]<=</td>
    <?php
}
}
else
{
echo "<h5> No Record Found </h5>";
}
?>