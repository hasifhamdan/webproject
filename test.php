<html>
<head>
</head>
<body>
<div class="row">
   <div class="row">
    <?php
    $files = glob("img/*new.*");
    for ($i=0; $i<count($files); $i++)
      {?>
  <div class="col-lg-4 col-md-6 mb-4"><div class="card h-100"><?php
    $image = $files[$i];
    $supported_file = array(
        'gif',
        'jpg',
        'jpeg',
        'png'
        );

    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_file)) {
            echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
            echo '<img class="card-img-top" src="'.$image .'" alt="Random image" />'."<br /><br />";
        } else {
            continue;
        }
        ?> </div></div><?php
    }
    ?>

</div>




</div>
</body>   
</html>
