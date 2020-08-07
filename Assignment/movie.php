<?php
session_start();
require('db_connect.php');
if(!isset($_SESSION['currentUser'])){

 //header('Location:login.php');


}
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="jScript"></script>
<script src ="jquery.js"></script>
</head>

<body>
<?php include("header.php")?>
  <div class="display-block">DIGITAL LIBRARY </div>
    <div class="flexContainer2">
        <div class="flexSide">
    <ul>
            <li onclick="window.location.href = 'cooking.php';">Cooking</li>
            <li onclick="window.location.href = 'history.php';">History</li>
            <li onclick="window.location.href = 'movie.php';">Movie</li>
            <li onclick="window.location.href = 'fashion.php';">Fashion</li>
        </ul> 
        
        </div>
 <?php echo  '  <div class="flexMain">';
            $query = "SELECT item_id,title,author_name, bookDescription,bookImage FROM item WHERE category = 'Movie'";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
     if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
      echo'   <div class="bookList">
                <div class="imageGrey">
                <img src="data:image/jpeg;base64,'.base64_encode( $row['bookImage'] ).'"class="bookListImage">;
            <br>
                    <label>
                        <strong>'.$row["title"].'</strong>
                        <br>
                        <span>By '.$row["author_name"].'</span>
                    </label>
                </div>
                <form id="displayItem" method="get" action="itemDisplay.php" >

                <button class="buttonReadMore" id ="itemID" name="itemID" type="submit" value ='.$row["item_id"].'>
                    Read More
                </button>

               </form>
                <p>'.$row["bookDescription"].'</p>
         </div>' ;}
            }
            else {
                echo "0 results";
            }
         echo'</div>'
     ?>
    </div> 
   
	<!-- body -->
            
	<footer id="pageFooter">
        Copyright &#9400; 2020 DIGITAL LIBRARY. All rights reserved.
    </footer>
</body>

</html>