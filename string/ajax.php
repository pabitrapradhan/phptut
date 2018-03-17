<!DOCTYPE html>
<html>
<head>
	<title>AJAX Function</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#addStd").click(function(){
				var stdname = $("#stdname").val();
				var stdroll = $("#stdroll").val();
				$.ajax({
					url:'http://localhost/pabitra-phptut/string/add_student.php',
					type:'POST',
					dataType : 'html',
					//data : {'stdname':stdname, 'stdroll': stdroll},
					data : $("#addStdForm").serialize(),
					success : function(response){
						console.log(stdname);
						$("#stdListHolder").append("<tr><td>"+stdname+"</td><td>"+stdroll+"</td></tr>");
					}
				});
			});

		});
	</script>
</head>
<body>
	<form id="addStdForm">
		<input type="text" name="student" id="stdname">
		<input type="number" name="roll" id="stdroll">
		<input type="button" name="Submit" value="Submit" id="addStd">
	</form>
	<table id="stdListHolder">
		<tr>
			<td>Name</td>
			<td>Roll</td>
		</tr>
	</table>
</body>
</html>