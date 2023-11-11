<!DOCTYPE html>
<html lang="en">
<head>
 
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 
	<form action="" method="post" enctype="multipart/form-data">
	<p>
	<label for="my_upload">Επέλεξε αρχείο για ενημέρωση:</label>
	<input id="my_upload" name="my_upload" type="file">
	</p>
	<input type="submit" class=buttonupd value="Ενημέρωσε">
	</form>
	<style>
		.buttonupd {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .buttonupd:hover {
    background-color: #4CAF50;
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
  		echo " Πολύ μεγάλο όνομα αρχείου ";
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
    $dest=__DIR__.'/updates/'.$upload_file_name;
    if (move_uploaded_file($_FILES['my_upload']['tmp_name'], $dest)) 
    {
    	echo 'Επιτυχημένο ανέβασμα αρχείου !';
    }
  }
}

	if(isset($upload_file_name)) {
  $connect = mysqli_connect("localhost:3307","root","","web_project");

  

  $data = file_get_contents($dest);

  $array = json_decode($data, true);

  foreach($array as $row){
    
    $sql = " UPDATE product SET product_name =  ('".$row["product_name"]."'), category_id = ('".$row["category_id"]."'), subcategory_id = ('".$row["subcategory_id"]."')  WHERE  product_id =('".$row["product_id"]."')";

    mysqli_query($connect, $sql);

  }
echo "Επιτυχημένη ενημέρωση αρχείου!";
	}
?>