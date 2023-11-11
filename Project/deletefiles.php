<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<form action="" method="post" enctype="multipart/form-data">
	<p>
	<label for="my_upload">Select the file to upload:</label>
	<input id="my_upload" name="my_upload" type="file">
	</p>
	<input type="submit" class=deletebt value="Διέγραψε">
	</form>
	<style>
		.deletebt {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .deletebt:hover {
    background-color: #f44336;
    color: white;
  }


		</style>
</body>
</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  if (is_uploaded_file($_FILES['my_upload']['tmp_name'])) 
  { 
  	//First, Validate the file name
  	if(empty($_FILES['my_upload']['name']))
  	{
  		echo " Άδειο αρχείο ";
  		exit;
  	}

  	$upload_file_name = $_FILES['my_upload']['name'];
  	//Too long file name?
  	if(strlen ($upload_file_name)>100)
  	{
  		echo " Μεγάλο όνομα αρχείου ";
  		exit;
  	}

  	//replace any non-alpha-numeric cracters in th file name
  	$upload_file_name = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_name);

  	//set a limit to the file upload size
  	if ($_FILES['my_upload']['size'] > 1000000) 
  	{
		echo " Πολύ μεγάλο αρχείο ";
  		exit;        
    }

    //Save the file
    $dest=__DIR__.'/deletes/'.$upload_file_name;
    if (move_uploaded_file($_FILES['my_upload']['tmp_name'], $dest)) 
    {
    	echo 'Επιτυχής ανέβασμα αρχείου!';
    }
  }
}

	if(isset($upload_file_name)) {
  $connect = mysqli_connect("localhost:3307","root","","web_project");

  

  $data = file_get_contents($dest);

  $array = json_decode($data, true);

  foreach($array as $row){
    $sql = " DELETE from product where product_id = ('".$row["product_id"]."')";

    mysqli_query($connect, $sql);

  }
echo "Επιτυχής διαγραφή";
	}
?>