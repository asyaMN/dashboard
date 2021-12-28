<?php
function fetch_data() {
  global $conn;
  $sql= "SELECT * FROM category";

  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
  if (mysqli_num_rows($result) > 0) {
    return$data;
    
  } else {
    echo "0 results";
  }
  

}
?>
 
