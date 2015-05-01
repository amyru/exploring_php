<?php
$products = array();
$products[101] = "Logo Shirt, Red";
$products[102] = "Mike the Frog Shirt, Black";
$products[103] = "Mike the Frog Shirt, Blue";
$products[104] = "Mike the Frog Shirt, Green";

?><?php

$pageTitle = "Mike's Shirts";
$section   = "shirts";
include ("includes/header.php");

?>
<div class="section page">
	<div class="wrapper">
		<h1>Mike&rsquo;s Full Catalog of Shirst</h1>

		<ul>
			<?php foreach ($products as $product) {?>
						<li><?php echo $product;?></li>
			<?php }?>
		</ul>

	</div>
</div>

<?php include ("includes/footer.php");?>