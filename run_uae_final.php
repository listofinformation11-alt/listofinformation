<?php
define('BASEPATH', __DIR__ . '/system/');
$config = array(); $db = array();
require __DIR__ . '/application/config/database.php';
$c = $db['default'];
$mysqli = new mysqli($c['hostname'], $c['username'], $c['password'], $c['database']);
if ($mysqli->connect_errno) { fwrite(STDERR, "CONNECT FAILED\n"); exit(1); }
$mysqli->set_charset('utf8mb4');
echo "Connected OK.\n";
$sql = file_get_contents('/tmp/uae_adm_final.sql');
if ($sql === false) { fwrite(STDERR, "Could not read file\n"); exit(1); }
if ($mysqli->multi_query($sql)) {
    $count = 0;
    do { $count++; if ($res = $mysqli->store_result()) { $res->free(); } } while ($mysqli->more_results() && $mysqli->next_result());
    echo "Statement groups processed: $count\n";
    if ($mysqli->errno) echo "LAST ERROR: " . $mysqli->error . "\n";
} else { echo "MULTI_QUERY FAILED: " . $mysqli->error . "\n"; exit(1); }
$r = $mysqli->query("SELECT COUNT(*) FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND tab_value_1 LIKE '%Apply via admissions office%'");
echo "still_generic=" . $r->fetch_row()[0] . "\n";
$mysqli->close();
echo "DONE.\n";
