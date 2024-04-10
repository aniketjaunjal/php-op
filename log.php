<?php include("connecton.php");?>
<?php
$fusername = $_POST['fusername'];
$fpass     = $_POST['fpass'];
$query = $conn->prepare("select * from lio where fusername = ?");
$query->bind_param("s",$fusername);
$query->execute();
$query_result = $query->get_result();
if($query_result->num_rows > 0){
    $data = $query_result->fetch_assoc();
}
   if($data["fpass"] == "$fpass"){
    echo include("Food.php");
   }
   else{
    echo "invalid uesername or password";
   }
?>