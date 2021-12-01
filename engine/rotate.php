	<?php   
		//eliminates the dots from the array
		// and is passed a parameter in the url : rotate.php?pic=1
		
	$dir = './images';  //true path to the folder
	
	$pictures = scandir($dir);  //returns an array of everything in the images folder

	$filteredpictures = array_diff($pictures, array('..', '.'));  //get rid of the dots
	shuffle($filteredpictures);  //shuffles the array, assigns new keys from 0
	
	//print_r($filteredpictures);  //print out the array for testing
	
	$key = ($_GET["pic"]);  //use the passed parameter as a key to the array
	//print_r($_GET["pic"]);
	
	//$key = array_rand($filteredpictures);  //pick a random key from the filtered array of images
	$name = $filteredpictures[$key];  //get the value (i.e.) the filename of the image corresponding to the key
	$path = "./images/$name";  //construct a path for location header
	//print_r($path); 
	header("Location: $path");
   
	
	?>
