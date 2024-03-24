
<?php

$x = 5;
$x += 3;
echo $x;
echo "<br><hr>";
//Объявите переменную x и присвойте ей значение 5. Затем 
//увеличьте значение x на 3 и выведите результат на экран

$a = 10;
$b = 7;
echo $a / $b;
echo "<br><hr>";
//Объявите переменные a и b, присвойте им значения 10 и 7 соответственно.
//Затем выведите на экран результат деления a на b.
$name = "Алиса ";
$age = 25;
echo "Меня зовут {$name}  и мне {$age} лет";
echo "<br><hr>";
//Объявите переменные name и age и присвойте им значения "Алиса" и 25 соответственно.
//Затем выведите на экран фразу "Меня зовут Алиса и мне 25 лет".
$y = 12;
$y *= 2;
echo $y;
echo "<br><hr>";
//Объявите переменную y и присвойте ей значение 12. Затем увеличьте значение y в два раза и выведите результат на экран.
$x = 6;
$y = 4;
echo ($x * $y);
echo "<br><hr>";
//Объявите переменные x и y и присвойте им значения 6 и 4 соответственно. Затем выведите на экран результат умножения x на y.

$t = 7;
$y = 3;
echo $t + $y;
echo "<br><hr>";
//Объявите две переменные и присвойте им значения чисел 7 и 3. Выполните операцию сложения с этими переменными и выведите результат.

$u = "очень";
echo "Мне {$u} нравится программирование ";
echo "<br><hr>";
//Объявите переменную и присвойте ей строковое значение. Выполните операцию конкатенации этой строки со строкой "мне нравится программирование" и выведите результат.

$w = 3;
$w++;
echo $w;
echo "<br><hr>";
//Объявите переменную и присвойте ей значение числа. Затем выполните операцию инкремента на этой переменной и выведите результат.

$n = " нравится";
$m = " программирование ";
$v = $n . $m;
echo $v;
//Объявите две переменные и присвойте им значения строковых литералов. Выполните операцию конкатенации этих строк и выведите результат.

echo "<br><hr>";
$q = 123.7;
$f = 8;
$s = $q + $f;
echo $s;
//Объявите две переменные и присвойте им значение строковую цифру, в второй число. Выполните операцию сложения и выведите результат.
function rectangulo($base, $altura){
}
    $base = 2;
    $altura = 4;
    $area = $base * $altura; 
    echo  "<br><hr>";
    echo " плошядь {$area} ";
echo "<br><hr>";
//Написать функцию для нахождения площади прямоугольника

$number = cal_days_in_month(CAL_GREGORIAN, 8, 2023);
echo "Всего {$number} дней в Августе 2023 года";
echo  "<br><hr>";
//Вывести количество дней в любом месяце (на выбор)

function my() {
    return "Hello World!";
}
echo my();
//Написать функцию аналогичную работе “echo” используя замыкание. Вывод текста на экран должен быть возвращаться функцией (само echo/print не используем)

var_dump(date_diff(date_create(datetime: '2024-01-10'), date_create(datetime:'2024-01-05')));
echo "<br><hr>";
//Посчитать количество дней до нового года

$string = "";
$strtolower = strtolower($string);
var_dump($strtolower);
echo "<br><hr>";
//Вычислить разницу между двумя датами


function is($g){}
$g = "я люблю обучаться PHP";
$hellov = "Hello World!";
$replace = str_replace(search: "PHP", replace: "World!", $g);
    var_dump($g);
   //Написать функцию, которая которая на вход принимает исходное предложение и вторым аргументом любую строку. Далее внутри функции найти слово PHP и заменить его на слово со второго аргумента и вернуть результат выполнения функции.
$string = "я люблю обучаться PHP";
    $strlen = strlen($string);
var_dump($strlen);
echo "<br><hr>";
//Посчитать количество всех символов исходной строки

$tr = "я люблю обучаться PHP";
$strtolower = strtolower($tr);
var_dump($strtolower);
//Привести все слова в исходном предложении к верхнему регистру
echo "<br><hr>";
echo str_word_count("я люблю обучаться PHP");
//Посчитать количество всех символов исходной строки.
Написать функцию, которая принимает на вход массив, а возвращает элементы массива отсортированные по возрастанию
/$exp = explode(separator:"day", $rep);
//var_dump($exp);
//З массивы
$array = [
    "name" => "Fred",
    "remove" => True,
    "additional_params" => [
    "is_married" => false,
    "country" => "France",
    "born" => "10.09.1982"
]
];

unset($array["additional_params"]);
var_dump($array);
echo "<br><hr>";
//Удалить второй элемент из массива.
$c= date("Y");
$y= date("Y",strtotime("1982-09-10"));
echo $c-$y;
echo "<br><hr>";
//Найти возраст пользователя (на сегодняшний день)
print_r(array_keys($array));
//Отсортировать массив по ключу (Использовать встроенные функции, без циклов!)

