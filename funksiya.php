//1-vazifa

<?php
function factorial($n)
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

$N = 3;
$N_factorial = factorial($N);
echo $N_factorial; // 6
?><br><br><br>

// 2-vazifa<br><br>

<?php

function calculator()
{
}

if (isset($_POST['qoshish'])) {
    $t1 = $_POST['num1'];
    $t2 = $_POST['num2'];
    $a = $t1 + $t2;
} elseif (isset($_POST['ayirish'])) {
    $t1 = $_POST['num1'];
    $t2 = $_POST['num2'];
    $b = $t1 - $t2;
} elseif (isset($_POST['kopaytirish'])) {
    $t1 = $_POST['num1'];
    $t2 = $_POST['num2'];
    $c = $t1 * $t2;
} elseif (isset($_POST['bolish'])) {
    $t1 = $_POST['num1'];
    $t2 = $_POST['num2'];
    $d = $t1 / $t2;
} else {
    echo "hisobda emas";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>calcutator</title>
</head>

<body>

    <form action="" method="post">

        Enter First Value <input type="text" name="num1"><br><br>
        Enter Second Value <input type="text" name="num2"><br><br>
        <input type="submit" name="qoshish" value="Qoshish">
        <input type="submit" name="ayirish" value="Ayirish">
        <input type="submit" name="kopaytirish" value="Kopaytirish">
        <input type="submit" name="bolish" value="Bolish">
    </form>


    <table>

        <tr>

            <td>Qoshish</td>
            <td><?php if (isset($a)) echo $a; ?></td>
        </tr>

        <tr>

            <td>Ayirish</td>
            <td><?php if (isset($b)) echo $b; ?></td>

        </tr>

        <tr>

            <td>Kopaytirish</td>
            <td><?php if (isset($c)) echo $c; ?></td>

        </tr>

        <tr>

            <td>Bolish</td>
            <td><?php if (isset($d)) echo $d; ?></td>

        </tr>
    </table>
</body>

</html><br><br>
<!-- 

$result = "";
class calculator
{
    var $a;
    var $b;
    function tekshirish($oprator)
    {
        switch ($oprator) {
            case '+':
                return $this->a + $this->b;
                break;
            case '-':
                return $this->a - $this->b;
                break;
            case '*':
                return $this->a * $this->b;
                break;
            case '/':
                return $this->a / $this->b;
                break;
            default:
                return "Kechirasiz, hech qanday buyruq topilmadi";
        }
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->tekshirish($c);
    }
}
$cal = new calculator();
if (isset($_POST['submit'])) {
    $result = $cal->getresult($_POST['n1'], $_POST['n2'], $_POST['op']);
}

// $result = 0;

// function calculate($firstNumber, $secondNumber, $operator)
// {

//     $result = $firstNumber + $secondNumber;
//     return $result;

//     $result1 = $firstNumber - $secondNumber;
//     return $result1;

//     $result2 = $firstNumber * $secondNumber;
//     return $result2;

//     $result3 = $firstNumber / $secondNumber;
//     return $result3;

// echo $result;
// echo $result1;
// echo $result2;
// echo $result3;

// if ($operator == 'qoshish') {
//     $result = $firstNumber + $secondNumber;
// } elseif ($operator == 'ayirish') {
//     $result1 = $firstNumber - $secondNumber;
// } elseif ($operator == 'kopaytirish') {
//     $result2 = $firstNumber * $secondNumber;
// } elseif ($operator == 'bolish') {
//     $result3 = $firstNumber / $secondNumber;
// }

// return $result;
// }
// echo $result;
// echo $result1;
// echo $result2;
// echo $result3;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulyator</title>

</head>

<body>
    <div class="kalkulyator">
        <h1>Kalkulyator</h1>
    </div>



    <div class="parts">
        <div class="part1">
            <div>
                <input name="firstNumber" type="text" />
                <label>firstNumber</label><br>
            </div>
            <div>
                <input name="secondNumber" type="text" />
                <label>secondNumber</label>
                <br>
            </div>
            <div>
                <input name="result" type="text" />
                <label>Result</label>
            </div>
        </div>
        <div class="part2">
            <input type="submit" value="Qoshish">

            <input type="submit" value="Ayirish">

            <input type="submit" value="Kopaytirish">

            <input type="submit" value="Bolish">
        </div>
    </div>
    </div>
</body>

</html><br><br> -->



// 3-vazifa<br>

<?php

function convertToTime($totalSeconds)
{
    $soat = floor($totalSeconds / 3600);
    $minut = floor(($totalSeconds % 3600) / 60);
    $sekund = $totalSeconds % 60;

    return array($soat, $minut, $sekund);
}

// Masalan, 2 soat, 14 minut, 34 sekund ni kiriting
$totalSeconds = (2 * 3600) + (14 * 60) + 34;
$time = convertToTime($totalSeconds);
echo "{$time[0]} soat, {$time[1]} minut, {$time[2]} sekund o'tdi";
?>
<br><br>

// 4-vazifa<br>

<?php
function numberToWord($number)
{
    $digits = array(
        1 => 'bir',
        2 => 'ikki',
        3 => 'uch',
        4 => 'tort',
        5 => 'besh',
        6 => 'olti',
        7 => 'yetti',
        8 => 'sakkiz',
        9 => 'toqqiz',
        10 => 'on',
        11 => "o'n bir",
        12 => "o'n ikki",
        13 => "o'n uch",
        14 => "o'n to'rt",
        15 => "o'n besh",
        16 => "o'n olti",
        17 => "o'n yetti",
        18 => "o'n sakkiz",
        19 => "o'n to'qqiz",
        20 => "yigirma",
        30 => "o'ttiz",
        40 => "qirq",
        50 => "ellik",
        60 => "oltmish",
        70 => "yetmish",
        80 => "sakson",
        90 => "to'qson",
    );

    if ($number <= 20 || $number % 10 == 0) {
        return $digits[$number];
    } else {
        $tens = floor($number / 10) * 10;
        $ones = $number % 10;
        return $digits[$tens] . ' ' . $digits[$ones];
    }
}

echo numberToWord(68); // Output: oltmish yetti
?>
<br><br>

// 5-vazifa<br>

<?php

function ($phone) {

    $phone = "+99899999999912";

    if (preg_match('/^\+998\d{9}$/', $phone)) {
        echo "Telefon raqam";
    } else {
        echo "Telefon raqam emas";
    }

    echo "<br>";
    echo "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone number</title>
</head>

<body>
    <form action="test.php" method="post">
        <label for="phone">Telefon nomeri:</label>
        <input type="text" id="phone" name="phone" required pattern="+99899999999912" title="Faqat o`zbekistondagi telefon raqamlarini kiritish mumkin">

        <input type="submit" value="Jo'natish">
    </form>
</body>

</html>

// 6-vazifa<br><br>


<?php
function ToqSonlarYigindisi($N)
{
    $sum = 0;
    for ($i = 1; $i <= $N; $i += 2) {
        $sum += $i;
    }
    return $sum;
}

// misol uchun
echo ToqSonlarYigindisi(10);
?>