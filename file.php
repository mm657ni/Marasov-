<?php
        echo '<h1>File</h1>';
        
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $num = $_POST["number"];
        $com = $_POST["comment"];
        $gen = $_POST["gender"];
        
        $file1 = fopen("sensors.txt","w") or die("Unable to open file!");
        
        fwrite($file1, "Name: ".$name.);
        fwrite($file1, $age);
        fwrite($file1, $email);
        fwrite($file1, $num);
        fwrite($file1, $com);
        fwrite($file1, $gen);
        fclose($file1);
        
        $file2 = fopen("actuator.txt","w") or die("Unable to open file!");
        $text2 = "Value from actuator. Save this value to actuator.txt";
        fwrite($file2, $text2);
        fclose($file2);
        
        $file3 = fopen("sensors.txt","r") or die ("Subor neexistuje");
        $text3 = fread($file3,filesize("sensors.txt"));
        echo $text3;
        fclose($file3);
    ?>