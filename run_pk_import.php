<?php
define('BASEPATH', __DIR__ . '/system/');
$config = array();
$db = array();
require __DIR__ . '/application/config/database.php';
$c = $db['default'];

$mysqli = new mysqli($c['hostname'], $c['username'], $c['password'], $c['database']);
if ($mysqli->connect_errno) { fwrite(STDERR, "CONNECT FAILED: " . $mysqli->connect_error . "\n"); exit(1); }
$mysqli->set_charset('utf8mb4');
echo "Connected OK.\n";

$sql = file_get_contents('/tmp/pk_live_batch1.sql');
if ($sql === false) { fwrite(STDERR, "Could not read /tmp/pk_live_batch1.sql\n"); exit(1); }

if ($mysqli->multi_query($sql)) {
    $count = 0;
    do { $count++; if ($res = $mysqli->store_result()) { $res->free(); } } while ($mysqli->more_results() && $mysqli->next_result());
    echo "Statement groups processed: $count\n";
    if ($mysqli->errno) echo "LAST ERROR: " . $mysqli->error . "\n";
} else { echo "MULTI_QUERY FAILED: " . $mysqli->error . "\n"; exit(1); }

$r = $mysqli->query("SELECT COUNT(*) t, SUM(is_approved=1) appr, SUM(is_approved=1 AND (listing_detail IS NULL OR listing_detail='')) empty_ov, SUM(is_approved=1 AND (tab_value_1 IS NULL OR tab_value_1='')) empty_adm FROM data_education_listings WHERE listing_country='1'");
$row = $r->fetch_assoc();
echo "PK total={$row['t']} approved={$row['appr']} empty_overview={$row['empty_ov']} empty_admissions={$row['empty_adm']}\n";
$mysqli->close();
echo "DONE.\n";
