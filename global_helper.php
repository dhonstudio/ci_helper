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

/**
 * Get month in Bahasa
 *
 * @param	string	$fullDate
 * @return	string
 */
function indonesian_date(string $fullDate){
    $month = array (
	    1 => 'Januari',
	    'Februari',
	    'Maret',
	    'April',
	    'Mei',
	    'Juni',
	    'Juli',
	    'Agustus',
	    'September',
	    'Oktober',
	    'November',
	    'Desember'
    );
    
    $date = explode('-', $fullDate);
     
    return $date[2] . ' ' . $month[ (int)$date[1] ] . ' ' . $date[0];
}