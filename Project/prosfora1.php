<?php
require_once("dbcontroller.php");
$db_handle = new DBcontroller();

$query = "SELECT * FROM category";
$result = $db_handle->runQuery($query);
 
$db = mysqli_connect('localhost:3307', 'root', '', 'web_project');
session_start();

$user_id=$_SESSION["user_id"];

?>
<?php



if(isset($_POST["submit"])){
    $product = $_POST["product_id"];
    $stock = $_POST["stock"];
    $offer_price = $_POST["offer_price"];
    $shop_id = $_POST["shop_id"];
    
    
 
    $result = $db->query("SELECT * FROM price WHERE product_id = '".$product."' AND date BETWEEN DATE_SUB(CURRENT_DATE, INTERVAL 6 DAY) AND CURRENT_DATE");
    $resultday = $db->query("SELECT * FROM price WHERE product_id = '".$product."' AND date = DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)");
    $row = $resultday->fetch_assoc();
    $price = $row['price'];
    
    
    $sum = 0;
    $count = 0;

    foreach ($result as $row) {
        $sum += $row['price'];
        $count++;
      }
      $a = 0.8;
      $b20 = 20;
      $b50 = 50;
      $week_average = $sum / $count;
      $bonus20 = $week_average * $a;
      $bonus50 = $price * $a ;
      
      //!!!!!!!!!!!!!!echo "Μέση τιμή: $week_average";
      
        if($offer_price <= $bonus50){
            $queryy = " INSERT INTO offer(stock,product_id,offer_price,shop_id,user_id) VALUES('$stock','$product','$offer_price','$shop_id','$user_id') ";
            $querybonus = " UPDATE user SET score= score + ('".$b50."') WHERE user_id = ('".$user_id."')";
            $run = mysqli_query($conn, $queryy);
            $run = mysqli_query($conn, $querybonus);

        }
        
        else if ($offer_price <= $bonus20){
            $queryy = " INSERT INTO offer(stock,product_id,offer_price,shop_id,user_id) VALUES('$stock','$product','$offer_price','$shop_id','$user_id') ";
            $querybonus = " UPDATE user SET score= score + ('".$b20."') WHERE user_id = ('".$user_id."')";
            $run = mysqli_query($conn, $queryy);
            $run = mysqli_query($conn, $querybonus);

        }
        else {
            echo "Λυπάμαι η προσφορά δεν πληρεί τα κριτήρια δεν θα λάβεις πόντους";
            $querynot = " INSERT INTO offer(stock,product_id,offer_price,shop_id,user_id) VALUES('$stock','$product','$offer_price','$shop_id','$user_id') ";
            $run = mysqli_query($conn, $querynot);
        }

    
    //$queryy = " INSERT INTO offer(stock,product_id,offer_price,shop_id) VALUES('$stock','$product','$offer_price','$shop_id') ";
    //$run = mysqli_query($conn, $queryy);

    echo '<script>alert("Η προσφορά έγινε με επιτυχία.Ευχαριστούμε!!")</script>';

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Λίστα προσφορών</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="JsLocalSearch.js"></script>
    
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   
</head>
<style type="text/css">
    
    body{
        width: 800px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', Geneva, Verdana, sans-serif;
        padding: 0;
        margin: 0 auto;
        background-image: url("ropt2.png" );
        
        
         }

        #b88{
        
        appearance: none;
        background-color: #e7e7e7;
        border: 2px solid #1A1A1A;
        border-radius: 11px;
        box-sizing: border-box;
        color: #1A1A1A;
        cursor: pointer;
        display: inline-block;
        font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        font-size: 18px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        min-height: 30px;
        min-width: 0;
        outline: none;
        padding: 2px 5px;
        text-align: center;
        text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: 20%;
        will-change: transform;
        text-align: center;
        position:static;

        }
        #container{
            text-align: center;
        }
         
         .frm{
            border: 1px solid #7ddaff;
            background-color: #b4c8d0;
            margin: 0px auto;
            padding: 40px;
            border-radius: 4px;
         }
         .frm-offer{
            border: 1px solid #7ddaff;
            background-color: #66ff99;
            margin: 0px auto;
            padding: 40px;
            
         }
         .InputBox{
            padding: 10px;
            border: #bdbdbd 1px solid;
            border-radius: 4px;
            background-color: #FFF;
            width: 70%;
         }
         
         .form-btn{
            background: #fbd0d9;
            color:crimson;
            text-transform: capitalize;
            font-size: 20px;
            cursor: pointer;
            }

        .input{
            width: 280px;
            height: 50px;
            border-radius:100vh 0 150vh 100vh;
            border:none ;
            outline: none;
            padding: 0 18px;
        }
         .row{
            padding-bottom:15px ;
            padding-left: 150px;
         }

         </style>
         <style>

            </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   
                <script type="text/javascript">
                    function getSubcategory(val){
                        $.ajax({
                            type:"POST",
                            url:"getSubcategory.php",
                            data:'category_id='+val,
                            success:function(data){
                                $("#Subcategory-list").html(data);
                                getProduct();
                            }
                        });
                    }

              </script>

                <script type="text/javascript">
                        function getProduct(val){
                            $.ajax({
                                type:"POST",
                                url:"getProduct.php",
                                data:'subcategory_id='+val,
                                success:function(data){
                                    $("#Product-list").html(data);
                                
                                }
                            });
                        }
         
              </script>
         


