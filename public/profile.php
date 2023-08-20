<?php
$file=fopen("../data/profile.json",'r') or die("Couldn't get the data");
$profile = json_decode(fread($file,filesize("../data/profile.json")));
fclose($file);
$myfile = fopen("../nav/nav.html",'r') or die("Can't load the nav");
$nav= fread($myfile,filesize("../nav/nav.html"));
fclose($myfile);
define('ROOT',dirname(__DIR__).DIRECTORY_SEPARATOR);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .container{
        padding:3rem;
        display:flex;
        justify-content:space-between;
        align-items:center;
        background-color: navy;
        color:white;
        font-size:larger;
       }
    </style>
</head>
<body>
    <?php
    echo $nav
    ?>

    <div class="container">
        <div class="content">
            <h3><?php echo $profile->name ?></h3> 
            <p> <?php echo $profile->phone ?></p>
            <span> my age is  <?php echo $profile->age ?> years old</span>
            <p> <?php echo $profile->email ?></p>
            <p> <?php echo $profile->jop ?></p>
        </div>
        <div class="image">
           <img 
           src="<?php echo $profile->image ?> "
  width="480" height="225" border="1" title="Logo of a company" alt="Logo of a company" />

        </div>
    </div>
</body>
</html>