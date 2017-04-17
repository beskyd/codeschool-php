<?php 
//Echo each item in POST
echo $_POST['date'];
echo $_POST['email'];
echo $_POST['desc'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="" type="text/css" />
    </head>
    <body>
        
        <form class="" action="index.php" method="post">
    
            <label for="date">Date of Sighting</label><br>
            <input type="text" name="date" value=""/>
            <hr>
            
            <label for="email">Your Email</label><br>
            <input type="text" name="email" value=""/>
            <hr>
            
            <label for="desc">Describe the Sighting</label><br>
            <textarea name="desc" rows="8" cols="40"></textarea>
            <br>
            
            <input type="submit" value="Submit"/>
            
        </form>
        
    </body>
</html>



