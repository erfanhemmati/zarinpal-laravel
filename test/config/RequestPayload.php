<?php

require_once 'ZarinpalConfig.php';

class RequestPayload
{
    const AMOUNT = 5000000;
    const DESCRIPTION = 'Test payment';
    const CALLBACK_URL = ZarinpalConfig::SERVER['SCHEME'] . '://' . ZarinpalConfig::SERVER['HOST'] . ':' . ZarinpalConfig::SERVER['PORT'] . '/Verify.php';
}
