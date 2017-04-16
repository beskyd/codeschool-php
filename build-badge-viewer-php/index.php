<?php 
//phpinfo(); 
$data = file_get_contents('https://www.codeschool.com/users/AyBeskyd.json');
// use json_decode with the second parameter set to -true- for the assoc. array option instead of the default object
$json_data = json_decode($data, true);
//var_dump($json_data['courses']['completed']);
$courses = $json_data['courses']['completed'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $json_data['user']['username']; ?>'s badges</title>
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <link rel="stylesheet" href="/css/grid.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
      <h1>Badger</h1>
    </header>
    <div class="container">
      <h2>Courses <?php echo $json_data['user']['username']; ?> has completed</h2>
      <div class="grid">
        <?php 
        foreach ($courses as $course) {
          echo '<div class="grid-cell">';
          echo '<img height="200px" src="' . $course["badge"] . '"/><br>';
          echo '<a href="' . $course["url"] . '">' . $course["title"] . '</a>';
          echo '</div>';
        }
        ?>
      </div>
    </div>
    
  </body>
</html>