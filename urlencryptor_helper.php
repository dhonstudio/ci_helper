<?php

/**
 * Encrypt URL
 *
 * Encrypt an url.
 * Please config your encryption_key before, in config/config.php
 * Will replacement '=','+','/' to '-','_','~'.
 *
 * @param	string/int	$value
 * @return	string
 */
function encrypt_url($value)
{
    $ci = get_instance();
    $ci->load->library("encryption");
    return str_replace(array('=','+','/'), array('-','_','~'), $ci->encryption->encrypt($value));
}

/**
 * Decrypt URL
 *
 * Decrypt an url.
 * Please config your encryption_key before, in config/config.php
 * Will replacement '-','_','~' to '=','+','/'.
 *
 * @param	string/int	$value
 * @return	string
 */
function decrypt_url($value)
{
    $ci = get_instance();
    $ci->load->library("encryption");
    return $ci->encryption->decrypt(str_replace(array('-','_','~'), array('=','+','/'), $value));
}