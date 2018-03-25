<?php 
$con=mysqli_connect("localhost","root","root",'pabitra') or die('error');
?>
<!DOCTYPE html>
<html>
<head>
	<title>AJAX Function</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#addStd").click(function(){
				var stdname = $("#student").val();
				var stdroll = $("#roll").val();
				$.ajax({
					url:'http://localhost/pabitra-phptut/string/add_student.php',
					type:'POST',
					dataType : 'html',
					//data : {'stdname':stdname, 'stdroll': stdroll},
					data : $("#addStdForm").serialize(),
					success : function(response){
						if (response) {
							$("#success").html("Inserted successfully");
						}
						console.log(response);
						$("#stdListHolder").append("<tr><td>"+stdname+"</td><td>"+stdroll+"</td></tr>");
					}
				});
			});

		});
	</script>
</head>
<body>
	<form id="addStdForm">
		<input type="text" name="student" id="student">
		<input type="number" name="roll" id="roll">
		<input type="button" name="Submit" value="Submit" id="addStd">
	</form>
	<div id="success"></div>
	<table id="stdListHolder">
		<tr>
			<td>Name</td>
			<td>Roll</td>
			<td>Edit</td>
		</tr>
		<?php
$query = "select * from project";
$data = mysqli_query($con, $query);
//print_r($data);
while($data1=mysqli_fetch_array($data))
//echo $data1['name'];
{

?>
		<tr>
		<td><input type="text" name="student1" id="student1" value="<?php echo $data1['name'];?>"></td>
		<td><input type="text" name="roll1" id="roll1" value="<?php echo $data1['roll'];?>"></td>
		<td><a href="update.php?Id=<?php echo $data1['id'];?>">Update</a></td>	
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>