<!DOCTYPE html>
<html>
  <form action="menu.php" method="post">
    Enter First Number:
    <input type="text" name="n1"><br><br>
    Enter Second Number:
    <input type="text" name="n2"><br><br>
    <input type="radio" name="option" value="add">addition<br>
    <input type="radio" name="option" value="subtract">subtraction<br>
    <input type="radio" name="option" value="multiply">multiplication<br>
    <input type="radio" name="option" value="divide">division<br>
    <input type="submit" name="calculate" value="calculate">
  </form>
</html>

<?php
if (isset($_POST['calculate'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $cs = @$_POST['option'];

    switch ($cs) {
        case 'add':
            $n3 = $n1 + $n2;
            echo "Addition is: " . $n3;
            break;
        case 'subtract':
            $n4 = $n1 - $n2;
            echo "Subtraction is: " . $n4;
            break;
        case 'multiply':
            $n5 = $n1 * $n2;
            echo "Multiplication is: " . $n5;
            break;
        case 'divide':
            if ($n2 == 0) {
                echo "Division by zero is not allowed.";
            } else {
                $n6 = $n1 / $n2;
                echo "Division is: " . $n6;
            }
            break;
        default:
            echo "Please select an operation.";
    }
}
?>
