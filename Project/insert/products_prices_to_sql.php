<?php 
	
  $connect = mysqli_connect("localhost:3307","root","","web_project");

  $filename = "products1_prices.json";

  $data = file_get_contents($filename);

  $array = json_decode($data, true);

  foreach ($array as $product) {
    $product_id = $product['product_id'];
    $product_name = $product['product_name'];
    $category_id = $product['category_id'];
    $prices = $product['prices'];

    foreach ($prices as $price_entry) {
        $date = $price_entry['date'];
        $price = $price_entry['price'];
   
        

        $sqlInsert = "INSERT INTO price (product_id, product_name, category_id, date, price)
                      VALUES ('$product_id', '$product_name', '$category_id', '$date', '$price')";

        mysqli_query($connect, $sqlInsert);
   }

  }
echo "Επιτυχής ενημέρωση τιμών προιόντων";