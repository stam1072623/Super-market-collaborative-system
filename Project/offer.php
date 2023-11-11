<?php
session_start();
include "database_connection.php";

$image107 = '<img src="https://static.ab.gr/medias/sys_master/h01/h9c/9301968846878.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image109 = '<img src="https://gomarket.gr/wp-content/uploads/2020/04/91dUAgpTVkyrhUIHeAu7Sg.jpg" width="100px" height="100px">';
$image132 = '<img src="https://kouvasmarket.gr/wp-content/uploads/2020/06/GOUDA-TRIMENH.jpg" width="100px" height="100px">';
$image170 = '<img src="https://s1.sklavenitis.gr/images/ProductDetail/40/files/ProductMedia/Products/9591470/1.jpg" width="100px" height="100px">';
$image172 = '<img src="https://static.ab.gr/medias/sys_master/h64/hfc/9347500212254.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image364 = '<img src="https://static.ab.gr/medias/sys_master/h47/hd7/9316834705438.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image724= '<img src="https://static.ab.gr/medias/sys_master/h25/hd6/9350061785118.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image749 = '<img src="https://static.ab.gr/medias/sys_master/he0/h86/9780850524190.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image754 = '<img src="https://static.ab.gr/medias/sys_master/h4c/hd9/9357848543262.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image769 = '<img src="https://static.ab.gr/medias/sys_master/h1b/hc0/9490923388958.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1029 = '<img src="https://static.ab.gr/medias/sys_master/ha6/h01/9771950014494.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1033 = '<img src="https://static.ab.gr/medias/sys_master/hb2/h85/9687877386270.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1037 = '<img src="https://static.ab.gr/medias/sys_master/hf2/h7a/9367952359454.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1086 = '<img src="https://static.ab.gr/medias/sys_master/h59/h58/9771898175518.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1139 = '<img src="https://static.ab.gr/medias/sys_master/h29/h75/9771829887006.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1273 = '<img src="https://static.ab.gr/medias/sys_master/hb5/h94/9423356952606.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1288 = '<img src="https://static.ab.gr/medias/sys_master/hb4/hbe/9348742250526.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1289 = '<img src="https://static.ab.gr/medias/sys_master/hac/h1b/9350116081694.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image1172 = '<img src="https://static.ab.gr/medias/sys_master/h57/ha3/9348019912734.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image442 = '<img src="https://a.scdn.gr/images/sku_main_images/023940/23940756/xlarge_20200708121022_monster_energy_drink_500ml.jpeg" width="100px" height="100px">';
$image756 = '<img src="https://static.ab.gr/medias/sys_master/h46/h0d/9352010989598.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image417 = '<img src="https://static.ab.gr/medias/sys_master/h08/hba/9777681203230.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image386 = '<img src="https://static.ab.gr/medias/sys_master/h9b/h4e/8833230209054.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image329 = '<img src="https://static.ab.gr/medias/sys_master/h1a/h47/9121533952030.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';
$image301 = '<img src="https://static.ab.gr/medias/sys_master/hb8/h04/9483397693470.jpg?buildNumber=7324c7068c42c2ea303ca5c15675434fffc4b067a315c63f09fc3f68eca85a8e" width="100px" height="100px">';

$curr_user = $_SESSION['user_id'];

?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Διαθέσιμες προσφορές</title>
        <link rel="stylesheet" type="text/css" href="main_style.css">
        <style>
            input[name=like]
            {
                background-image: url(like.png);
                background-repeat: no-repeat;
                background-size: contain;
                margin: 5px 10px 5px 10px;
                width: 35px;
                height: 35px;
                border: none;
                border-radius: 10px;
            }
            
            input[name=dislike]
            {
                background-image: url(dislike.png);
                background-repeat: no-repeat;
                background-size: contain;
                margin: 5px 10px 5px 10px;
                width: 35px;
                height: 35px;
                border: none;
                border-radius: 10px;
            }
            
            input[name=instock]
            {
                background-image: url(instock.png);
                background-repeat: no-repeat;
                background-size: contain;
                margin: 5px 10px 5px 10px;
                width: 35px;
                height: 35px;
                border: none;
                border-radius: 10px;
            }
            
            input[name=outofstock]
            {
                background-image: url(outofstock.png);
                background-repeat: no-repeat;
                background-size: contain;
                margin: 5px 10px 5px 10px;
                width: 35px;
                height: 35px;
                border: none;
                border-radius: 10px;
            }
           
            .form-inline {
                display: flex;
                flex-flow: row wrap;
                align-items: center;
                width: 12%;
            }
        </style>
    </head>
    <body>
        <form>
            <h2>Παρακαλώ εισάγετε το id του καταστήματος που σας ενδιαφέρει...</h2><br> 
            <input type="text" name="input" placeholder="0" pattern="[0-9]{1-3}">
        </form>
    </body>
    </html>

