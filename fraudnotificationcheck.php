<?php

if ($_POST['message_type'] == 'FRAUD_STATUS_CHANGED') {

    $smsArray = array();
    foreach ($_POST as $k => $v) {
    $smsArray[$k] = $v;
    }

    // Validate the Hash
    $secrectKey = ""; // 2Checkout Secret Word
    $accountSID = 1303908; // 2Checkout account number
    $saleID = $smsArray['sale_id'];
    $invoiceId = $smsArray['invoice_id'];
    $md5String = strtoupper(md5($saleID . $accountSID . $invoiceId . $secrectKey));

    if ($md5String != $smsArray['md5_hash']) {
        die('Hash Incorrect');
    }

    switch ($smsArray['fraud_status']) {
        case 'pass':
            // make availabe the use of product of avobe invoice id 
            break;
        case 'fail':
            // take some task against the purchase
            break;
        case 'wait':
            // wait for additional fraud check
            break;
    }
}
