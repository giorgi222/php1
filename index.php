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
			<button type="submit" id="login">შესვლა</button>
			<button type="button" id="register">რეგისტრაცია</button>

		</form>
		<script type="text/javascript">
		
			var login=document.getElementById('login')
			var register=document.getElementById('register')

			login.addEventListener('click', function(){
				var saxeli=document.getElementById('saxeli')
				localStorage.setItem('saxeli', saxeli.value)
			})
			register.addEventListener('click', function(){
				window.location.href="register.php"
			})
			
		</script>
	</body>
</html>