<?php 

$sql = "SELECT admin FROM user WHERE user_id='$curr_user'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        $admin = $row['admin'];
    }
}

if($admin == 0)
{
    if(isset($_GET['input']))
    {
        $input = $_GET['input']; 
        $sql = "SELECT product.product_name, offer.product_id, offer.offer_price, offer.offerdate, offer.offer_id, offer.like_amount, offer.dislike_amount, offer.stock, offer.user_id FROM offer INNER JOIN product ON offer.product_id = product.product_id WHERE offer.shop_id = '$input' ";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_array($result))
            {
                $user = $row['user_id'];
                $offer_id = $row['offer_id'];
                $price = $row['offer_price'];
                $date = $row['offerdate'];
                $name = $row['product_name'];
                $stock = $row['stock'];
                $likes = $row['like_amount'];
                $dislikes = $row['dislike_amount'];
                $prod_id = $row['product_id'];

                $sqluser = "SELECT username, score FROM user WHERE user_id='$user'"; 
                $res = mysqli_query($conn, $sqluser);
                $r = mysqli_fetch_assoc($res);
                $username = $r['username'];
                $score = $r['score'];

                switch ($prod_id)
                {
                    case 107:
                        echo $image107;
                        break;
                    case 109:
                        echo $image109;
                        break;
                    case 132:
                        echo $image132;
                        break;
                    case 170:
                        echo $image170;
                        break;
                    case 172:
                        echo $image172;
                        break;
                    case 364:
                        echo $image364;
                        break;
                    case 724:
                        echo $image724;
                        break;
                    case 749:
                        echo $image749;
                        break;
                    case 754:
                        echo $image754;
                        break;
                    case 769:
                        echo $image769;
                        break;
                    case 1029:
                        echo $image1029;
                        break;
                    case 1033:
                        echo $image1033;
                        break;
                    case 1037:
                        echo $image1037;
                        break;
                    case 1086:
                        echo $image1086;
                        break;
                    case 1139:
                        echo $image1139;
                        break;
                    case 1273:
                        echo $image1273;
                        break;
                    case 1288:
                        echo $image1288;
                        break;
                    case 1289:
                        echo $image1289;
                        break;
                    case 1172:
                        echo $image1172;
                        break;
                    case 442:
                        echo $image442;
                        break;
                    case 756:
                        echo $image756;
                        break;
                    case 417:
                        echo $image417;
                        break;
                    case 386:
                        echo $image386;
                        break;
                    case 329:
                        echo $image329;
                        break;
                    case 301:
                        echo $image301;
                        break;
                    default:
                        echo "No available image for this product";
                        break;
                }

                if($stock > 0)
                {
                    echo '<p>'.'Product: '.$name.'<br>'.'Price: '.$price.'<br>'.'Date submitted: '.$date.'<br>'.'Likes: '.$likes.'<br>'.'Dislikes: '.$dislikes.'<br>'.'Stock: In stock <br>'.'Username: '.$username.'<br>'.'Score: '.$score.'</p>'; 

                }else
                {
                    echo '<p>'.'Product: '.$name.'<br>'.'Price: '.$price.'<br>'.'Date submitted: '.$date.'<br>'.'Likes: '.$likes.'<br>'.'Dislikes: '.$dislikes.'<br>'.'Stock: Out of stock <br>'.'Username: '.$username.'<br>'.'Score: '.$score.'</p>'; 

                }
            
                echo '<form class="form-inline" action="offer.php?input='.$input.'" method="post">'; 
                echo '<input type="hidden" name="id" value='.$offer_id.'>';
                if($stock > 0) //An yparxei apothema
                {
                    echo '<input type="submit" name="like" value="">';
                    echo '<input type="submit" name="dislike" value="">';
                    echo '<input type="submit" name="instock" value="">';
                    echo '<input type="submit" name="outofstock" value="">';
                }else //An den yparxei apothema
                {
                    echo '<input type="submit" name="instock" value="">';
                    echo '<input type="submit" name="outofstock" value="">';
                }
                echo '</form>';
            }
        }else { echo '<p>Δεν υπάρχουν διαθέσιμες προσφορές.</p>';}
    }

    if(isset($_POST['like'])) //An egine submit like 
    {
        $id = $_POST['offer_id'];

        $sql = "UPDATE offer SET like_amount = like_amount + 1 WHERE offer_id='$id'"; 
        $result = mysqli_query($conn,$sql);

        $sql = "SELECT user_id FROM offer WHERE offer_id='$id'"; 
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $user = $row['user_id'];

        $sql = "UPDATE user SET score = score + 5, score_history = score_history + 5 WHERE user_id='$user'"; 
        mysqli_query($conn,$sql);

        $sql = "UPDATE user SET likes = likes + 1 WHERE user_id ='$curr_user'"; 
        mysqli_query($conn,$sql);

    }else if(isset($_POST['dislike'])) //An egine submit dislike
    {
        $id = $_POST['offer_id'];

        $sql = "UPDATE offer SET dislike_amount = dislike_amount + 1 WHERE offer_id='$id'"; 
        $result = mysqli_query($conn,$sql);

        $sql = "SELECT user_id FROM offer WHERE offer_id='$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $user = $row['user_id'];

        $sql = "UPDATE user SET score = score - 1, score_history = score_history - 1 WHERE user_id='$user'"; 
        mysqli_query($conn,$sql);

        $sql = "UPDATE user SET dislikes = dislikes + 1 WHERE id ='$curr_user'"; 
        mysqli_query($conn,$sql);

    }else if(isset($_POST['instock'])) 
    {
        $id = $_POST['offer_id'];

        $sql = "UPDATE offer SET stock = 1 WHERE offer_id='$id'"; 
        mysqli_query($conn,$sql);

    }else if(isset($_POST['outofstock'])) 
    {
        $id = $_POST['offer_id'];

        $sql = "UPDATE offer SET stock = 0 WHERE offer_id='$id'"; 
        mysqli_query($conn,$sql);
    }
}else
{
    if(isset($_GET['input']))
    {
        $input = $_GET['input']; 
        $sql = "SELECT product.product_name, offer.product_id, offer.offer_price, offer.offerdate, offer.offer_id, offer.like_amount, offer.dislike_amount, offer.stock, offer.user_id FROM offer INNER JOIN product ON offer.product_id = product.product_id WHERE offer.shop_id = '$input' ";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_array($result))
            {
                $user = $row['user_id'];
                $offer_id = $row['offer_id'];
                $price = $row['offer_price'];
                $date = $row['offerdate'];
                $name = $row['product_name'];
                $stock = $row['stock'];
                $likes = $row['like_amount'];
                $dislikes = $row['dislike_amount'];
                $prod_id = $row['product_id'];

                $sqluser = "SELECT username, score FROM user WHERE user_id='$user'"; 
                $res = mysqli_query($conn, $sqluser);
                $r = mysqli_fetch_assoc($res);
                $username = $r['username'];
                $score = $r['score'];

                switch ($prod_id)
                {
                    case 107:
                        echo $image107;
                        break;
                    case 109:
                        echo $image109;
                        break;
                    case 132:
                        echo $image132;
                        break;
                    case 170:
                        echo $image170;
                        break;
                    case 172:
                        echo $image172;
                        break;
                    case 364:
                        echo $image364;
                        break;
                    case 724:
                        echo $image724;
                        break;
                    case 749:
                        echo $image749;
                        break;
                    case 754:
                        echo $image754;
                        break;
                    case 769:
                        echo $image769;
                        break;
                    case 1029:
                        echo $image1029;
                        break;
                    case 1033:
                        echo $image1033;
                        break;
                    case 1037:
                        echo $image1037;
                        break;
                    case 1086:
                        echo $image1086;
                        break;
                    case 1139:
                        echo $image1139;
                        break;
                    case 1273:
                        echo $image1273;
                        break;
                    case 1288:
                        echo $image1288;
                        break;
                    case 1289:
                        echo $image1289;
                        break;
                    case 1172:
                        echo $image1172;
                        break;
                    case 442:
                        echo $image442;
                        break;
                    case 756:
                        echo $image756;
                        break;
                    case 417:
                        echo $image417;
                        break;
                    case 386:
                        echo $image386;
                        break;
                    case 329:
                        echo $image329;
                        break;
                    case 301:
                        echo $image301;
                        break;
                    default:
                        echo "No available image for this product";
                        break;
                }

                if($stock > 0)
                {
                    echo '<p>'.'Product: '.$name.'<br>'.'Price: '.$price.'<br>'.'Date submitted: '.$date.'<br>'.'Likes: '.$likes.'<br>'.'Dislikes: '.$dislikes.'<br>'.'Stock: In stock <br>'.'Username: '.$username.'<br>'.'Score: '.$score.'</p>'; 

                }else
                {
                    echo '<p>'.'Product: '.$name.'<br>'.'Price: '.$price.'<br>'.'Date submitted: '.$date.'<br>'.'Likes: '.$likes.'<br>'.'Dislikes: '.$dislikes.'<br>'.'Stock: Out of stock <br>'.'Username: '.$username.'<br>'.'Score: '.$score.'</p>'; 

                }
            
                echo '<form class="form-inline" action="offer.php?input='.$input.'" method="post">'; 
                echo '<input type="hidden" name="offer_id" value='.$offer_id.'>';
                if($stock > 0) //An yparxei apothema
                {
                    echo '<input type="submit" name="like" value="">';
                    echo '<input type="submit" name="dislike" value="">';
                    echo '<input type="submit" name="instock" value="">';
                    echo '<input type="submit" name="outofstock" value="">';
                    echo '<input type="submit" name="delete" value="delete">';
                }else //An den yparxei apothema
                {
                    echo '<input type="submit" name="instock" value="">';
                    echo '<input type="submit" name="outofstock" value="">';
                    echo '<input type="submit" name="delete" value="delete">';
                }
                echo '</form>';
            }
        }else { echo '<p>Δεν υπάρχουν διαθέσιμες προσφορές.</p>';}
    }

    if(isset($_POST['like'])) //An egine submit like 
    {
        $id = $_POST['offer_id'];

        $sql = "UPDATE offer SET like_amount = like_amount + 1 WHERE offer_id='$id'"; 
        $result = mysqli_query($conn,$sql);

        $sql = "SELECT user_id FROM offer WHERE offer_id='$id'"; 
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $user = $row['user_id'];

        $sql = "UPDATE user SET score = score + 5, score_history = score_history + 5 WHERE user_id='$user'"; 
        mysqli_query($conn,$sql);

        $sql = "UPDATE user SET likes = likes + 1 WHERE user_id ='$curr_user'"; 
        mysqli_query($conn,$sql);

    }else if(isset($_POST['dislike'])) //An egine submit dislike
    {
        $id = $_POST['offer_id'];

        $sql = "UPDATE offer SET dislike_amount = dislike_amount + 1 WHERE offer_id='$id'"; 
        $result = mysqli_query($conn,$sql);

        $sql = "SELECT user_id FROM offer WHERE offer_id='$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $user = $row['user_id'];

        $sql = "UPDATE user SET score = score - 1, score_history = score_history - 1 WHERE user_id='$user'"; 
        mysqli_query($conn,$sql);

        $sql = "UPDATE user SET dislikes = dislikes + 1 WHERE id ='$curr_user'"; 
        mysqli_query($conn,$sql);

    }else if(isset($_POST['instock'])) 
    {
        $id = $_POST['offer_id'];

        $sql = "UPDATE offer SET stock = 1 WHERE offer_id='$id'"; 
        mysqli_query($conn,$sql);

    }else if(isset($_POST['outofstock'])) 
    {
        $id = $_POST['offer_id'];

        $sql = "UPDATE offer SET stock = 0 WHERE offer_id='$id'"; 
        mysqli_query($conn,$sql);
    }else if(isset($_POST['delete']))
    {
        $id = $_POST['offer_id'];

        $sql = "DELETE FROM offer WHERE offer_id='$id'";
        mysqli_query($conn, $sql);
    }
}