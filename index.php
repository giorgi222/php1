<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>gamarjoba</title>
	</head>
	<body>
		<form class="" action="x++.php" method="post">
		
			<input type="text" name="saxeli" id="saxeli" value="">
			<input type="text" name="gvari" value="">
			<input type="password" name="paroli" value="">
			<button type="submit" id="btn">შესვლა</button>
			<button type="button">რეგისტრაცია</button>

		</form>
		<script type="text/javascript">

			var buton=document.getElementById('btn')
			buton.addEventListener('click', function(){
				var saxeli=document.getElementById('saxeli')
				localStorage.setItem('saxeli', saxeli.value)
			})

		</script>
	</body>
</html>