unset($array["country"]);
var_dump($array);
$arraynew = ["country" => "France",
"capital" => "Paris",
"the time zone " => "+1"];
$ar = array_replace($array, $arraynew);
print_r($ar);
echo "<br><hr>";
//Добавить информацию о стране пользователя используя новый массив (название, столица, часовой пояс и пр.) и поместить данный массив вместо значения country 

$chil = ["child” => null"];
$newarray = array_merge($array, $chil);
var_dump($newarray);
echo "<br><hr>";
//Объединить текущий массив с массивом [“child” => null] (встроенная функция объединения из занятия)
$born = "10.09.1982";
$bornn = explode( "." , $born);
$newArr = [];
for ($i = 0; $i < count($bornn); $i++) {
if ($i == 0) { $newArr["day"] = $bornn[$i]; }
if ($i == 1) { $newArr["month"] = $bornn[$i]; }
if ($i == 2) { $newArr["year"] = $bornn[$i]; }
}
var_dump($newArr);





//ДЗ по циклам
//Написать функцию, которая принимает на вход массив из целых чисел и вычисляет их сумму
$arrayck = [2, 4, 6, 8];
echo array_sum($arrayck);
//Написать функцию, которая принимает на вход массив первым аргументом и вторым аргументом что-то строковое. Проверить содержат ли элементы данного массива это число, завершить выполнение массива, если да.
$t = 10
$i = ["day","month"];
if ($i = $t);
else break;
$array = [8, 12, 7, 11, 77, 5];
//Написать функцию, которая принимает на вход массив, а возвращает элементы массива отсортированные по возрастанию
function order($array, $ascOrDesc = 'asc') {
    switch ($ascOrDesc) {
        case 'asc':
            sort($array);
            break;
        }
    }

//ДЗ регулярки
$s = "Я люблю PHP";
$str = str_replace(" ", "", $s); 
echo $str;
echo "<br><hr>";
//Удалить пробелы из исходной  строки

$tr = str_replace(" PHP", "Java", $s); 
echo $tr;
echo "<br><hr>";
//Заменить “PHP” на другую строку
echo preg_match( "/PHP/" ,  $s );
echo "<br><hr>";
$r = str_replace("люблю", "", $s); 
echo $r;
//Удалить второе слово из исходной строки
echo "<br><hr>";
$stri = "+375 29 94 112 91";
stri = "+375-29-93-101-91";
var_dump(preg_match("/^\+?([0-9]{3})-[0-9]{2}-[0-9]{2}-[0-9]{3}-[0-9]{2}/", $stri));
echo "<br><hr>";
Написать регулярку для проверки моб номера телефона для РБ (+375…)
$st = "/catalog/125/item-12/tovar-name";
var_dump(preg_match("/([\da-z\.-]+).([a-z\.]{2,6})([\/\w\.-]*)*\/?$/", $st));
Регулярное выражение для проверки УРЛа вида /catalog/125/item-12/tovar-name
Урл адрес должен состоять из 4 выражений отделенными слешами, могут содержать спец символы -_№. Количество цифр может быть любым
    


Формы
<?php
?>
<form action="Untitled-3.php" method="GET">
<fieldset>
<legend>Фамилия</legend>
<p>
<input name= "lastName" type="text" pattern="[A-Za-zА-Яа-яЁё]{3,}">

</p>

</fieldset>
<fieldset>
<legend>Имя</legend>
<p>
<input name= "firstName" type="text" pattern="[A-Za-zА-Яа-яЁё]{3,}">

</p>

</fieldset>
<fieldset>
<legend>Номер телефона,</legend>

<p><input name= "tel" type="tel" pattern="[0-9]-[0-9]{3}-[0-9]{3}"></p>

</fieldset>
<fieldset>
<legend>Адрес</legend>
<p>
<input name= "adress" type="text"pattern="[A-Za-zА-Яа-яЁё \s 0-9]{3,}">

</p>

</fieldset>
<fieldset>
<legend>Дата рождения</legend>
<p>
<input name="date" type="date"/>
</p>

</p>

</fieldset>
<fieldset>
<legend> Email</legend>
<p>
<input name="emeil" type="email"/>
</p>
</fieldset>
<p>
<input type="submit"value= "Отправить">
</p>
</form>
\\Untitled-3.php
<?php
var_dump($_GET);
echo "<br><hr>";

//Сохранить все данные анкеты в массив

$c= date("Y");
$y= date("Y",strtotime($_GET["date"]));
echo $c-$y;
echo "<br><hr>";
//Написать функцию и вывести на экран возраст согласно даты рождения с анкеты
$born = $_GET["adress"];
$bornn = explode( " " , $born);
$newArr = [];
for ($i = 0; $i < count($bornn); $i++) {
    if ($i == 0) { $newArr["country"] = $bornn[$i]; }
    if ($i == 1) { $newArr["city"] = $bornn[$i]; }
    if ($i == 2) { $newArr["street"] = $bornn[$i]; }
    }

var_dump($newArr);

//Написать функцию, которая преобразует строку адреса в массив по типу:

