<!DOCTYPE html>
<html lang="en">
<head>
 

</head>
<body> 
 
	<form action="" method="post" enctype="multipart/form-data">
	<p>
	<label for="my_upload">Επέλεξε αρχείο για ανέβασμα:</label>
	<input id="my_upload" name="my_upload" type="file" accept="json">
	</p>
	<input type="submit" class=uploadbt value="Ανέβασε">
	</form>
	<link rel="stylesheet" href="style.css" />
	<style>
		.uploadbt {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .uploadbt:hover {
    background-color: #008CBA;
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
  		echo " File name is empty! ";
  		exit;
  	}

  	$upload_file_name = $_FILES['my_upload']['name'];
  	//Too long file name?
  	if(strlen ($upload_file_name)>100)
  	{
  		echo " too long file name ";
  		exit;
  	}

  	//replace any non-alpha-numeric cracters in th file name
  	$upload_file_name = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_name);

  	//set a limit to the file upload size
  	if ($_FILES['my_upload']['size'] > 1000000) 
  	{
		echo " too big file ";
  		exit; 
        }
        
    }

    //Save the file
    $dest=__DIR__.'/uploads/'.$upload_file_name;
    if (move_uploaded_file($_FILES['my_upload']['tmp_name'], $dest)) 
    {
    	echo 'File Has Been Uploaded !';
    }
    if(isset($upload_file_name)) {
           $connect = mysqli_connect("localhost:3307","root","","web_project");

  

           $data = file_get_contents($dest);

           $array = json_decode($data, true);

           foreach($array as $row){
               $sql = " INSERT INTO product(product_id,product_name,category_id,subcategory_id) VALUES ('".$row["product_id"]."','".$row["product_name"]."','".$row["category_id"]."','".$row["subcategory_id"]."')";

           mysqli_query($connect, $sql);

    }       
  }
}

	
echo "Επιτυχημένο ανέβασμα αρχείου!";
	
?>