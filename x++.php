<!DOCTYPE html>
<html>
	<head>
		<title>gamarjoba</title>
	</head>
	<body>

		<!-- introduce -->
		<h1 id="misalmeba"></h1>

		<!-- start php -->

		<?php
			$k=rand(10,50);
			$x=rand(10,50);
			$b=(-1)*$k*$x;
			echo "იპოვეთ "."y=".$k."x "."+". $b." ფუნქციის ნული";
			

			$wrANNum=rand(0,3);
			for($i=0;$i<4;$i++){

				$pasuxebi[$i]= rand(0,50);

			}

			$pasuxebi[$wrANNum]=$x;
			echo '<br>';
			foreach ($pasuxebi as $pasuxi ) {

				echo '<input type="radio" name="option" value='.$pasuxi .'>'.$pasuxi .'<br>';

			}

			echo "swori pasuxia: ". $pasuxebi[$wrANNum] ."<br>";
		?>

		<!-- end php -->

		<button id="btn">შემოწმება</button>
		
		<!-- start javascript -->

		<script type="text/javascript">

			// variables
			var button=document.getElementById("btn");
			var usersname=localStorage.getItem('saxeli');
			var satauri=document.getElementById("misalmeba");


			satauri.innerHTML = "გამარჯობა " + usersname
			
			button.addEventListener("click",function(){
				satauri.innerHTML=usersname
				var counter=parseInt(localStorage.getItem('counter')||0)
				localStorage.setItem("counter",++counter)
				var ans=document.querySelector('input[name="option"]:checked').value;
				var cans="<?php echo $x ?>"
				if(counter>=8){
					localStorage.setItem("counter",0)
					counter=0;		
				}
				alert ("archeuli pasuxi aris :" + ans + ', ' + "swori pasuxi aris:" + cans + ', ' + "raundis indeqsi aris :" + counter);
				window.location.href="x++.php"
			})
		</script>

		<!-- end javascript -->

	</body>
</html>


