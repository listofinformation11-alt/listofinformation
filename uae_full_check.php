<?php
define('BASEPATH', __DIR__ . '/system/');
$config = array(); $db = array();
require __DIR__ . '/application/config/database.php';
$c = $db['default'];
$mysqli = new mysqli($c['hostname'], $c['username'], $c['password'], $c['database']);
if ($mysqli->connect_errno) { fwrite(STDERR, "CONNECT FAILED\n"); exit(1); }
$mysqli->set_charset('utf8mb4');

$r = $mysqli->query("SELECT COUNT(*) t, SUM(is_approved=1) appr FROM data_education_listings WHERE listing_country='4'");
$row = $r->fetch_assoc();
echo "UAE total={$row['t']} approved={$row['appr']}\n";

$r = $mysqli->query("SELECT COUNT(*) FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND (listing_detail IS NULL OR listing_detail='')");
echo "empty_overview=" . $r->fetch_row()[0] . "\n";
$r = $mysqli->query("SELECT COUNT(*) FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND (tab_value_1 IS NULL OR tab_value_1='')");
echo "empty_admissions=" . $r->fetch_row()[0] . "\n";
$r = $mysqli->query("SELECT COUNT(*) FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND (admission_url IS NULL OR admission_url='')");
echo "empty_admission_url=" . $r->fetch_row()[0] . "\n";
$r = $mysqli->query("SELECT COUNT(*) FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND tab_value_1 LIKE '%Apply via admissions office%'");
echo "still_generic=" . $r->fetch_row()[0] . "\n";
$r = $mysqli->query("SELECT COUNT(*) FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND listing_detail NOT LIKE '%Key facts%'");
echo "no_key_facts_heading=" . $r->fetch_row()[0] . "\n";

echo "--- empty overview rows ---\n";
$r = $mysqli->query("SELECT listing_id, listing_title, websitelink FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND (listing_detail IS NULL OR listing_detail='')");
while ($row = $r->fetch_assoc()) echo $row['listing_id']."\t".$row['listing_title']."\t".$row['websitelink']."\n";

echo "--- empty admissions rows ---\n";
$r = $mysqli->query("SELECT listing_id, listing_title, websitelink FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND (tab_value_1 IS NULL OR tab_value_1='')");
while ($row = $r->fetch_assoc()) echo $row['listing_id']."\t".$row['listing_title']."\t".$row['websitelink']."\n";

echo "--- still generic (Apply via admissions office) rows ---\n";
$r = $mysqli->query("SELECT listing_id, listing_title, websitelink FROM data_education_listings WHERE listing_country='4' AND is_approved=1 AND tab_value_1 LIKE '%Apply via admissions office%'");
while ($row = $r->fetch_assoc()) echo $row['listing_id']."\t".$row['listing_title']."\t".$row['websitelink']."\n";

echo "--- duplicate websites ---\n";
$r = $mysqli->query("SELECT websitelink, COUNT(*) c, GROUP_CONCAT(listing_id,':',listing_title SEPARATOR ' | ') g FROM data_education_listings WHERE listing_country='4' AND websitelink<>'' AND websitelink IS NOT NULL GROUP BY websitelink HAVING c>1");
while ($row = $r->fetch_assoc()) echo $row['websitelink']."\t".$row['c']."\t".$row['g']."\n";

$mysqli->close();
