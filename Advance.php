<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Questions.css">
    <link rel="stylesheet" href="./CSS/Dificultad.css">
</head>
<body>
<h1>Nivel Avanzado</h1>
<div  id="questions">
<form action="BasicAnswers.php" method="post">
    <?php
        function chargeOptions($options,$question){
            foreach($options as $op)
                echo '<input type="checkbox" name="'.$question.$op->getId().'">'.$op->getOption().'</label><br/>';
        }
        $points = 0;
        require('game/Entidades/Question.php');
        $questions = array();
        //Pregunta 1
        $answerList = array();
        array_push($answerList,new Ans(1,"Desechable","1orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(2,"Revolucionario","2orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(3,"Prototipos estructurales","3orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        $question = new Question(1,"¿Cuáles son las clases del tipo de prototipos?",$answerList,2,8);
        array_push($questions,$question);
        //Pregunta 2
        $answerList = array();
        array_push($answerList,new Ans(1,"Modelado.","1orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(2,"Diseño rápido. ","2orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(3,"Madurez.","3orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        $question = new Question(2,"Forma parte de las etapas del modelo de prototipos. ",$answerList,1,8);
        array_push($questions,$question);
        //Pregunta 3
        $answerList = array();
        array_push($answerList,new Ans(1,"Reduce costo.","1orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(2,"Aumenta la probabilidad de éxito. ","2orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(3,"Poco recurso humano.","3orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        $question = new Question(3,"¿Cuál sería una de las ventajas de usar el modelo basado en prototipos? ",$answerList,2,8);
        array_push($questions,$question);
        //Pregunta 4
        $answerList = array();
        array_push($answerList,new Ans(1,"Modelo de Prototipos rápido","1orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(2,"Ciclo de vida","2orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(3,"Scrum","3orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        $question = new Question(4,"Metodología que desarrolla rápidamente nuevos diseños. ",$answerList,1,8);
        array_push($questions,$question);
        //Pregunta 5
        $answerList = array();
        array_push($answerList,new Ans(1,"Modelo de Prototipos rápido","1orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(2,"Ciclo de vida","2orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        array_push($answerList,new Ans(3,"Scrum","3orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su"));
        $question = new Question(5,"Es un modelo que resulta muy útil para evaluar el alcance del producto, pero no su uso real. ",$answerList,1,8);
        array_push($questions,$question);  
        for($i=0;$i<5;$i++){
            echo '<td>'.$questions[$i]->getQuestion().'</td><br/>';
            echo chargeOptions($questions[$i]->getOptios(),$questions[$i]->getId());
        }    
        
    ?>
<button type="submit" name ='enviar'>Enviar</button>
</div>
</form>
</body>
</html>