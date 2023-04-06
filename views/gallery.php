<?php
//complete source code for views/gallery.php
function showImages(): string
{
	$out = "<h1 class='text-center my-3'>Image Gallery</h1>";
	$out .= "<ul id='images'><li>";

	//define variables
	$totalSize = 0;
	$numberOfImages = 0;
	$dir_name = "imgs";

	//change current working directory to imgs folder
	chdir($dir_name);

	//select all image names from the imgs folder
	$images = glob("*.jpg");

	//loop through $images array and  insert in li
	foreach ($images as $image) {

		//check the file sizes
		if ((filesize($image) < 500000) and ($totalSize < 2500000)) {
			$out .= '<img src="' . $dir_name . '/' . $image . '" />';
		}
		$totalSize += filesize($image);
		$numberOfImages++;

		//logic for new li => 3 images per item
		if ($numberOfImages % 3 == 0) {
			$out .= "</li><li>";
		}
	}

	return $out;
}
//function call
$info = showImages();
