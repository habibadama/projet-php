<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


     <style>
        body p{
            padding: 10px;
        }
        span{
            font-size: 14px;
        }
     </style>
</head>
<body>
    <?php
        $moyenne = 16;
        $decison;
        $mention;
 
   
        if($moyenne >= 17) {
            $decision = "Admis";
            $mention = "Excellent";
            echo "<p>$decision avec la mention <span class='text-success text-bold'>$mention</span></p>";
        }
        elseif($moyenne >= 16){
            $decision = "Admis";
            $mention = "Très Bien";
            echo "<p>$decision avec la mention <span class='text-success text-bold'>$mention</span></p>";      
        }
        elseif($moyenne >= 14){
            $decision = "Admis";
            $mention = "Bien";
            echo "<p>$decision avec la mention <span class='text-success text-bold'>$mention</span></p>";      
        }
        elseif($moyenne >= 12){
            $decision = "Admis";
            $mention = "Assez Bien";
            echo "<p>$decision avec la mention <span class='text-warning text-bold'>$mention</span></p>";  
        }
        elseif($moyenne >= 10){
            $decision = "Admis";
            $mention = "Passable";
            echo "<p>$decision avec la mention <span class='text-warning text-bold'>$mention</span></p>";
        }
        else{
            $decision = "<p class='text-danger text-bold p-4'>Éliminé</p>";
            echo $decision;
        }
    ?>
</body>
</html>