<?php
echo '<h1>PHP Form</h1>';
?>

<html> 
    <body>
        <form action = "file.php" method = "post">
              
            Name : <input type = "text" name = "name" ><br>
            Age: <input type = "text" name = "age" ><br>
            Email: <input type = "text" name = "email" >
            Phone Number: <input = "text" name = "number" >
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

            Gender:
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="female") echo "checked";?>    
            value="female">Female
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
            value="male">Male
              
            <input type = "submit" name = "submit" value = "Submit">
        </form>
    </body>
</html> 
