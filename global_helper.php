<?php

/**
 * Get word between string
 *
 * @param	string	$string
 * @param	string	$start
 * @param	string	$end
 * @return	string
 */
function get_word_between(string $string, string $start, string $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}