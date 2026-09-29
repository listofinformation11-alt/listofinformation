<?php
define('BASEPATH', __DIR__ . '/system/');
$config = array(); $db = array();
require __DIR__ . '/application/config/database.php';
$c = $db['default'];
$mysqli = new mysqli($c['hostname'], $c['username'], $c['password'], $c['database']);
if ($mysqli->connect_errno) { fwrite(STDERR, "CONNECT FAILED\n"); exit(1); }
$mysqli->set_charset('utf8mb4');

$ids = [523,529,535,527,533,539,526,532,538,525,531,537,522,567,524,558,530,649,639,664];
$r = $mysqli->query("SELECT listing_id, listing_title, websitelink, is_approved, LENGTH(listing_detail) ov_len, LENGTH(tab_value_1) adm_len FROM data_education_listings WHERE listing_id IN (".implode(',', $ids).") ORDER BY listing_id");
while ($row = $r->fetch_assoc()) {
    echo $row['listing_id']."\t".$row['listing_title']."\t".$row['websitelink']."\tapproved=".$row['is_approved']."\tov_len=".$row['ov_len']."\tadm_len=".$row['adm_len']."\n";
}
$mysqli->close();
