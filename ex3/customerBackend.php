<?php
echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';
echo "<title>Shipping Comfirmation</title>";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=$_POST["email"];
        $password=$_POST["password"];
        $one=$_POST["one"];
        $two=$_POST["two"];
        $three=$_POST["three"];
        $four=$_POST["four"];
        $shipping=$_POST["opd"];
        
    
    $price2=2.99;
    $price3=8.99;
    $price4=10.99;
    $price1=4.99;
    $shipprice=0;

    }
    
    
    $price1=$price1*$one;
    $price2=$price2*$two;
    $price3=$price3*$three;
    $price4=$price4*$four;
    
    if($shipping=='$5.00 three day')
    {
        $shipprice=5;
        $shipping="Three Days";
    }
    if($shipping=='$50.00 over night')
    {
        $shipprice=50;
        $shipping="Over Night";
    }
    $sum=$price1+$price2+$price3+$price4+$shipprice;
    echo "<div>";
    echo"<h1>Shipping Comfirmation</h1>";
    echo"Customer: ".$username."<br>";
    echo"Your Password: ".$password."<br>";
    echo "<table>";
    echo '<tr class="row1"> <th></th> <th>Quantity</th> <th>Cost Per Iteam</th> <th>Sub Total</th></tr>';
    echo '<tr> <th class="col1">Milk Chocolate</th> <th>'.$one.'</th> <th>$4.99</th> <th>$ '.$price1.'</th></tr>';
    echo '<tr> <th class="col2">Chocolate Ice Cream</th> <th>'.$two.'</th> <th>$2.99</th> <th>$ '.$price2.'</th></tr>';
    echo '<tr> <th class="col3">Chocolate Tarts</th> <th>'.$three.'</th> <th>$8.99</th> <th>$ '.$price3.'</th></tr>';
    echo '<tr> <th class="col4">Strawberry Chocolate</th> <th>'.$four.'</th> <th>$10.99</th> <th>$ '.$price4.'</th></tr>';
    echo '<tr class="row0"> <th class="col5">Shipping</th> <th>'.$shipping.'</th> <th></th> <th>$ '.$shipprice.'</th></tr>';
    echo '<tr class="row2"> <th></th> <th>Total cost</th> <th></th> <th>$ '.$sum.'</th></tr>';
    echo "</table>";
    echo "</div>";
?>