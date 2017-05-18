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
    <input type="hidden" name="point[]" value="AQ1_A">
    <input type="hidden" name="point[]" value="AQ2_B">
    <input type="hidden" name="point[]" value="AQ3_C">
    <input type="hidden" name="point[]" value="AQ4_A">
    <input type="hidden" name="point[]" value="AQ5_B">
    <input type="hidden" name="point[]" value="AQ6_C">
    <input type="hidden" name="point[]" value="AQ7_A">
    <input type="hidden" name="point[]" value="AQ8_B">
    <input type="hidden" name="point[]" value="AQ9_C">
    <input type="hidden" name="point[]" value="AQ10_A">
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




            <!-- Question 1 -->
            <div class="col-xs-8 col-sm-6">
                <label>Question 1</label><br><br>
                <div class="custom-radio">
                    <div class="col-sm-3">
                        <input  class="form-control" name="Answers_Q1" type="radio" value="AQ1_A" id="Answ_Q1A_Radio" autofocus required>
                        <label for="Answ_Q1A_Radio" class="col-sm-4 control-label"><span></span>Réponse A</label>
                    </div>
                </div>

                <br>

                <div class="custom-radio">

                    <div class="col-sm-1">
                        <input  class="form-control" name="Answers_Q1" type="radio" value="AQ1_B" id="Answ_Q1B_Radio" autofocus required>
                        <label for="Answ_Q1B_Radio" class="col-sm-2 control-label"><span></span>Réponse B</label>
                    </div>
                </div>

                <br>

                <div class="custom-radio">
                    <div class="col-sm-1">
                        <input  class="form-control" name="Answers_Q1" type="radio" value="AQ1_C" id="Answ_Q1C_Radio" autofocus required>
                        <label for="Answ_Q1C_Radio" class="col-sm-2 control-label"><span></span>Réponse C</label>
                    </div>
                </div>

            </div>

            <br>
            <!-- Question 2 -->

            <div class="col-xs-8 col-sm-6">
                <label>Question 2</label><br><br>
                <div class="custom-radio">
                    <div class="col-sm-3">
                        <input  class="form-control" name="Answers_Q2" type="radio" value="AQ2_A" id="Answ_Q2A_Radio" autofocus required>
                        <label for="Answ_Q2A_Radio" class="col-sm-4 control-label"><span></span>Réponse A</label>
                    </div>
                </div>

                <br>

                <div class="custom-radio">

                    <div class="col-sm-1">
                        <input  class="form-control" name="Answers_Q2" type="radio" value="AQ2_B" id="Answ_Q2B_Radio" autofocus required>
                        <label for="Answ_Q2B_Radio" class="col-sm-2 control-label"><span></span>Réponse B</label>
                    </div>
                </div>

                <br>

                <div class="custom-radio">
                    <div class="col-sm-1">
                        <input  class="form-control" name="Answers_Q2" type="radio" value="AQ2_C" id="Answ_Q2C_Radio" autofocus required>
                        <label for="Answ_Q2C_Radio" class="col-sm-2 control-label"><span></span>Réponse C</label>
                    </div>
                </div>

            </div>

            <br>

            <!-- Question 3 -->

            <div class="col-xs-8 col-sm-6">
                <label>Question 3</label><br><br>
                <div class="custom-radio">
                    <div class="col-sm-3">
                        <input  class="form-control" name="Answers_Q3" type="radio" value="AQ3_A" id="Answ_Q3A_Radio" autofocus required>
                        <label for="Answ_Q3A_Radio" class="col-sm-4 control-label"><span></span>Réponse A</label>
                    </div>
                </div>

                <br>

                <div class="custom-radio">
                    <div class="col-sm-3">
                        <input  class="form-control" name="Answers_Q3" type="radio" value="AQ3_B" id="Answ_Q3B_Radio" autofocus required>
                        <label for="Answ_Q3B_Radio" class="col-sm-4 control-label"><span></span>Réponse B</label>
                    </div>
                </div>

                <br>

                <div class="custom-radio">

                    <div class="col-sm-1">
                        <input  class="form-control" name="Answers_Q3" type="radio" value="AQ3_C" id="Answ_Q3C_Radio" autofocus required>
                        <label for="Answ_Q3C_Radio" class="col-sm-2 control-label"><span></span>Réponse C</label>
                    </div>
                </div>

                <br>

                <!-- Question 4 -->

                <div class="col-xs-8 col-sm-6">
                    <label>Question 4</label><br><br>
                    <div class="custom-radio">
                        <div class="col-sm-3">
                            <input  class="form-control" name="Answers_Q4" type="radio" value="AQ4_A" id="Answ_Q4A_Radio" autofocus required>
                            <label for="Answ_Q4A_Radio" class="col-sm-4 control-label"><span></span>Réponse A</label>
                        </div>
                    </div>

                    <br>

                    <div class="custom-radio">

                        <div class="col-sm-1">
                            <input  class="form-control" name="Answers_Q4" type="radio" value="AQ4_B" id="Answ_Q4B_Radio" autofocus required>
                            <label for="Answ_Q4B_Radio" class="col-sm-2 control-label"><span></span>Réponse B</label>
                        </div>
                    </div>

                    <br>


                    <div class="custom-radio">
                        <div class="col-sm-1">
                            <input  class="form-control" name="Answers_Q4" type="radio" value="AQ4_C" id="Answ_Q4C_Radio" autofocus required>
                            <label for="Answ_Q4C_Radio" class="col-sm-2 control-label"><span></span>Réponse C</label>
                        </div>
                    </div>

                </div>

                <br>


                <button class="pure-button pure-button-primary" type="submit" value="Envoyer">Envoyer</button>



    </table>

</body>
