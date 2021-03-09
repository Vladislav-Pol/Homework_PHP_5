<?php
function validateFormData(){
    $result = true;
        if(!preg_match('/^\+375\s?\d{2}\s?\d{3}[\-\s]?\d{2}[\-\s]?\d{2}$/', $_REQUEST["phone"]))
            return false;

        if(!preg_match('/^[A-Za-z]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+@[A-Za-z0-9]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+\.[A-Za-z]{2,11}$/', $_REQUEST["email"]))
            return false;

        $_REQUEST["message"] = strip_tags($_REQUEST["message"]);
        if(!preg_match('/^.{5,250}$/', $_REQUEST["message"]))
            return false;

    return $result;
}


