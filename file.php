<?php
        echo '<h1>File</h1>';
        
        $name = "Name: ".$_POST["name"]."
        ";
        $age = "Age: ".$_POST["age"]."
        ";
        $email = "Email: ".$_POST["email"]."
        ";
        $num = "Phone number: ".$_POST["number"]."
        ";
        $com = "Comment: ".$_POST["comment"]."
        ";
        $gen = "Gender: ".$_POST["gender"]."
        ";
        
        $file1 = fopen("sensors.txt","w") or die("Unable to open file!");
        
        fwrite($file1, $name);
        fwrite($file1, $age);
        fwrite($file1, $email);
        fwrite($file1, $num);
        fwrite($file1, $com);
        fwrite($file1, $gen);
        fclose($file1);
        
        $file2 = fopen("sensors.txt","r") or die ("Subor neexistuje");
        $text = fread($file2,filesize("sensors.txt"));
        echo $text;
        fclose($file2);
    ?>