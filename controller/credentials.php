<?php
/** OC Transpo API credentials **/
// Note that the keys are set as system variables so I can track this file in the repo.
$OC_TRANSPO_APP_ID = getenv('OC_TRANSPO_APP_ID');
$OC_TRANSPO_APP_KEY = getenv('OC_TRANSPO_APP_KEY');

/** MySQL DB credentials **/
$DB_PASS = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$DB_USER = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$DB_URL = getenv('OPENSHIFT_MYSQL_DB_URL');
$DB_NAME = getenv('OPENSHIFT_GEAR_NAME');

/** Google Ads **/
$GADS_CLIENT_ID = getenv('GADS_CLIENT_ID');

/** Google Analytics credentials **/
$GANA_CLIENT_ID = getenv('GANA_CLIENT_ID');

?>
