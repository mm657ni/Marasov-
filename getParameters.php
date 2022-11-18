<?php
        echo '<h1>getParameters page</h1>';
        
        
        $name = $_GET["name"];
        $age = $_GET["age"];
        $email = $_GET["email"];
        $num = $_GET["number"];
        $com = $_GET["comment"];
        $gen = $_GET["gender"];
        
        echo $name;
        echo "<br>";
        echo $age;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $num;
        echo "<br>";
        echo $com;
        echo "<br>";
        echo $gen;
    ?>