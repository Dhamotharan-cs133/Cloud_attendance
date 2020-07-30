<!DOCTYPE html>
<html>
<body>
<style>
.dropdown {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}
</style>
<form action="attendance_form.php" method="GET" id="attendance_form.php">
<br>
<br>
<center>
<div>

<select class="dropdown" id="Subject" name="Subject">
  <option value="python">python       </option>
  <option value="java">java</option>
  <option value="java" selected>subject</option>
</select>

<select class="dropdown" id="Time" name="Time">
  <option value="10:40 am to 11:30 am">10:40 am to 11:30 am</option>
  <option value="03:25 pm to 04:15 pm">03:25 pm to 04:15 pm</option>
    <option value="java" selected>Hour</option>

</select>
</center>
<br>
<center>
<button type="submit" form="attendance_form.php" value="SUBMIT" name="submit" class="dropdown">SUBMIT</button> 
</center>
</div>

</form>


</body>
</html>
