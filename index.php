<?php

echo '<h1>PHP Form</h1>';

<html>
    <head>
        <title>PHP Form</title>
    </head>
  
    <body>
        <form action = "get-method.php" method = "post">
              
            Name : <input type = "text" name = "name" >
            Age: <input type = "text" name = "age" >
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

?>