<?php 

require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost/gdlwebcamp');

$apiContext = new  \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AXqkJld30OkNEHiCKT5o491YasQdHoEldzlqg1nZSLAEEc2EuH8Z03zdu6Ypm8uLvZE4kL-uKe4FP9D8', //ClienteID
        'EPm3aEgKTRWx-RL8Dn63u7rCiIEpEEw1Z011TGh8OvOfUUmCv1tDkpvTxUL7FEWSFhoayYQpVUaDiWOG'  //Secret
        
    )
);

// var_dump($apiContext);