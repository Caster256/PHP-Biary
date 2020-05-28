<?php
	// /app/Support/Helpers/Helpers.php

	// Helper 檔案路徑
	$helpers = [
        'ajaximage.php',
        'apn.php',
        'checkLogin.php',
        'date.php',
        'date_change.php',
        'dateSelector.php',
        'downFile.php',
	    'GetSQLValueString.php',
        'ifValue.php',
        'logout.php',
        'selector.php',
        'session.php',
        'uuid.php'
	];

	// 載入 Helper 檔案
	foreach ($helpers as $helperFileName) {
	    include __DIR__ . '/' .$helperFileName;
	}
