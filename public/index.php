<?php

$file=fopen("../data/profile.json",'r') or die("Couldn't get the data");
$profile = json_decode(fread($file,filesize("../data/profile.json")));
fclose($file);


$myfile = fopen("../nav/nav.html",'r') or die("Can't load the nav");
$nav= fread($myfile,filesize("../nav/nav.html"));
fclose($myfile);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

<style>
    h1{
          margin-left: 2rem;
                  text-align:center;


    }
    h1 span{
        color: navy
    }
    .buttons{
        text-align:center;
    }

   .buttons  a {
        text-decoration: none;
        transition: 0.4s;
        background-color: navy;
        color:white;
        padding: 0.5rem 1rem;
        margin: 0.5rem;

      }
     .buttons  a:hover {
        color: navy;
        background-color: white;
        border-bottom: 2px solid navy;
      }
</style>
    </head>
<body>
    <?php
    echo $nav;
    ?>

    <h1>
        Welcome to My Profile <span> <?php echo $profile->name  ?> </span>
    </h1>
<div class="buttons">

    <a href="profile.php"> Profile</a>
    <a href="skills.php"> My Skills</a>
</div>


</body>
</html>