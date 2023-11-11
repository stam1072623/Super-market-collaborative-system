<html>
 
<head>

<form>
<h2>Αντέγραψε το id του καταστήματος!</h2>
<br> <input type="text" name="input" placeholder="Αναζήτηση...">
         <br>
         
        
         
      </form>
<style>
    input[name="end"]{
        background-image: url(x.png);
         
    background-repeat: no-repeat;
    background-size: contain;
    width: 40px;
    height: 40px;
    border: none;
    }
     input[name="outofstock"]{
        background-image: url(out_of_stock.jpg);
         
    background-repeat: no-repeat;
    background-size: contain;
    width: 50px;
    height: 50px;
    border: none;
    }
    input[name="onstock"]{
        background-image: url(on_stock.png);
         
    background-repeat: no-repeat;
    background-size: contain;
    width: 53px;
    height: 53px;
    border: none;
    }
    input[name="delete"]{
        background-image: url(bin.png);
         
    background-repeat: no-repeat;
    background-size: contain;
    width: 32px;
    height: 32px;
    border: none;
    }
input[name="like"] {
    background-image: url(Like.png);
    background-repeat: no-repeat;
    background-size: contain;
    width: 32px;
    height: 32px;
    border: none;
}
input[name="dislike"] {
    background-image: url(Dislike.png);
    background-repeat: no-repeat;
    background-size: contain;
    width: 32px;
    height: 32px;
    border: none;
}
.off{
  width: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
 
  background-repeat: no-repeat;
  background-size: 40px;
  padding: 12px 20px 12px 40px;
}
.off2{
  width: 50%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: #fff;
  display: inline-block; 
  background-repeat: no-repeat;
  background-size: 40px;
  padding: 12px 20px 12px 40px;
  white-space: nowrap;
}



input[type=text] {
  width: 30%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: #fff;
  background-image: url("https://img.icons8.com/ios-glyphs/2x/search.png"  );
  background-position: 0.1px 0.1px; 
  background-repeat: no-repeat;
  background-size: 40px;
  padding: 12px 20px 12px 40px;
}
/*input[type="submit"]{
background-image: url("https://www.freepnglogos.com/uploads/like-png/like-icon-line-iconset-iconsmind-35.png");
 
  box-sizing: border-box;
}*/
#offerid{
    color: rebeccapurple;
}
p{
    color: black;
    font-size: 25px;
    text-decoration: underline;
    font-family: sans-serif;
}
h2{
       
       font-family: Georgia, serif;
}
body{
     
    background-image: url("ropt.jpg");
}
#display-image{
    width: 50%;
    justify-content: right;
    padding: 5px;
    margin: 15px;
}
.center{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
#center{
    text-align: center;
}

</style>


</html>
<style>


    </style>


<?php
session_start();
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=projectdatabase', 'root', '');
//$conn = new mysqli("localhost", "root", "", "projectdatabase");
// Retrieve all products from the database

$admin=$_SESSION["admin"];

