<?php 
include 'includes/cal.inc.php';

if (isset($_POST['num1']) && isset($_POST['num2'])){

    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $cal= $_POST['cal'];


}

$calculator = new Calc($num1, $num2, $cal);
$calculator->calMethod();

echo $calculator->calMethod();

?>