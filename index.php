
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
    1. При помощи оператора if посчитать стоимость доставки почтой.
    Создадим две переменные $company = 'NovaPoshta'; $total = 0;
    - Если $company равно 'NovaPohta' то к переменной $total добавляем 100
    - Или если $company равно 'UkrPoshta' то к перменной $total добавляем 145
    - Иначе в любом другом случае к переменной $total добавляем 200
    После оператор if вывести итоговое сообщение с таким текстом (перменные подставить на свои места):
    echo '<h1>Delivery company: NovaPoshta, Total price: 10 UAH</h1>';
 */
$company = 'NovaPoshta';
$total = 0;
if ($company=='NovaPoshta'){
    $total+=100;
} elseif ($company=='UkrPoshta'){
    $total+=145;
} else {
    $total+=200;
}
echo "<h1>Delivery company:$company,  Total price: $total UAH</h1>";

/**

    2. При помощи оператора if посчитать надбавку от выработки стажа и пола.
    Создадим три переменные: $gender = 'men'; $year = 10; $sum = 0;
    - Если $gender равен 'men' и $year больше 10 и меньше 20, то прибавляем к переменной $sum 1000
    - Или если $gender равен 'women' и $year больше 10 и меньше 15, то прибавляем к переменной $sum 1500
    - Или если $year больше 20 и меньше 30, то прибавляем к переменной $sum 2500
    - Иначе прибавляем к перемнной $sum 5000;
 */
$gender = 'men';
$year = 10;
$sum = 0;
if ($gender=='men' and $year>10 and $year<20){
    $sum+=1000;
} elseif ($gender=='women' and $year>10 and $year<15){
    $sum+=1500;
} elseif ($year>20 and $year<30){
    $sum+=2500;
} else {
    $sum+=500;
}


/**

    3. При помощи оператора switch вывести сообщение преветствия для пользователя.
    Создадим переменную $username = 'Alex';
    - Для пользователя Alex выводим на экран 'Hello Alex';
    - Для пользователей Anna, Jon, Dima выводим на экран 'Hello my friends!';
    - В любом другом случае выводим на экран 'Hello new user!';
 */
$username = 'Alex';
switch ($username) {

    case 'Alex':
        echo 'Hello Alex';

        break;
    case 'Anna':
    case 'John':
    case 'Dima':
        echo 'Hello my friends!';
        break;
    default: echo 'Hello new user!';
    break;
}


// 4. Разработать калькулятор при помощи switch, для двух операций, остаток от деления и возведение в степень
$sum = 0;
$a = 2;
$b = 4;
$operation = '%';
switch ($operation) {

    case '%':
        $sum = $a % $b;
        break;

    case '**':
        $sum = $a ** $b;
        break;
}
echo '<br>';

/**5. Есть набор имейлов ['test@gmail.com', 'bob@gmail.com', 'alina@gmail.com', 'alex123@gmail.com', 'test@gmail.com', 'alina@gmail.com'];
    Посчитайте сколько раз имейл повторился в массиве, создайте итоговый массив, где ключем будет email, а значением количество раз сколько
    он повторился. Задачу решить при помощи цикла for или foreach. Итоговый массив распечатайте после всех операций.
 */
$mails=['test@gmail.com', 'bob@gmail.com', 'alina@gmail.com', 'alex123@gmail.com', 'test@gmail.com', 'alina@gmail.com'];
$mails2=[];
foreach (array_count_values($mails) as $v) {
    if ($v > 1) {
        $mails2 = array_count_values($mails);
    }
}
var_dump($mails2);
