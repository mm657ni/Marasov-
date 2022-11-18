<?php

echo '<h1>PHP Form</h1>'; 

echo 'Name: <input type="text">';
echo '<p>Age: <input type="text"></p>';
echo '<p>Email: <input type="text"></p>';
echo '<p>Phone number: <input type="text"></p>';
echo '<p>Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></p>';
echo '<p>Gender: <input type="radio" name ="gender"
 <?php if (isset($gender) && $gender=="female") echo "checked";?> 
 value="female">Female 
 <input type="radio" name="gender"
 <?php if (isset($gender) && $gender=="male") echo "checked";?>
 value="male">Male</p>';


echo '<p><input type="button", value="submit"></p>';

?>