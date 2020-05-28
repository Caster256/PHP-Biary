<?php
    function ADToRepublicOfChina($date) {
        $date_arr = explode('-', $date);
        $AD_year = $date_arr[0];
        $Rep_year = ($AD_year - 1911);
        return $Rep_year . '-' . $date_arr[1] . '-' . $date_arr[2];
    }
