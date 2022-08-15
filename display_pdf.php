<!DOCTYPE html>
<html lang="eng" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Display PDF</title>
		</head>
	<body>
	<div class="div1">
		<?php
			$id=$_GET['id'];
		
				include "admin/controller/config.php";
				$sql="SELECT pdf FROM pdf_file WHERE id='$id'";
				$query=mysqli_query($conn,$sql);
				while($info=mysqli_fetch_array($query)){
					?>
					<embed type="application/pdf" src="pdf/<?php echo $info['pdf'];?>" width="100%" height="700px">
		<?php			
				}
				
		?>
</div>		
	</body>


</html>