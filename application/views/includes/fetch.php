<?php
//fetch.php
$connect = mysqli_connect("localhost", "googleha_carrom", "googleha_carrom", "googleha_carrom");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tbl_products 
  WHERE name LIKE '%".$search."%'";

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Pincode Available</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'No Pincode Available!';
}
}
?>