<?php


function validateName($name)
{
    if ($name === '')
        return false;
    else
        return true;
}

function validateNumber($number)
{
    if ($number === '')
        return false;
    else
        return true;
}

function validateEmail($email)
{
    if ($email === '')
        return false;
    else
        return true;
}

function validateSubject($subject)
{
    if ($subject === '')
        return false;
    else
        return true;
}

function validateMessage($message)
{
    if ($message === '')
        return false;
    else
        return true;
}