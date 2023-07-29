<?php
require_once("./connections/dbConnection.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h2>Homepage</h2>
	<p> <a href="./page/add/add.php">Add New Data</a> </p>
  <table width='80%' border=0>
    <tr bgcolor='#DDDDDD'>
      <td><strong>Name</strong></td>
      <td><strong>Age</strong></td>
      <td><strong>Email</strong></td>
      <td><strong>Action</strong></td>
    </tr>
    <?php while ($res = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['age']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td>
          <a href="./page/edit/edit.php?id=<?php echo $res['id']; ?>">Edit</a> |
          <a href="./page/delete/delete.php?id=<?php echo $res['id']; ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
