<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>


    <?php


$arrayObject=[

["navTitle"=>"about","url"=>"about.php"],
[ "navTitle"=>"contact" , "url"=>"contact.php"      ],
["navTitle"=>"services" ,  "url"=>"service.php"      ]

];



?>


    <nav>

        <h1>coaching</h1>


        <ul>



            <?php foreach($arrayObject as $aryobject ): ?>
            <h2><a href="<?php echo " $aryobject ['url']" ;    ?>"><?php echo $aryobject['navTitle']?> </a></h2>

            <?php endforeach; ?>

            <a href="https://www.facebook.com/facebook/"><i class="ri-facebook-fill"></i> </a>

            <a href=" https://www.instagram.com/ "> </i> <i class="ri-instagram-line"> </i> </a>

            <a href=" https://twitter.com/?lang=en  "> <i class="ri-twitter-line"></i></a>


        </ul>




    </nav>







    <?php


$coachingArray=[

[
    "image_url"=>"",
"clickButton"=>"leanmore",

],


[
"image_url"=>"",
"clickButton"=>"learnmore"
],




[
"image_url"=>"",
"coachingTitle"=>"wellness coaching",
"paragraph"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum in esse aliquid est ullam, modi perferendis fuga minus commodi dolor ad eaque iusto dicta, accusa",
"clickButton"=>"learnmore"


]


];





?>


    <div class="con">

        <?php
foreach($coachingArray as $coaching ): ?>

        <div class="coachingCon">
            <img src="<?php  echo $coaching['image_url']  ?>">
            <h3><?php  echo $coaching['coachingTitle']    ?></h3>
            <p> <?php  echo $coaching['paragraph']      ?> </p>
            <a href="https://www.w3schools.com/php/"><button><?php echo $coaching['clickButton']   ?></button></a>
        </div>

        <?php  endforeach         ?>



    </div>



    <?php

$headingArray=[
  [ "title"=>"celebrate who you are",
    "paragraph"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laborum fugiat quos sed? Est dignissimos cumque ex quae sed voluptatem consequatur",
    "button"=>"book a call",
"heading_url"=>"https://www.w3schools.com/php/",
    "image"=>"https://giwaconnect.com/giwa-talk/wp-content/uploads/2021/02/Solo-Travel-in-Nature-acbfea52bfaf.jpg"    

]
];?>

    <div>

        <?php foreach ($headingArray as $headingArrays) : ?>
        <h1><?php echo $headingArrays['title']    ?></h1>
        <p><?php echo $headingArrays['paragraph']?></p>
        <a href="<?php  $headingArrays['heading_url'] ?>"> <button><?php  $headingArrays['button']   ?></button></a>
        <img src="<?php echo $headingArrays['image']  ?>">
        <?php  endforeach   ;      ?>

    </div>



    <?php


$bodyTitle="about me";
$bodyParagraph="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laborum fugiat quos sed? Est dignissimos cumque ex quae sed voluptatem cons";
$bodyButton="learn more";

?>

    <div>

        <h1><?php echo $bodyTitle          ?> </h1>
        <p> <?php  echo $bodyParagraph    ?></p>
        <button><?php echo  $bodyButton   ?></button>


    </div>




</body>

</html>