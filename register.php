<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/register.css">
    <title>Document</title>
</head>
<body>

    <form method="post" action="register.php">
        <h1>Name</h1>
        <input type="text" id="name1" name="name">
        <br>
        <h1>Lastname</h1>
        <input type="text" id="lastname" name="lastname">
        <br>
        <h1>Password</h1>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit" id="register" name="button">Register</button>
    </form>

    <?php

        if (isset($_POST['button'])) {
            $isSet = False;
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $password = $_POST['password'];
    
            $person = (object) array('name' => strval($name), 'lastname'=> strval($lastname), 'password' => strval($password));
            
            $loginData = json_encode($person);

            $myfile = fopen('registers.txt', 'a+');
            fwrite($myfile, "$loginData\n");
            fclose($myfile);

            $isSet = True;
        }
        
    ?>
    <script type="text/javascript">
        var isSet = <?php echo $isSet; ?>;
        console.log(isSet)

        if (isSet == 1){
            window.location.href="index.php"
        }

    </script>

    <script src="assets/js/register.js"></script>
</body>
</html>