$image2= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A4%CE%9F%CE%9C%CE%91%CE%A4%CE%95%CE%A3_%CE%91%CE%A0%CE%9F%CE%A6%CE%9B_%CE%9F%CE%9B%CE%9F%CE%9A%CE%9B%CE%97%CE%A1%CE%95%CE%A3_%CE%9A%CE%A5%CE%9A%CE%9D%CE%9F%CE%A3400%CE%93%CE%A1.jpg" width="200" height="200" align="right">';
$image160='<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Pummaro_Passata_500%CE%B3%CF%81.jpg" width="200" height="200" align="right">';
$image171= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A4%CE%BF%CE%BC%CE%B1%CF%84%CE%AC_%CE%A4%CF%81%CE%B9%CE%BC%CE%BC%CE%B5%CE%BD%CE%B7_%CE%9A%CF%85%CE%BA%CE%BD%CE%BF%CF%82_500%CE%B3%CF%81.jpg"width="200" height="200" align="right">';
$image173= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/TOMAT_%CE%A8%CE%99%CE%9B_%CE%9A%CE%A5%CE%9A%CE%9D%CE%9F%CE%A3400%CE%93_%CE%9A%CE%9F%CE%A5%CE%A4_%CE%A3TB240%CE%93%CE%A1.jpg " width="200" height="200" align="right">';
$image403= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Pummaro_%CE%A8%CE%B9%CE%BB%CE%BF%CE%BA_%CE%A4%CE%BF%CE%BC%CE%B1%CF%84_%CE%9A%CE%BB%CE%B1%CF%82_400%CE%B3%CF%81.jpg " width="200" height="200" align="right">';
$image666= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Elite_%CE%A6%CF%81%CF%85%CE%B3%CE%B1%CE%BD%CE%B9%CE%AD%CF%82_%CE%9F%CE%BB%CE%B9%CE%BA%CE%AE%CF%82_%CE%86%CE%BB%CE%B5%CF%83%CE%B7%CF%82_180%CE%B3%CF%81.jpg" width="200" height="200" align="right">';
$image25= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A6%CF%81%CF%85%CE%B3%CE%B1%CE%BD%CE%B9%CE%AD%CF%82_Elite_%CE%A3%CF%84%CE%B1%CF%81%CE%B9%CE%BF%CF%85_250%CE%B3%CF%81_%CE%9A%CE%BF%CF%85%CF%84%CE%AF.jpg"width="200" height="200" align="right">';
$image243= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A0%CE%B1%CF%80%CE%B1%CE%B4%CE%BF%CF%80%CE%BF%CF%8D%CE%BB%CE%BF%CF%85_%CE%A4%CF%81%CE%B9%CE%BC%CE%BC%CE%B1_%CE%A6%CF%81%CF%85%CE%B3%CE%B1%CE%BD%CE%B9%CE%B1%CF%82_%CE%A4%CF%81%CE%B9%CE%BC%CE%BC%CE%B1_180%CE%B3%CF%81.jpg "width="200" height="200" align="right">';
$image515= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A6%CE%A1%CE%A5%CE%93%CE%91%CE%9D%CE%99%CE%91_%CE%A4%CE%A1%CE%99%CE%9C%CE%9C%CE%91_ELITE_180%CE%93.jpg "width="200" height="200" align="right">';
$image626= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A0%CE%B1%CF%80%CE%B1%CE%B4%CE%BF%CF%80%CE%BF%CF%8D%CE%BB%CE%BF%CF%85_%CE%A6%CF%81%CF%85%CE%B3%CE%B1%CE%BD%CE%B9%CE%AD%CF%82_%CF%89%CF%81%CE%B9%CE%AC%CF%84%CE%B9%CE%BA%CE%B5%CF%82_%CE%9F%CE%BB%CE%B9%CE%BA%CE%AE%CF%82_%CE%86%CE%BB%CE%B5%CF%83%CE%B7%CF%82_240%CE%B3%CF%81.jpg"width="200" height="200" align="right">';
$image5= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9B%CE%B5%CF%85%CE%BA%CE%B1%CE%BD%CF%84%CE%B9%CE%BA%CE%BF_%CE%95%CF%85%CF%81%CE%B7%CE%BA%CE%B1_60%CE%93%CE%A1.jpg"width="200" height="200">';
$image10= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A7%CE%BB%CF%89%CF%81%CE%AF%CE%BD%CE%B7_Klinex_Ultra_Lemon.jpg "width="200" height="200" align="right">';
$image14= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9C%CE%B1%CE%BB%CE%B1%CE%BA%CF%84%CE%B9%CE%BA%CE%BF_%CE%A3%CF%85%CE%BC%CF%80_Soupline_Mistral28%CF%80%CE%BB.jpg"width="200" height="200" align="right">';
$image34= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9A%CE%B1%CE%B8_%CE%A3%CE%BA_%CE%A0%CE%BB%CF%85%CE%BD_%CE%A1%CE%BF%CF%85%CF%87%CF%89%CE%BD_Dr_Beckmann_250%CE%93.jpg "width="200" height="200" align="right">';
$image35= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Klinex_%CE%A3%CF%80%CF%81%CE%AD%CF%85_4%CF%83%CE%B51.jpg "width="200" height="200" align="right">';
$image23= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Fairy_Ultra_%CE%9B%CE%B5%CE%BC%CF%8C%CE%BD%CE%B9.jpg "width="200" height="200" align="right">';
$image69= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%91%CF%80%CE%BF%CF%81_%CE%A0%CE%BB_%CE%A3%CE%BA%CE%BF%CE%BD_Tot_Eco_Neomat14%CF%80_700%CE%93.jpg "width="200" height="200" align="right">';
$image74= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A5%CE%B3%CF%81%CE%BF_%CE%A0%CE%B9%CE%B1%CF%84_%CE%9B%CE%B5%CE%BC_%CE%95%CE%BD%CE%B5%CF%81%CE%B3%CE%BF_Gel_Svelto500m.jpg "width="200" height="200" align="right">';
$image128= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Neomat_%CE%A5%CE%B3%CF%81%CF%8C_%CE%91%CF%80%CE%BF%CF%81%CF%81%CF%85%CF%80%CE%B1%CE%BD%CF%84%CE%B9%CE%BA%CF%8C_%CE%A1%CE%BF%CF%8D%CF%87%CF%89%CE%BD_%CE%A4%CF%81%CE%B9%CE%B1%CE%BD%CF%84%CE%AC%CF%86%CF%85%CE%BB%CE%BB%CE%BF_62%CE%BC%CE%B5%CE%B6.jpg "width="200" height="200" align="right">';
$image107= '<img src="https://d3hz4baxchepgp.cloudfront.net/medias/sys_master/hcd/h25/9349659754526.jpg?buildNumber=fe848d06bf4cb84f3bb8241e9d7e16464f80e5102b638e9dc84630c2d889a867 "width="200" height="200" align="right">';
$image7= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Sprite_330ML_%CE%9C%CE%B5%CF%84_%CE%9A%CE%BF%CF%85%CF%84.jpg "width="200" height="200" align="right">';
$image21= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9B%CE%B5%CE%BC%CE%BF%CE%BD%CE%B1%CE%B4%CE%B1_%CE%95%CF%88%CE%B1_232ML_%CE%93%CF%85%CE%B1%CE%BB%CE%B9.jpg "width="200" height="200" align="right">';
$image49= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Red_Bull_%CE%95%CE%BD%CE%B5%CF%81%CE%B3%CE%B5%CE%B9%CE%B1%CE%BA%CE%BF_%CE%A0%CE%BF%CF%84%CE%BF_%CE%9A%CE%BF%CF%85%CF%84%CE%B9_250%CE%9C.jpg"width="200" height="200" align="right">';
$image64= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Energy_Drink_Monster_500ml_%CE%9A%CE%BF%CF%85%CF%84%CE%AF.jpg"width="200" height="200" align="right">';
$image193= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Coca_Cola_1%2C5lit.jpg "width="200" height="200" align="right">';
$image194= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9C%CF%80%CF%8D%CF%81%CE%B1_Heineken_%CE%9A%CE%BF%CF%85%CF%84%CE%AF_6%CF%80%CE%BB%CE%BF.jpg"width="200" height="200" align="right">';
$image383= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9C%CF%80%CE%B9%CF%81%CE%B1_Heineken_Cpl_K2_500M_%CE%A6%CE%B9%CE%B1%CE%BB_E%CF%80%CE%B9.jpg "width="200" height="200" align="right">'; 
$image426= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9C%CF%80%CF%85%CF%81%CE%B1_Stella_Artois_330ML_%CE%A6%CE%B9%CE%B1%CE%BB%CE%B7.jpg"width="200" height="200" align="right">';
$image472= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9C%CF%80%CE%B9%CF%81%CE%B1_Amstel_500ML_%CE%93%CF%85%CE%B1_%CE%9C%CF%80%CE%BF%CF%85.jpg "width="200" height="200" align="right">';
$image602= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%9C%CF%80%CF%8D%CF%81%CE%B1_Fix_Hellas_%CE%9A%CE%BF%CF%85%CF%84%CE%AF-6%CF%80%CE%BB%CE%BF_330ml.jpg"width="200" height="200" align="right">';
$image20= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A3%CE%B5%CF%81%CE%B2_Every_Day_Ul_Plus_Sens_Super_10%CF%84.jpg"width="200" height="200" align="right">';
$image31= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A3%CE%95%CE%A1%CE%92EVDAY_HDRY_ULPL_EXTRLONG10T.jpg "width="200" height="200" align="right">';
$image96= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A3%CE%B5%CF%81%CE%B2_Ev_Day_Sens_Ul_Pl_Maxi_Nig_18t_Econ.jpg "width="200" height="200" align="right">';
$image261= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A3%CE%95%CE%A1%CE%92%CE%99%CE%95%CE%A4_GOODNIGHT_CLIP_LIBRESSE_10T.jpg "width="200" height="200" align="right">';
$image573= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A3%CE%95%CE%A1%CE%92_ULTRA_PLATINUM_NIGHT_ALWAYS6T.jpg "width="200" height="200" align="right">';
$image591= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%91%CE%A6%CE%A1%CE%A4%CE%A1%CE%9F_%CE%91%CE%9C%CE%A5%CE%93%CE%94_NATURAL_PALMOLIVE650M.jpg "width="width="200" height="200" align="right">';
$image686= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%91%CE%A6%CE%A1%CE%9F%CE%9B%CE%9F%CE%A5%CE%A4%CE%A1%CE%9F_TALC_NOXZEMA_750ML.jpg"width="200" height="200" align="right">';
$image737= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%91%CE%A6%CE%A1%CE%9F%CE%9B%CE%9F%CE%A5%CE%A4_YOGHURT_VAN_HONEY_FA_750M.jpg"width="200" height="200" align="right">';
$image767= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/A%CE%A6%CE%A1%CE%9F%CE%9B%CE%9F%CE%A5%CE%A4%CE%A1_MAGICAL_BEAUTY_LUX_700ML.jpg"width="200" height="200" align="right">';
$image94= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A3%CE%91%CE%9C%CE%A0%CE%9F%CE%A5%CE%91%CE%9D_ORZENE_%CE%9C%CE%A0%CE%99%CE%A1%CE%91%CE%A3_%CE%9A%CE%91%CE%9D%CE%9F%CE%9D%CE%99%CE%9A_400%CE%9C.jpg "width="200" height="200" align="right">';
$image122= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Pampers_%CE%A0%CE%AC%CE%BD%CE%B5%CF%82_Premium_Care_%CE%9D%CE%BF_2_48%CE%BA%CE%B9%CE%BB_23%CF%84%CE%B5%CE%BC.jpg"width="200" height="200" align="right">';
$image104= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Libero_Swimpants_%CE%A0%CE%AC%CE%BD%CE%B5%CF%82_Small_712%CE%BA%CE%B9%CE%BB_6%CF%84%CE%B5%CE%BC.jpg "width="200" height="200" align="right">';
$image113= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/PAMPPREMCARE_N5_11161118K_30%CE%A4.jpg "width="200" height="200" align="right">';
$image149= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%A0%CE%91%CE%9D%CE%91_SENSITIVE_BABYLINO_N1_25KG_28.jpg "width="200" height="200" align="right">';
$image300= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/PAMPERS_ACTIVE_BABY_N5_11_16KG_51%CE%A4.jpg"width="200" height="200" align="right">';
$image313= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/Nutricia_Biskotti_%CE%96%CF%89%CE%AC%CE%BA%CE%B9%CE%B1_180%CE%B3%CF%81.jpg "width="200" height="200" align="right">'; 
$image308= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%93%CE%B9%CF%8E%CF%84%CE%B7%CF%82_%CE%9A%CF%81%CE%AD%CE%BC%CE%B1_%CE%A0%CE%B1%CE%B9%CE%B4%CE%B9%CE%BA%CE%AE_%CE%A6%CE%B1%CF%81%CE%AF%CE%BD_%CE%9B%CE%B1%CE%BA%CF%84%CE%AD_300%CE%B3%CF%81.jpg"width="200" height="200" align="right">'; 
$image209= '<img src="https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/BISKOTTI_NUTRICIA_180%CE%93%CE%A1.jpg "width="200" height="200" align="right">'; 
$image126= '<img src=" https://warply.s3.amazonaws.com/applications/ed840ad545884deeb6c6b699176797ed/products/%CE%93%CE%B9%CF%8E%CF%84%CE%B7%CF%82_%CE%A6%CF%81%CE%BF%CF%85%CF%84%CF%8C%CE%BA%CF%81%CE%B5%CE%BC%CE%B1_5_%CE%A6%CF%81%CE%BF%CF%8D%CF%84%CE%B1_300%CE%B3%CF%81.jpg"width="200" height="200" align="right">'; 
$image67= '<img src="https://d3hz4baxchepgp.cloudfront.net/medias/sys_master/hcd/h25/9349659754526.jpg?buildNumber=fe848d06bf4cb84f3bb8241e9d7e16464f80e5102b638e9dc84630c2d889a867"width="200" height="200" align="right">'; 
 
