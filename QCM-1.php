<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formuliere</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">


 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript">
    $(function () {
        $("#id_autre").click(function () {
            if ($(this).is(":checked")) {
                $("#divAutre").show();
            } else {
                $("#divAutre").hide();
            }
        });
    });
</script>

</head>
<body>

<div class="icon">
   <img src="Santy_Logo.jpg" class=" rounded" height="100" width="350">
</div>
<div align="center">
    <h1>Take the Quiz</h1>
</div>



<form class="pure-form-aligned" action="validation.php" method="post">
    <!-- Answer of the Quiz -->
    <input type="hidden" name="point[]" value="AQ0_A">
    <input type="hidden" name="point[]" value="AQ1_B">
    <input type="hidden" name="point[]" value="AQ2_C">
    <input type="hidden" name="point[]" value="AQ3_A">
    <input type="hidden" name="point[]" value="AQ4_B">
    <input type="hidden" name="point[]" value="AQ5_C">
    <input type="hidden" name="point[]" value="AQ6_A">
    <input type="hidden" name="point[]" value="AQ7_B">
    <input type="hidden" name="point[]" value="AQ8_C">
    <input type="hidden" name="point[]" value="AQ9_A">
    <!-- -->
    <table>
     <fieldset id="inputs">
         <!-- Nom XXXXX-->


         <div class="pure-u-1-3">
              <div>
                 <div class="middled">
                     <label for="IDnom" class="col-sm-4 control-label"><span></span>Nom</label>
                     <input  name="nom" type="text"  id="IDnom" placeholder="Nom" autofocus required>
                 </div>
             </div>
             <br>
         </div>
             <!-- prénom -->
             <div class="pure-u-1-3">
                 <div>
                     <div class="middled">
                         <label for="IDnom" class="col-sm-4 control-label"><span></span>Prénom</label>
                         <input  class="form-control" name="prenom" type="text" placeholder="prénom" id="IDprenom" autofocus required>
                     </div>
                 </div>
                 <br>
             </div>

         <!-- email -->
         <div class="pure-u-1-3">
             <div>
                 <div class="middled">
                     <label for="IDnom" class="col-sm-4 control-label"><span></span>E-mail</label>
                     <input  class="form-control" id="IDemail" name="inputEmail" type="email" placeholder="E-mail" autofocus required>
                 </div>
             </div>
             <br>
         </div>

         <?php
         Generate_html(2 );

         function Generate_html($Num_Questions){

             //creation of array to questions
             $Questions_Array = array(
                 array("Le langage que l'ordinateur comprend est?","Binaire","Java","Visual Basic",),
                 array("L'un de ceux-ci n'est pas un programme:","L'ide","Le code source","Le compilateur"),
                 array("Le programme qui rectifie les erreurs commises par le programmeur est le ....","Le compilateur","L'éditeur de texte","Débugger"),
                 array("La programmation, c'est?","La réalisation d'un programme", "La correction des erreurs commises par le programmeur","La traduction d'un langage informatique au langage binaire"),
             );

             $A_QLetters = array("z","A", "B", "C");

             for ($Count = 0; $Count < $Num_Questions; $Count++ ) {
                 echo "<div class=\"col-xs-8 col-sm-6\">";
                 echo "<label>{$Questions_Array[$Count][0]}</label>";
                 echo "<br>";
                 echo "<br>";

                 for($CQuiz = 1; $CQuiz <= 3; $CQuiz++) {

                     echo "<div class=\"custom-radio\">";
                     echo '<div class="col-sm-3">';
                     echo "<label>";
                     echo "<input  class='required' name='Answers_Q{$Count}' type='radio' value='AQ{$Count}_{$A_QLetters[$CQuiz]}' id='Answ_Q{$Count}{$A_QLetters[$CQuiz]}_Radio' autofocus required>";
                     echo "</label>";
                     echo "<label for='Answ_Q{$Count}{$A_QLetters[$CQuiz]}_Radio' class='col-sm-4 control-label>'<span></span>{$Questions_Array[$Count][$CQuiz]}</label>";
                     echo "</div>";
                     echo "</div>";
                     echo "<br>";

                 }
                 echo "</div>";
                 echo "<br>";


             }
         }


         ?>




             <button class="pure-button pure-button-primary" type="submit" value="Envoyer">Envoyer</button>



</table>

</body>
