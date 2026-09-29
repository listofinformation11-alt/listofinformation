<?php
// One-off script: applies uk_batch1.sql using the site's own existing DB config.
// Never prints credentials. Run via CLI: php run_uk_import.php
define('BASEPATH', __DIR__ . '/system/');
$config = array();
$db = array();
require __DIR__ . '/application/config/database.php';
$c = $db['default'];

$mysqli = new mysqli($c['hostname'], $c['username'], $c['password'], $c['database']);
if ($mysqli->connect_errno) {
    fwrite(STDERR, "CONNECT FAILED: " . $mysqli->connect_error . "\n");
    exit(1);
}
$mysqli->set_charset('utf8mb4');
echo "Connected OK.\n";

$sql = file_get_contents('/tmp/uk_batch1.sql');
if ($sql === false) {
    fwrite(STDERR, "Could not read /tmp/uk_batch1.sql\n");
    exit(1);
}

if ($mysqli->multi_query($sql)) {
    $count = 0;
    do {
        $count++;
        if ($res = $mysqli->store_result()) {
            $res->free();
        }
    } while ($mysqli->more_results() && $mysqli->next_result());
    echo "Statement groups processed: $count\n";
    if ($mysqli->errno) {
        echo "LAST ERROR: " . $mysqli->error . "\n";
    }
} else {
    echo "MULTI_QUERY FAILED: " . $mysqli->error . "\n";
    exit(1);
}

$r = $mysqli->query("SELECT COUNT(*) t, SUM(listing_detail LIKE '%Key facts%') ov, SUM(tab_value_1 LIKE '%adm-grid%') adm, SUM(admission_url<>'') url, SUM(is_approved=1) appr FROM data_education_listings WHERE listing_country='6'");
$row = $r->fetch_assoc();
echo "UK listings total={$row['t']} overview={$row['ov']} admissions={$row['adm']} admission_url={$row['url']} approved={$row['appr']}\n";
$mysqli->close();
echo "DONE.\n";
