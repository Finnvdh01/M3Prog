<?php

function convertCurrency($amount, $fromCurrency, $toCurrency)
{
    echo $amount,
    "<br>",
     $fromCurrency,
     "<br>",
     $toCurrency;
}

function sendEmail($to, $from, $subject, $message)
{
    echo $to,
    "<br>",
    $subject,
    "<br>",
    $message,
    "<br>",
    $from;
}

function generateRandomString($length){
    echo $length;
}
    

function calculateArea($length, $width)
{
    echo $length,"<br>", $width, "<br>";
}

convertCurrency(100, "euro", "yen");

generateRandomString(10);

calculateArea(10, 20);

sendEmail("leraar@college.nl,","student@college.nl","huiswerk","voor volgende week");