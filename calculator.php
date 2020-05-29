<?php
$num1 = "";
$num2 = "";
$op = "";
$result = "";
class calculator
{
    var $num1;
    var $num2;

    function checkoperations($operations)
    {
        switch ($operations) {
            case '+':
                return $this->num1 + $this->num2;
                break;

            case '-':
                return $this->num1 - $this->num2;
                break;

            case '*':
                return $this->num1 * $this->num2;
                break;

            case '/':
                return $this->num1 / $this->num2;
                break;

            default:
                return "No command found";
        }
    }
    function sum($num1, $num2, $num3)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        return $this->checkoperations($num3);
    }
}

$cal = new calculator();
if (isset($_POST['submit'])) {
    $result = $cal->sum($_POST['num1'], $_POST['num2'], $_POST['op']);
}
?>

<form action="" method="POST">
    <table align="center">

        <tr>
            <td>First Number</td>
            <td><input type="text" name="num1"></td>
        </tr>

        <tr>
            <td>Second Number</td>
            <td><input type="text" name="num2"></td>
        </tr>

        <tr>
            <td>Select Operations</td>
            <td><select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Enter"></td>
        </tr>

        <tr>
            <td><?php echo $result; ?></td>
        </tr>

    </table>
</form>