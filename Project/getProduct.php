<?php
require_once("dbcontroller.php");
$db_handle = new DBcontroller();
if(! empty ($_POST["subcategory_id"])){
    $query = "SELECT * FROM product WHERE subcategory_id = '" . $_POST["subcategory_id"] . "' order by product_id asc";
    $result = $db_handle->runQuery($query);
    ?>
    <option>Επέλεξε Προιόν</option>
<?php   
        foreach($result as $product){
            ?>
    <option value="<?php echo $product["product_id"]; ?>"> <?php echo $product["product_name"];
        echo "||"; echo $product["product_id"]; ?></option>
    <?php
        }

}


?>