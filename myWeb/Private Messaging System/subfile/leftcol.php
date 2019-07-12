<div id="leftColContainer">
    <div class='whiteBack'>
        <p style="cursor:pointer; font-size:22px;color:white;text-align: center;margin-top: 10px;"  onclick='document.getElementById("newMessage").style.display = "block"'align="center"><i class="fa fa-plus-circle"></i> &nbsp New Message</p> <hr>
    </div>

<?php 
$q = 'SELECT DISTINCT  `recievername`, `sendername` FROM `messages` WHERE `sendername` = "'.$_SESSION['username'].'" 
        OR `recievername` = "'.$_SESSION['username'].'"  ORDER BY `datetime` DESC ';

$r = mysqli_query($con, $q);

if($r){
    if(mysqli_num_rows($r)>0){
        $counter = 0;
        $addedUser = array();
        while($row = mysqli_fetch_assoc($r)){
            $sendername = $row['sendername'];
            $recievername = $row['recievername'];

            if($_SESSION['username'] == $sendername){
                if(in_array($recievername, $addedUser)){

                }else{

                    ?>
                    <div class='greyBack'>
                        <i class="  fa fa-user-circle-o" style="font-size: 20px"></i>
                        <?php  echo '<a href="?user='.$recievername.'">'. $recievername.'</a>';?><i class="fa fa-comments-o" style="float: right;"></i> <br>
                    </div>
                    
                    <?php

                    $addedUser = array($counter => $recievername);
                    $counter++;

                }
            }elseif($_SESSION['username'] == $recievername){
                if(in_array($sendername, $addedUser)){

                }else{

                    ?>
                    <div class='greyBack' >
                        <i class="  fa fa-user-circle-o" style="font-size: 20px"></i>
                        <?php  echo '<a href="?user='.$sendername.'">'. $sendername.'</a>';?> <i class="fa fa-comments-o" style="float: right;"></i>
                    </div>
                    
                    <?php

                    $addedUser = array($counter => $sendername);
                    $counter++;

                }
            }
        }
    }else{
        ?><div style="color:white;margin-top: 10px"><?php echo "No Users!"; ?></div><?php 
    }
}else{
    echo $q;
}
?>



    
</div>

