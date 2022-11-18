<?php
echo '<h1>PHP Form</h1>';
?>

<html> 
    <body>
        <form action = "getParameters.php" method = "POST">
              
            Name : <input type = "text" name = "name" >
            <br><br>
            Age: <input type = "text" name = "age" >
            <br><br>
            Email: <input type = "text" name = "email" >
            <br><br>
            Phone Number: <input = "text" name = "number" >
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>

            Gender:
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="female")?>    
            >Female
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
            >Male
            
            <br><br>
            <input type = "submit" name = "submit" value = "Submit">
        </form>
    </body>
</html> 
