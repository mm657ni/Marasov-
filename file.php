<?php
        echo '<h1>File</h1>';
        
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $num = $_POST["number"];
        $com = $_POST["comment"];
        $gen = $_POST["gender"];
        
        $file1 = fopen("sensors.txt","w") or die("Unable to open file!");
        
        fwrite($file1, $name .'\n');
        fwrite($file1, $age ."\n");
        fwrite($file1, $email ."\n");
        fwrite($file1, $num ."\n");
        fwrite($file1, $com ."\n");
        fwrite($file1, $gen ."\n");
        fclose($file1);
        
        $file2 = fopen("sensors.txt","r") or die ("Subor neexistuje");
        $text = fread($file2,filesize("sensors.txt"));
        echo $text;
        fclose($file2);
    ?>