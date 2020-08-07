<?php
require('db_connect.php');


 $sql = "SELECT * FROM item WHERE title LIKE '%".$_POST["search"]."%' OR author_name LIKE '%".$_POST["search"]."%'";
 $result = mysqli_query($connection,$sql);
 if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

      echo'   <form id="displayItem" method="get" action="itemDisplay.php" >


               <button name="itemID" type="submit" value ='.$row["item_id"].'>
               '.$row['title'].'
           </button>

        
            </form>';
    }
 }
 else{
     "Data Not Found";
 }




?>