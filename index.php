<?php

echo '<h1>PHP Form</h1>'; 

echo 'Name: <input type="text">';
echo '<p>Age: <input type="text"></p>';
echo '<p>Email: <input type="text"></p>';
echo '<p>Phone number: <input type="text"></p>';
echo '<p>Comment: <textarea name="comment" rows="5" cols="40"></textarea></p>';
echo '<p>Gender: <input type="radio" name ="gender"
 <?php if (isset($gender) && $gender=="female") echo "checked";?> 
 Female 
 <input type="radio" name="gender"
 <?php if (isset($gender) && $gender=="male") echo "checked";?>
 Male</p>';


echo '<p><input type="button", value="submit"></p>';

?>