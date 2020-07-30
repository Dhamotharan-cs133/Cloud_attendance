<?php
error_reporting(0);
//login.php

include('admin/database_connection.php');

session_start();



if(isset($_POST['submit'])) {
	print_r($_POST);
	$date = date('Y/m/d');
	$status = $_POST['grp1'];
		// $query = "SELECT * FROM tbl_teacher WHERE teacher_emailid = '".$teacher_emailid."'";
	echo $qry = "INSERT INTO `tbl_attendance` (`student_id`, `attendance_status`, `attendance_date`, `teacher_id`)
	VALUES ('2', '$status', '$date', '1')";
	$statement = $connect->prepare($qry);
	$statement->execute();
}


?>

<style type="text/css">
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button1:hover {
	
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:12px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:12px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-cly1{text-align:left;vertical-align:middle}
.tg .tg-9wgu{font-family:Arial, Helvetica, sans-serif !important;;text-align:left;vertical-align:middle}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<form action="" method="POST">
<table class="tg"  align="center" style="undefined;table-layout: fixed; width: 900px">
<colgroup>
<col style="width: 60px">
<col style="width: 200px">
<col style="width: 100px">
<col style="width: 51px">
<col style="width: 51px">
<col style="width: 51px">
<col style="width: 51px">
<col style="width: 51px">
<col style="width: 51px">
<col style="width: 51px">
</colgroup>
  <tr>
    <th class="tg-9wgu">Sno</th>
    <th class="tg-9wgu">Name</th>
    <th class="tg-9wgu">Roll_no</th>
    <th class="tg-9wgu">PR</th>
    <th class="tg-9wgu">AB</th>
    <th class="tg-9wgu">LE</th>
    <th class="tg-9wgu">OD</th>
    <th class="tg-9wgu">ML</th>
    
  </tr>
  <?php 
  $query = "SELECT * FROM tbl_student";

	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$total_row = $statement->rowCount();
		if($total_row > 0)
		{
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
				
			
  ?>
  <tr>
    <td class="tg-cly1"><?php echo $student_id = $row["student_id"];?></td>
    <td class="tg-cly1"><?php echo $student_name = $row["student_name"];?></td>
    <td class="tg-cly1"><?php echo $student_roll_number = $row["student_roll_number"];?></td>
    <td class="tg-cly1"><input type="radio" id="PR" name="<?php echo "status_".$student_id?>" value="PR">
  <label for="male">PR</label><br></td>
    <td class="tg-cly1"><input type="radio" id="AB" name="<?php echo "status_".$student_id?>" value="AB">
  <label for="male">AB</label></td>
    <td class="tg-cly1"><input type="radio" id="LE" name="<?php echo "status_".$student_id?>" value="LE">
  <label for="male">LE</label></td>
    <td class="tg-cly1"><input type="radio" id="OD" name="<?php echo "status_".$student_id?>" value="OD">
  <label for="male">OD</label></td>
    <td class="tg-cly1"><input type="radio" id="ML" name="<?php echo "status_".$student_id?>" value="ML">
  <label for="male">ML</label></td>
  </tr>
  <?php }
		}
	}
	?>
</table>
<br>
<center>
<div>
<!--<button align="right" type="submit" form=""  name="submit" value="submit" class="button button1">Submit</button>
<button align="right" type="submit" form=""  name="save" value="save" class="button button1">Save</button>    -->
<input type="submit" class="button button1" name="submit" value="submit">
  </div>
</center>


</form>