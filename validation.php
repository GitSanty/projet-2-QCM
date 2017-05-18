<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formuliere</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
</head>

<body class="container-fluid bg-2">

<?php
 
$punts = 0;
$nom = $prenom = $post= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //print_r($_POST);
  $Questions = test_input($_POST["Answers_Q1"]);
  $nom = test_input($_POST["nom"]);
    $prenom = test_input($_POST["prenom"]);
    $post = $_POST['point'];

    foreach( $_POST as $value )
    {
     foreach($post as $key){

            if($value == $key) {

                $punts++;}
        }
    }

echo "<br>";
echo "Résultat de test:";
echo "<br>"."<br>";
echo $nom. " " . $prenom;
echo "<br>";
echo "Note finale:  ".$punts;
}

//  try {
//    mail($email,$nom,$msg);
//    print_r($_POST);
//} catch (Exception $e) {
//    echo 'Exception: ',  $e->getMessage(), "\n";
//}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
?>


</body>
   
   </html>
