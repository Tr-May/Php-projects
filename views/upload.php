
<?php
// complete source code for views/upload.php
function upload()
{
	include_once "classes/Uploader.class.php";
	//image-data is the name attribute used in <input type='file' />
	$uploader = new Uploader("image-data");
	$uploader->saveIn("imgs");
	$fileUploaded = $uploader->save();
	if ($fileUploaded) {
		$out = "<div class='container alert alert-success alert-dismissible fade show' role='alert'>
		New file uploaded to Images Gallery
		<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
	  </div>";
	} else {
		$out = "<div class='container alert alert-danger alert-dismissible fade show' role='alert'>
		Something Went Wrong!
		<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
	  </div>";
	}
	return $out;
}
$info = upload();
