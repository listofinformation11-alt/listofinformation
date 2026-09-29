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

$sql = file_get_contents('/tmp/uae_batch3.sql');
if ($sql === false) { fwrite(STDERR, "Could not read /tmp/uae_batch3.sql\n"); exit(1); }

if ($mysqli->multi_query($sql)) {
    $count = 0;
    do { $count++; if ($res = $mysqli->store_result()) { $res->free(); } } while ($mysqli->more_results() && $mysqli->next_result());
    echo "Statement groups processed: $count\n";
    if ($mysqli->errno) echo "LAST ERROR: " . $mysqli->error . "\n";
} else { echo "MULTI_QUERY FAILED: " . $mysqli->error . "\n"; exit(1); }

$r = $mysqli->query("SELECT COUNT(*) t, SUM(tab_value_1 IS NULL OR tab_value_1='') empty_cnt, SUM(tab_value_1 LIKE '%adm-grid%') grid_cnt FROM data_education_listings WHERE listing_country='4' AND is_approved=1");
$row = $r->fetch_assoc();
echo "UAE approved total={$row['t']} empty={$row['empty_cnt']} adm-grid={$row['grid_cnt']}\n";
$mysqli->close();
echo "DONE.\n";
