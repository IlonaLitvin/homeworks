<?php
// НЕДОДЕЛАН

$age = "string";

//if (($age < 0) or (is_numeric($age)) == FALSE)
if ($age < 0)
{
    echo "Неизвестный возраст";
}
elseif(($age >= 18) and ($age <= 59))
{
    echo "Вам ещё работать и работать";
}
elseif ($age > 59)
{
    echo "Вам пора на пенсию";
}
elseif (($age >= 0) and ($age <= 17))
{
    echo "Вам еще рано работать";
}

//var_dump(is_numeric("String"));
//    var_dump(gettype("String"));


