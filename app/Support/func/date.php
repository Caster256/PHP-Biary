<?php
//智慧財產權宣告年，Intellectual Property，$year：開始年
function i_p_year($year) {
    $now_year = date('Y');
    if($year >= $now_year) {
        $str = $year;
    } else {
        $str = $year . ' ~ ' . $now_year;
    }

    return $str;
}
