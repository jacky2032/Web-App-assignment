<script>

function validform()
{

    if($(".author").val()=='')
    {
        alert('Please field out this fields!');
    }
	else if($(".title").val()=='') {
		 alert('Please field out this fields!');
	}
	else if($(".desctiption").val()=='') {
		 alert('Please field out this fields!');
	}
	else if($(".image").val()=='') {
		 alert('Please field out this fields!');
	}
	else if($(".stock").val()=='') {
		 alert('Please field out this fields!');
	}
    else
    {
        $( ".addForm" ).submit();
    }
	


}
</script>

<?php  
session_start();
 require('db_connect.php');
if( isset($_POST['submitAdd']) || isset($_POST['title'])){
    $title = $_POST['title'];
$author_name = $_POST['author'];
$item_type = $_POST['itemType'];
$bookDescription = $_POST['description'];
$category = $_POST['itemCategory'];
$stock = $_POST['stock'];
$image = $_FILES['image']['tmp_name'];
$name = $_FILES['image']['name'];

if(!empty($_FILES['image']['tmp_name']) 
     && file_exists($_FILES['image']['tmp_name'])) {
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
}

$query = "INSERT INTO item VALUES 
(NULL,'$title', '$author_name','$item_type', '$bookDescription','$category','$stock','$image')";
 
    if (mysqli_query($connection, $query)) {
    
        echo "Record added successfully";
     
    } else {
        echo "Error adding record: " . mysqli_error($connection);
      
    }


}
else {

    echo '<script language="javascript">';
echo 'record not added.';
echo '</script>';
}
?>