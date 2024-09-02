<?php
include 'db.php';

if($_SERVER ['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "insert into user (name, email) value   ('$name','$email')";

    if($conn -> query($sql) === true){
        echo "novo registro adicional com sucesso";
    }else{
        echo "erro $sql <br>" . $conn -> error;
    }

}
$conn -> close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form mehod="POST" action="create.php">
        <label for ="name">nome</label>
        <input type="text" name="name" require>
        <label for="email">email:</label>
        <input type="email" name="email" require>
        <input type="submit" value= "criar conta">
    </form>
</body>
</html>