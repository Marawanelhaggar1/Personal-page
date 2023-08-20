<?php
$file=fopen("../data/skills.json",'r') or die("Couldn't get the data");
$skills = json_decode(fread($file,filesize("../data/skills.json")));
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
    <style>
        .skill{
            background-coloe:#eee
            
        }
    </style>
</head>
<body>

    <?php 
    echo $nav
    ?>

    <h1>
        My Skills
    </h1>


    <div class="skills">
        <?php 
                        foreach ($skills as $skill){
                    echo "<div class='skill'><span>$skill->name</span>";

                   echo "<span>$skill->level / 5</span>";
                    
                    
                    echo "</div>";
                }

        ?>
    </div>
</body>
</html>