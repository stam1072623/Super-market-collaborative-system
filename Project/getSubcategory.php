<?php
require_once("dbcontroller.php");
$db_handle = new DBcontroller();
if(! empty ($_POST["category_id"])){
    $query = "SELECT * FROM subcategory WHERE category_id = '" . $_POST["category_id"] . "' order by subcategory_id asc";
    $result = $db_handle->runQuery($query);
    ?>
    <option>Επέλεξε Υποκατηγορία</option>
<?php   
        foreach($result as $subcategory){
            ?>
    <option value="<?php echo $subcategory["subcategory_id"];?>"> <?php echo $subcategory["subcategory_name"]; ?></option>
    <?php
        }

}
?>