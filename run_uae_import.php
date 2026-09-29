<?php
// One-off script: applies uae_batch1.sql using the site's own existing DB config.
// Never prints credentials. Run via CLI: php run_uae_import.php
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
echo "Connected OK.\n";

$sql = file_get_contents('/tmp/uae_batch1.sql');
if ($sql === false) {
    fwrite(STDERR, "Could not read /tmp/uae_batch1.sql\n");
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
    echo "Executed statements batch OK. Statement groups processed: $count\n";
    if ($mysqli->errno) {
        echo "LAST ERROR: " . $mysqli->error . "\n";
    }
} else {
    echo "MULTI_QUERY FAILED: " . $mysqli->error . "\n";
    exit(1);
}

$r = $mysqli->query("SELECT listing_id, LEFT(listing_detail,40) AS ov FROM data_education_listings WHERE listing_id=522");
$row = $r->fetch_assoc();
echo "Verify 522 overview starts with: " . $row['ov'] . "\n";

$r2 = $mysqli->query("SELECT COUNT(*) c FROM data_education_listings WHERE listing_country=4 AND is_approved=0");
$row2 = $r2->fetch_assoc();
echo "Flagged (is_approved=0) UAE listings: " . $row2['c'] . "\n";

$mysqli->close();
echo "DONE.\n";
