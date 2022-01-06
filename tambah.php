<?php 
$conn = mysqli_connect("localhost", "root","","xmendb");

if(isset($_POST["submit"])) {


    $skill1 = $_POST["skill1"];
    $skill2 = $_POST["skill2"];
    $skill3 = $_POST["skill3"];
    $skill4 = $_POST["skill4"];
    $skill5 = $_POST["skill5"];
    $skill6 = $_POST["skill6"];

    $query = "INSERT INTO xmendb VALUES('','','','$skill1','$skill2','$skill3','$skill4','$skill5','$skill6')
    ";

    mysqli_query($conn, $query);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Skill</title>
</head>
<body>
    <h1> Tambah Skill </h1>
    
    <form action="" method="post">
    <ul>
        <li>
        <label for="skill1">Skill 1</label>
        <input type="text" name="skill1" id="skill1">
        </li>
        <li>
        <label for="skill2">Skill 2</label>
        <input type="text" name="skill2" id="skill2">
        </li>
        <li>
        <label for="skill3">Skill 3</label>
        <input type="text" name="skill3" id="skill3">
        </li>
        <li>
        <label for="skill4">Skill 4</label>
        <input type="text" name="skill4" id="skill4">
        </li>
        <li>
        <label for="skill5">Skill 5</label>
        <input type="text" name="skill5" id="skill5">
        </li>
        <li>
        <label for="skill6">Skill 6</label>
        <input type="text" name="skill6" id="skill6">
        </li>
        <li>
        <button type="submit" name="submit">Tambah Skill!</button>
        </li>
    </ul>
    
    ></form>
</body>
</html>