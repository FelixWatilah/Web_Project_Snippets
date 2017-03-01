<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 04-Jan-17
 * Time: 1:01 PM
 */

$conn = mysqli_connect("localhost", "root","","db_image");


$query = mysqli_query($conn, "SELECT `*` FROM  `image`");

$num = mysqli_num_rows($query);


echo "<div>";
echo "<form class='form-horizontal'>";
echo "<table class='table table-bordered table-striped table-responsive'>";
echo "<tr class='danger text-center'><th>Image</th><th>Name</th><th>Email</th><th>Delete</th></tr>";

while($row = mysqli_fetch_assoc($query)){

    echo "<tr>";
    echo "<td><img class='img-rounded' src='img/".$row['image']."' width='50px' height='60px'/></td>";
    echo "<td class='text-center text-success'>".$row['name']."</td>";
    echo "<td  class='text-center text-primary'>".$row['email']."</td>";
    echo "<td>";
    echo "<a href='php/delete.php?email=".$row['email']."'><span class='fa fa-2x fa-trash text-danger'></span></a>";
    echo "</td>";
    echo "</tr>";
}
echo "<table>";
echo "</form>";
echo "</div>";

echo mysqli_error($conn);

mysqli_close($conn);