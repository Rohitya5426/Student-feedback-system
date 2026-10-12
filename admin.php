<?php include 'db.php'; ?>
<html><head><title>Admin Panel</title>
<style>
body{font-family:Arial; padding:20px; background:#f5f5f5;}
table{width:100%; border-collapse:collapse; background:white;}
td,th{border:1px solid #ccc; padding:10px; text-align:left;}
th{background:#2196F3; color:white;}
a{padding:10px; background:black; color:white; text-decoration:none; border-radius:5px;}
</style>
</head><body>
<h2>Admin - All Feedbacks</h2>
<a href="index.php">Back to Form</a><br><br>
<table>
<tr><th>Student Name</th><th>Faculty Name</th><th>Rating</th><th>Comment</th><th>Date</th></tr>
<?php
$res = mysqli_query($conn, "SELECT * FROM feedbacks ORDER BY id DESC");
while($row = mysqli_fetch_assoc($res)){
  echo "<tr><td>{$row['student_name']}</td><td>{$row['faculty_name']}</td><td>{$row['rating']}</td><td>{$row['comment']}</td><td>{$row['date']}</td></tr>";
}
?>
</table>
</body></html>