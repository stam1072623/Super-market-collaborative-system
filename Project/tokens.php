<?php
include "database_connection.php";

    $sql = "SELECT count(*) as total FROM user WHERE admin=0"; 
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $usercount = $row['total'];

    $sql = "SELECT made, given FROM awards WHERE awards_id = 1"; 
    $row = mysqli_fetch_assoc($result);
    $given = $row['given'];
    $made = $row['made'];

    $currentday = date('d');
    $currentmonth = date('m');
   
    if($currentday == 1 AND $made == 0) 
    {
        $made = 1;
        $tokens = $usercount*100;
        $sql = "UPDATE awards  SET tokens='$tokens', made='$made', given=0 WHERE awards_id = 1"; 
        mysqli_query($conn,$sql);
        $sql = "UPDATE user SET score = 0"; 
        mysqli_query($conn,$sql);
    }

    if($currentmonth == 4 OR $currentmonth== 6 OR $currentmonth == 9 OR $currentmonth == 11)
    {
        $sql = "SELECT tokens FROM awards WHERE awards_id = 1"; 
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if($currentday == 30 AND $given == 0) 
        {
            $given = 1;
            $available_tokens = $row['tokens']*0.8; 
            $sql = "SELECT * FROM user WHERE admin = 0 ORDER BY score_history DESC" ;
            $result = mysqli_query($conn,$sql);
            $count = 1;
            
            
            if(mysqli_num_rows($result)) 
            {
                while($row = mysqli_fetch_array($result)) 
                {
                  if($count<=3){
      
                    switch($count)
                    {
                        case 1:
                            $tokens = $available_tokens*0.4;
                            $operator1 = $tokens;
                            
                            
                            break;
                        case 2:
                            $tokens = $available_tokens*0.2;
                            $operator2 = $tokens;
                            
                            break;
                        case 3:
                            $tokens = $available_tokens*0.2;
                            $operator3 = $tokens;
                            
                            break;
                        
                    }
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token='$tokens' WHERE user_id='$id'";   
                    mysqli_query($conn,$sql_update);
                  }
                  else{
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token='0' WHERE user_id='$id'";   
                    mysqli_query($conn,$sql_update);
                    
                  }
                  $count++;
                }
            }
            $totalgiven = $operator1 + $operator2 + $operator3;
            
            $remaining = $available_tokens - $totalgiven;
            
            $share = round($remaining/$usercount); 
            
            $sql = "SELECT * FROM user WHERE admin = 0 ORDER BY score_history DESC";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)) 
            {
                while($row = mysqli_fetch_array($result)) 
                {
                    $tokens = $row['token'] + $share;
                    $total = $row['token_history'] + $tokens;
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token_history='$total' ,token='$tokens' WHERE user_id='$id'";
                    mysqli_query($conn,$sql_update);
                }
            }
            $sql = "UPDATE awards  SET given='$given', made=0 WHERE awards_id = 1"; 
            mysqli_query($conn,$sql);
        }
    }else if($currentmonth == 1 OR $currentmonth == 3 OR $currentmonth == 5 OR $currentmonth == 7 OR $currentmonth == 8 OR $currentmonth == 10 OR $currentmonth == 12)
    {
        $sql = "SELECT tokens FROM awards WHERE awards_id = 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if($currentday == 31 AND $given == 0)
        {
            $given = 1;
            $available_tokens = $row['tokens']*0.8; 
            $sql = "SELECT * FROM user WHERE admin = 0 ORDER BY score_history DESC" ;
            $result = mysqli_query($conn,$sql);
            $count = 1;
            
            
            if(mysqli_num_rows($result)) 
            {
                while($row = mysqli_fetch_array($result)) 
                {
                  if($count<=3){
      
                    switch($count)
                    {
                        case 1:
                            $tokens = $available_tokens*0.4;
                            $operator1 = $tokens;
                            
                            
                            break;
                        case 2:
                            $tokens = $available_tokens*0.2;
                            $operator2 = $tokens;
                            
                            break;
                        case 3:
                            $tokens = $available_tokens*0.2;
                            $operator3 = $tokens;
                            
                            break;
                        
                    }
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token='$tokens' WHERE user_id='$id'";   
                    mysqli_query($conn,$sql_update);
                  }
                  else{
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token='0' WHERE user_id='$id'";   
                    mysqli_query($conn,$sql_update);
                    
                  }
                  $count++;
                }
            }
            $totalgiven = $operator1 + $operator2 + $operator3;
            
            $remaining = $available_tokens - $totalgiven;
            
            $share = round($remaining/$usercount); 
            
            $sql = "SELECT * FROM user WHERE admin = 0 ORDER BY score_history DESC";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)) 
            {
                while($row = mysqli_fetch_array($result)) 
                {
                    $tokens = $row['token'] + $share;
                    $total = $row['token_history'] + $tokens;
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token_history='$total' ,token='$tokens' WHERE user_id='$id'";
                    mysqli_query($conn,$sql_update);
                }
            }
            $sql = "UPDATE awards  SET given='$given', made=0 WHERE awards_id = 1"; 
            mysqli_query($conn,$sql);
        }
    }else if($currentmonth == 2 )//Gia fevrouario me 28 hmeres
    {
        $sql = "SELECT tokens FROM awards WHERE awards_id = 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if($currentday == 28 AND $given == 0) 
        {
            $given = 1;
            $available_tokens = $row['tokens']*0.8; 
            $sql = "SELECT * FROM user WHERE admin = 0 ORDER BY score_history DESC" ;
            $result = mysqli_query($conn,$sql);
            $count = 1;
            
            
            if(mysqli_num_rows($result)) 
            {
                while($row = mysqli_fetch_array($result)) 
                {
                  if($count<=3){
      
                    switch($count)
                    {
                        case 1:
                            $tokens = $available_tokens*0.4;
                            $operator1 = $tokens;
                            
                            
                            break;
                        case 2:
                            $tokens = $available_tokens*0.2;
                            $operator2 = $tokens;
                            
                            break;
                        case 3:
                            $tokens = $available_tokens*0.2;
                            $operator3 = $tokens;
                            
                            break;
                        
                    }
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token='$tokens' WHERE user_id='$id'";   
                    mysqli_query($conn,$sql_update);
                  }
                  else{
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token='0' WHERE user_id='$id'";   
                    mysqli_query($conn,$sql_update);
                    
                  }
                  $count++;
                }
            }
            $totalgiven = $operator1 + $operator2 + $operator3;
            
            $remaining = $available_tokens - $totalgiven;
            
            $share = round($remaining/$usercount); 
            
            $sql = "SELECT * FROM user WHERE admin = 0 ORDER BY score_history DESC";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)) 
            {
                while($row = mysqli_fetch_array($result))  
                {
                    $tokens = $row['token'] + $share;
                    $total = $row['token_history'] + $tokens;
                    $id = $row['user_id'];
                    $sql_update = "UPDATE user SET token_history='$total' ,token='$tokens' WHERE user_id='$id'";
                    mysqli_query($conn,$sql_update);
                }
            }
            $sql = "UPDATE awards  SET given='$given', made=0 WHERE awards_id = 1"; 
            mysqli_query($conn,$sql);
        }
    }