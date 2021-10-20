<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Enter the text:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
    <?php

    $name = $_POST['name'];
    $length = strlen($name);

    if($length% 2 == 0)
    {
        echo strrev($name);
    }
    else
    {
        echo strtoupper($name);
    }

    ?>
</body>
</html>
