<?php

$age = 16;

if (($age >= 18) and ($age <= 59))
{
    echo "Вам ещё работать и работать";
}
elseif ($age > 59)
{
    echo "Вам пора на пенсию";
}
