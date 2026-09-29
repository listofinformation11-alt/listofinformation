<?php
define('BASEPATH', __DIR__ . '/system/');
$config = array(); $db = array();
require __DIR__ . '/application/config/database.php';
$c = $db['default'];
$mysqli = new mysqli($c['hostname'], $c['username'], $c['password'], $c['database']);
if ($mysqli->connect_errno) { fwrite(STDERR, "CONNECT FAILED\n"); exit(1); }
$mysqli->set_charset('utf8mb4');
$r = $mysqli->query("SELECT listing_id, listing_title, websitelink FROM data_education_listings WHERE listing_country='1' AND is_approved=1 AND (listing_detail IS NULL OR listing_detail='')");
while ($row = $r->fetch_assoc()) { echo $row['listing_id'] . "\t" . $row['listing_title'] . "\t" . $row['websitelink'] . "\n"; }
$mysqli->close();