$user_id=$_SESSION["user_id"];

$adminnumber = 5;
include "db_conn.php";
 
if (isset($_GET["input"])) {
    
     

    $input = $_GET["input"];
    $input = $conn->real_escape_string($input);
    //"SELECT product.product_name,offer.offerdate,offer.offer_price FROM offer INNER JOIN product ON offer.product_id = product.product_id WHERE offer.shop_id LIKE '$input'";
    $stmt = $db->prepare("SELECT product.product_name,offer.offer_id,offer.product_id,offer.offerdate,offer.offer_price,offer.end,offer.stock,offer.user_id FROM offer INNER JOIN product ON offer.product_id = product.product_id WHERE offer.shop_id LIKE '$input'");
    $stmt->execute();
    
    $offers = $stmt->fetchAll();
    $stmtpart2 = $db->prepare("SELECT admin FROM user WHERE user_id=$user_id");
    // Print each product with a "like" button
    foreach ($offers as $offer) {
        //$offer_id=$_SESSION["offer_id"];
        //$stmt = $db->prepare("SELECT COUNT(offer_id) FROM likes WHERE offer_id=$offer_id");
    //$stmt->execute();
    //$likes = $stmt->fetchAll();
        echo '<div class="off2">';
        if($offer['product_id'] == 160){
            echo $image160;
           }if($offer['product_id'] == 2){
            echo $image2;

           }if($offer['product_id'] == 171){
              echo $image171;
             }if($offer['product_id'] == 173){
              echo $image173;
             }if($offer['product_id'] == 403){
              echo $image403;
             }if($offer['product_id'] == 666){
              echo $image666;
             }if($offer['product_id'] == 25){
              echo $image25;
             }if($offer['product_id'] == 243){
              echo $image243;
             }if($offer['product_id'] == 515 ){
              echo $image515;
             }if($offer['product_id'] == 626){
              echo $image626;
             }if($offer['product_id'] == 5){
              echo $image5;
             }if($offer['product_id'] == 10 ){
              echo $image10;
             }if($offer['product_id'] == 14){
              echo $image14;
             }if($offer['product_id'] == 34){
              echo $image34;
             }if($offer['product_id'] == 35){
              echo $image35;
             }if($offer['product_id'] == 23 ){
              echo $image23;
             }if($offer['product_id'] == 69 ){
              echo $image69;
             }if($offer['product_id'] == 74){
              echo $image74;
             }if($offer['product_id'] == 107){
              echo $image107;
             }if($offer['product_id'] == 128){
              echo $image128;
             }if($offer['product_id'] == 7){
              echo $image7;
             }if($offer['product_id'] == 21){
                echo $image21;
             }if($offer['product_id'] == 49){
              echo $image49;
             }if($offer['product_id'] == 64){
              echo $image64;
             }if($offer['product_id'] == 193){
              echo $image193;
             }if($offer['product_id'] == 194){
              echo $image194;
             }if($offer['product_id'] == 383){
              echo $image383;
             } if($offer['product_id'] == 426){
              echo $image426;
             }if($offer['product_id'] == 472){
              echo $image472;
             }if($offer['product_id'] == 602){
              echo $image602;
             }if($offer['product_id'] == 20){
              echo $image20;
             }if($offer['product_id'] == 31){
              echo $image31;
             }if($offer['product_id'] == 96){
              echo $image96;
             }if($offer['product_id'] == 261){
              echo $image261;
             }if($offer['product_id'] == 573){
              echo $image573;
             }if($offer['product_id'] == 591){
              echo $image591;
             }if($offer['product_id'] == 686){
              echo $image686;
             }if($offer['product_id'] == 737){
              echo $image737;
             }if($offer['product_id'] == 767){
              echo $image767;
             }if($offer['product_id'] == 94){
              echo $image94;
             }if($offer['product_id'] == 122){
              echo $image122;
             }if($offer['product_id'] == 104){
              echo $image104;
             }if($offer['product_id'] == 113){
              echo $image113;
             }if($offer['product_id'] == 149){
              echo $image149;
             }if($offer['product_id'] == 300){
              echo $image300;
             }if($offer['product_id'] == 313){
              echo $image313;
             }if($offer['product_id'] == 308){
              echo $image308;
             }if($offer['product_id'] == 209){
              echo $image209;
             }if($offer['product_id'] == 126){
              echo $image126;
             }if($offer['product_id'] == 67){
              echo $image67;
             }
             
        //$end = $offer['end'];
        $offer_idd = $offer['offer_id'];
        $user_idprosforas=$offer["user_id"];
        $resultkk = $db->query("SELECT * FROM user WHERE user_id = $user_idprosforas");
        $row = $resultkk->fetch();
        $username = $row['username'];
        $score = $row['score'];

        $sql = "SELECT COUNT(offer_id) FROM likes WHERE offer_id=$offer_idd";
        $result = $conn->query($sql);
        $row = $result->fetch_row();
        $count = $row[0];
        
        $sqldislike = "SELECT COUNT(offer_id) FROM dislikes WHERE offer_id=$offer_idd";
        $result = $conn->query($sqldislike);
        $rowdis = $result->fetch_row();
        $countdislikes = $rowdis[0];
        $end = $offer['end'];
        /*$stmt = $db->prepare("SELECT COUNT(offer_id) FROM likes WHERE offer_id=$offer_id");
        $stmt->execute();
        $likes = $stmt->fetchAll();*/

        echo '<p>' . 'Προιόν : ' . $offer['product_name'] . '</p>';
        echo '<p>' . 'Τιμή : ' . $offer['offer_price'] . '€'.'</p>';
        echo '<p>' . 'Ημερομηνία προσφοράς : ' . $offer['offerdate'] . '</p>';
        echo '<p>' . 'Απόθεμα : ' . $offer['stock'] . '</p>';
        echo '<form action="" method="post">';
        echo '<input type="hidden" name="offer_id" value="' . $offer['offer_id'] . '">';
        echo '<p>' . 'Likes : ' . $count. '</p>';
        echo '<p>' . 'Dislikes : ' . $countdislikes. '</p>';
        echo ' '. 'Όνομα χρήστη : ' . $username.' ';
        echo '<br />';
        echo ' '. 'Σκορ Χρήστη : ' . $score.' ';
        echo '<br />';

        echo '<form action="" method="post">';
        //echo '<input type="hidden" name="offer_id" value="' . $offer['offer_id'] . '">';
        
        
        /*echo '<input type="submit" name="like" value="" >';
        echo '<input type="submit" name="dislike" value="">';
        
        echo '<input type="submit" name="outofstock" value="">';
        echo '<input type="submit" name="onstock" value="">';
        echo '<input type="submit" name="end" value="termatismenh">';*/
        if ($end < 10) {
            echo '<input type="submit" name="like" value="" >';
            echo '<input type="submit" name="dislike" value="">';
            
            echo '<input type="submit" name="outofstock" value="">';
            echo '<input type="submit" name="onstock" value="">';
            echo '<input type="submit" name="end" value="">';
            
            
            //echo 'Η προσφόρα δεν είναι πλέον διαθέσιμη';
        } else  {

            echo 'Λυπούμαστε!';
            echo '<br />';
            echo '<br />';
            echo 'Η προσφορά δεν είναι πλέον διαθέσιμη';

            
            
            
        }

        if ($adminnumber <= $admin) {

            echo '<input type="submit" name="delete" value="">';
        }
        echo '</form>';
        echo '</div>';
    }
    
    
    // Check if the user submitted a "like"
   /* $kayla = 5;
  if ($kayla <= $admin) {
    echo "adasfa";
    echo "<a href='admin_page.php' >te</a>";*/
  }
  if (isset($_POST['end'])) {
    $offer_id = $_POST['offer_id'];

    $queryend = "UPDATE offer SET end = '15' WHERE offer_id = $offer_id";
    $run = mysqli_query($conn, $queryend);

}
  if (isset($_POST['outofstock'])) {
    $offer_id = $_POST['offer_id'];

    $queryoutofstock = "UPDATE offer SET stock = 'out of stock' WHERE offer_id = $offer_id";
    $run = mysqli_query($conn, $queryoutofstock);

}
if (isset($_POST['stock'])) {
    $offer_id = $_POST['offer_id'];

    $queryonstock = "UPDATE offer SET stock = 'on stock' WHERE offer_id = $offer_id";
    $run = mysqli_query($conn, $queryonstock);

}

    if ($adminnumber <= $admin && isset($_POST['delete'])) {

        // Retrieve the product ID from the form
        $offer_id = $_POST['offer_id'];
        $querydelete = " DELETE FROM offer WHERE offer_id = $offer_id";
        $run = mysqli_query($conn, $querydelete);
        // Insert a new like into the database
       // echo "adafdsvgsbdfbsbsbssbbsdfbsfdsfa";
    // echo "<a href='admin_page.php' >Πίσω</a>";
        
        
    }
    
    if (isset($_POST['like'])) {
        // Retrieve the product ID from the form
        $offer_id = $_POST['offer_id'];

        // Insert a new like into the database
        $stmt = $db->prepare('INSERT INTO likes (offer_id) VALUES (:offer_id)');
        $stmt->bindValue(':offer_id', $offer_id);
        $stmt->execute();
        $resultus = $db->query ("SELECT user_id FROM offer WHERE offer_id = $offer_id ");
        $row = $resultus->fetch();
        $user_id = $row['user_id'];
        $queryscorefive = " UPDATE user SET score= score + 5 WHERE user_id = $user_id";
            $run = mysqli_query($conn, $queryscorefive);
    }
    
    if (isset($_POST['dislike'])) {
       
        $offer_id = $_POST['offer_id'];

        // Insert a new like into the database
        $stmtdis = $db->prepare('INSERT INTO dislikes (offer_id) VALUES (:offer_id)');
        $stmtdis->bindValue(':offer_id', $offer_id);
        $stmtdis->execute();
        $resultdis = $db->query ("SELECT user_id FROM offer WHERE offer_id = $offer_id ");
        $rowdis = $resultdis->fetch();
        $user_id = $rowdis['user_id'];
        $queryscoreone = " UPDATE user SET score= score - 1 WHERE user_id = $user_id";
            $rundis = mysqli_query($conn, $queryscoreone);
    }

?>