<h2>Διάλεξε το προιόν για το οποίο θες να κάνεις Προσφορά</h2>
<body>
        <div class="frm">
        <div class="row">
            <label> Κατηγορία:</label><br>
            <select name="category" id="category-list" class="InputBox" onchange="getSubcategory(this.value);">
                <option value disabled selected="">Επέλεξε Κατηγορία</option>
                <?php
                    foreach($result as $category){
                        ?>
                    <option value="<?php echo $category["category_id"];?>"><?php
                    echo $category["category_name"]; ?> </option>
                    <?php
                    }
                ?>
            </select>

        </div>
        <div class="row">
            <lebel>Υποκατηγορία:</lebel><br>
            <select name="Subcategory" id="Subcategory-list" class="InputBox" onchange="getProduct(this.value);"> 
            <option value="">Επέλεξε Κατηγορία</option>
                
            </select>
            
        </div>
        <div class="row">
        
            <lebel>Προιόν :</lebel><br>
            <select name="product" id="Product-list" class="InputBox"> 
            <option value="">Επέλεξε Προιόν</option>
            </select>
           
        
    </div>
       
    <br \>
    <h3 align="center">(Ή) Πληκτρολόγησε το προιόν που ψάχνεις!</h3>
    
    
        <div class="row">
                <input type="text" id="gsearchsimple" class="InputBox" placeholder="Search..." />
                
                <ul class="list-group">

                </ul>
                <div id="localSearchSimple"></div>
                <div id="detail" style="margin-top:16px;"></div>
            </div>
            <div class=""></div>
        </div>
        </div>  
    </div>
    </div>
    
            
                <h3 align="center">Φόρμα Εισαγωγής Προσφοράς</h3>
                <div class="frm-offer">
                <form class="" action="" method="post" autocomplete="off">

                    <label>Αντέγραψε το id του Καταστήματος απο τον Χάρτη Εδώ!!</label>
                    <br />
                    <input type="text" name = "shop_id" >
                    <br \>

                    <lebel>Αφού επιλέξεις προιόν δίπλα στο όνομα προιόντος αναγράφεται το product_id του (όνομα προιντος||product_id) γράψε το στο πλαίσιο! </lebel> 
                    <br \>
                    <input type="text" name = "product_id" >
                    <br \>
                    <lebel>Τιμή Προσφοράς </lebel>
                    <br \>
                    <input type="text" name = "offer_price">
                    <div>
                    <input type="radio" name="stock" value="on stock" >On stock
                    <input type="radio" name="stock" value="out of stock" >Out of stock
                    <br \>
                    
                    <button type="submit" name="submit" class="form-btn">Υποβολή</button>
                    </div>
                    </div>
                    
                    


    
    <script> $(document).ready(function() {
    $('#gsearchsimple').keyup(function() {
        var queryu = $('#gsearchsimple').val();
        $('#detail').html('');
            $('.list-group').css('display', 'block');
        if (queryu.length == 2) {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    queryu: queryu
                },
                
                success: function(data) {
                    $('.list-group').html(data);
                }
            })
        }
        if (queryu.length == 0) {
            $('.list-group').css('display', 'none');
        }
    });
    
});
</script>
<div id="container">
    <form href="prosfora1.php" method="GET">
<button id="b88" >Νέα Προσφορά</button></form>
</div>
</body>
 

</html>



