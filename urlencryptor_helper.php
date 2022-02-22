<?php

function encrypt_url($value)
{
    $ci = get_instance();
    $ci->load->library("encryption");
    return str_replace(array('=','+','/'), array('-','_','~'), $ci->encryption->encrypt($value));
}

function decrypt_url($value)
{
    $ci = get_instance();
    $ci->load->library("encryption");
    return $ci->encryption->decrypt(str_replace(array('-','_','~'), array('=','+','/'), $value));
}