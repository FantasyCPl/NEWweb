<?php 
$image = get_img($p["id"]);
$img = $image->fetch_assoc();
?>

<div class="slider__item">
				<img src= "image/<?php echo $img["image"];?>" alt="ОЙ КАРТИКИ НЕТ">
				<div><?php echo $p["name"];?></div>
				<div><?php echo $p["job"];?></div>
				<div><?php echo $p["phonenumber"];?></div>
</div>