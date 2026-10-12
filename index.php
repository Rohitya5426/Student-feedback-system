<?php include 'db.php'; ?>
<html><head><title>Feedback</title>
<style>
body{font-family:Arial; background:#e3f2fd; padding:30px;}
.box{background:white; padding:20px; width:400px; margin:auto; border-radius:15px;}
input,select,textarea{width:100%; padding:10px; margin:8px 0; border-radius:5px; border:1px solid #ccc;}
button{width:100%; padding:12px; background:#2196F3; color:white; border:none; border-radius:5px; font-size:16px;}
</style></head><body>
<div class="box">
<h2>Student Feedback Form</h2>
<form method="POST">
<input type="text" name="student_name" placeholder="Tumhara Naam" required>
<input type="text" name="faculty_name" placeholder="Faculty Ka Naam" required>
<select name="rating" required>
<option value="">Rating Do</option>
<option value="5">5 - Excellent</option>
<option value="4">4 - Good</option>
<option value="3">3 - Average</option>
</select>
<textarea name="comment" placeholder="Comment Liko"></textarea>
<button type="submit" name="submit">Submit Feedback</button>
</form>
<br><center><a href="admin.php">Admin Panel</a></center>
</div>
<?php
if(isset($_POST['submit'])){
  $s=$_POST['student_name']; $f=$_POST['faculty_name']; $r=$_POST['rating']; $c=$_POST['comment'];
  mysqli_query($conn, "INSERT INTO feedbacks(student_name, faculty_name, rating, comment, date) VALUES('$s','$f','$r','$c', CURDATE())");
  echo "<script>alert('Feedback Submit Ho Gaya Rohit!');</script>";
}
?>
</body></html>