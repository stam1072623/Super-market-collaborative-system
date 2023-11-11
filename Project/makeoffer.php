<?php
session_start();
include "database_connection.php";

$curr_ser = $_SESSION['user_id'];

$sql = "SELECT product_name, product_id FROM product";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
    $products[] = $row['product_name'];
    $prod_id[] = $row['product_id'];
}

?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Υποβολή νέας προσφοράς</title>
        <link rel="stylesheet" type="text/css" href="main_style.css">
        <style>
            #pid{
                color: #FFF;
            }

            input[name=stock]{
                margin: auto;
            }

            input[name=search]{
                position: sticky;
                top: 50px;
                width: 50%;
            }

            #tab{
                width: 50%;
                height: 100;
                align: left;
            }
        </style>
    </head>
    <body>


    <h4>Επιλέξτε ένα προϊόν και συμπλυρώστε την φόρμα.</h4>
    <form method="post"> 
        <div>
            <label for="products">Προϊόντα:</label>
            <select name="products" id="products">
                <option value="">Επιλογή</option>
                <?php
                    for ($i = 0; $i < count($products); $i++) 
                    {
                        echo '<option value="'.$products[$i].'">'.$products[$i].'</option>'."\n";
                    } 
                ?>
            </select>
        </div>
        <div>
            <button type="submit">Επιλογή προϊόντος</button>
        </div>
    </form>

    <?php
        $product = filter_input(INPUT_POST, 'products', FILTER_SANITIZE_STRING); 

        $sql = "SELECT * FROM product WHERE product_name='$product'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
        }else {$row['product_id'] = 0;}
    ?>
    
    <p><?php echo "Το προϊόν που επιλέξατε είναι: ".$row['product_name']." Id: ".$row['product_id']; ?></p>

    <h4>Φόρμα υποβολής προσφοράς</h4> <!--Forma gia katathesi prosforas -->
    <form action="" method="post">
        <div>
            <label for="shop">Εισάγετε τον κωδικό του καταστήματος από τον χάρτη.:</label>
            <input type="text" name="shop_id">
            
            <label for="product">Εισάγετε τον κωδικό του προϊόντος που επιλέξατε:</label>
            <input type="text" name="product_id">
            
            <label for="price">Τιμή προσφοράς:</label>
            <input type="text" name="price">

            <label for="stock">Σε απόθεμα:</label>
            <input type="radio" name="stock" value="in">

            <label for="stock">Μη διαθέσιμο:</label>
            <input type="radio" name="stock" value="out">
        </div>
        <div>
            <button type="submit">Υποβολή προσφοράς.</button>
        </div>
    </form>
    
    <?php
        $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING); 
        $stock = filter_input(INPUT_POST, 'stock', FILTER_SANITIZE_STRING); 
        $product = filter_input(INPUT_POST, 'product_id', FILTER_SANITIZE_STRING); 
        $shop = filter_input(INPUT_POST, 'shop_id', FILTER_SANITIZE_STRING); 
        $date = date('Y-m-d');

        if($stock == "in" && isset($price) && isset($shop) && isset($product)) 
        {
            $sql = "INSERT INTO offer(offer_price,offerdate,stock,shop_id,user_id,product_id) VALUES('$price','$date',1,'$shop','$curr_user','$product')";
            mysqli_query($conn, $sql);
        }else if($stock == "out" && isset($price) && isset($shop) && isset($product))
        {
            $sql = "INSERT INTO offer(offer_price,offerdate,stock,shop_id,user_id,product_id) VALUES('$price','$date',0,'$shop','$curr_user','$product')";
            mysqli_query($conn, $sql);
        }

        if(isset($shop) && isset($price) && isset($product) && isset($stock)) 
        {
            $sql_weekly = "SELECT AVG(price) FROM price WHERE product_id='$product' AND date BETWEEN DATE_SUB(CURRENT_DATE, INTERVAL 7 DAY) AND DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)";
            $sql_daily = "SELECT * FROM price WHERE product_id='$product' AND date = DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)";

            $result_weekly = mysqli_query($conn,$sql_weekly);

            if(mysqli_num_rows($result_weekly) > 0)
            {
               $week_price = $result_weekly;

            }else
            {
                $week_price = 0;
            }

            $result_daily = mysqli_query($conn,$sql_daily);

            if(mysqli_num_rows($result_daily) > 0)
            {
                while($row_day = mysqli_fetch_array($result_daily))
                {
                    $daily_price = $row_day['price'];
                }
            }else
            {
                $daily_price = 0;
            }

            $week_perc = $week_price * 0.8; 
            $day_perc = $daily_price * 0.8;

            $earned = 0;
            if($price <= $week_perc)
            {
                $sql = "UPDATE user SET score = score + 20, score_history = score_history + score WHERE user_id='$curr_user'";
                mysqli_query($conn,$sql);
                $earned += 20;
            }

            if($price <= $day_perc) 
            {
                $sql = "UPDATE user SET score = score + 50, score_history = score_history + score WHERE user_id='$curr_user'";
                mysqli_query($conn,$sql);
                $earned += 50;
            }

            if($earned > 0)
            {
                echo "Η προσφοράς σας υποβλήθηκε με επιτυχία. Κερδίσατε: ".$earned." πόντους!!!";
            }else if($earned == 0)
            {
                echo "Η προσφορά σας υποβλήθηκε με επιτυχίας!";
            }
        }
    ?>
    </body>
</html>