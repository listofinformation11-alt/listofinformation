<style>
.sl-wrap{max-width:1180px;margin:0 auto;padding:20px 15px 50px;}
.sl-hero{position:relative;border-radius:12px;overflow:hidden;background:#e9edf0;margin-bottom:18px;}
.sl-hero-img{width:100%;height:340px;object-fit:cover;display:block;background:#e9edf0;}
.sl-hero-overlay{position:absolute;left:0;right:0;bottom:0;padding:22px 24px;background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,.72) 100%);}
.sl-badge{display:inline-block;background:#13a2b7;color:#fff;font-size:12px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;padding:4px 10px;border-radius:20px;margin-bottom:8px;}
.sl-hero-title{color:#fff;font-size:28px;font-weight:700;margin:0 0 6px;line-height:1.2;}
.sl-hero-meta{color:#e8f4f6;font-size:14px;display:flex;flex-wrap:wrap;gap:14px;align-items:center;}
.sl-hero-meta span{display:inline-flex;align-items:center;gap:6px;}
.sl-rating{display:inline-flex;align-items:center;gap:6px;background:#fff6e0;padding:3px 10px;border-radius:20px;color:#8a6d1f;font-size:13px;}
.sl-rating strong{color:#d99a1f;}
.sl-header{display:flex;gap:18px;align-items:flex-start;margin-bottom:18px;padding:20px;background:#fff;border:1px solid #e7ebee;border-radius:12px;}
.sl-logo-box{width:130px;height:130px;flex:0 0 130px;border:1px solid #e7ebee;border-radius:10px;background:#fff;display:flex;align-items:center;justify-content:center;overflow:hidden;padding:10px;}
.sl-logo-box img{max-width:100%;max-height:100%;object-fit:contain;display:block;}
.sl-header-info{flex:1 1 0;min-width:0;padding-top:2px;}
.sl-header-title{font-size:26px;font-weight:700;color:#1c2b33;margin:6px 0 8px;line-height:1.25;}
.sl-header-meta{color:#5a6871;font-size:14px;display:flex;flex-wrap:wrap;gap:14px;align-items:center;}
.sl-header-meta span{display:inline-flex;align-items:center;gap:6px;}
.sl-header-meta .fa-map-marker{color:#13a2b7;}
.sl-actions{display:flex;gap:12px;margin:16px 0 22px;flex-wrap:wrap;}
.sl-btn{display:inline-block;padding:11px 24px;border-radius:6px;font-weight:600;font-size:14px;text-decoration:none;transition:opacity .15s;}
.sl-btn:hover{opacity:.88;text-decoration:none;}
.sl-btn-primary{background:#0c5d69;color:#fff;}
.sl-btn-outline{background:#fff;color:#0c5d69;border:1.5px solid #0c5d69;}
.sl-grid{display:flex;gap:24px;align-items:flex-start;}
.sl-main{flex:1 1 0;min-width:0;}
.sl-side{flex:0 0 300px;}
.sl-card{background:#fff;border:1px solid #e7ebee;border-radius:10px;padding:22px 24px;margin-bottom:20px;}
.sl-card h2{font-size:19px;font-weight:700;color:#1c2b33;margin:0 0 16px;}
.adm-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:10px;margin:12px 0 6px;}.adm-k{background:#f4f6fb;border:1px solid #e3e7f0;border-radius:10px;padding:10px 12px;}.adm-k b{display:block;font-size:12px;color:#5b647a;font-weight:500;}.adm-k span{font-size:14px;font-weight:600;color:#1c2b33;}.adm-tag{display:inline-block;background:#e7f6ee;color:#0f9d58;font-size:11.5px;padding:2px 9px;border-radius:99px;font-weight:600;margin-left:6px;vertical-align:middle;}.sl-card h3{font-size:17px;margin:20px 0 8px;}.sl-card ul,.sl-card ol{margin:6px 0 10px;padding-left:22px;}
.sl-apply{display:flex;flex-wrap:wrap;align-items:center;gap:14px;background:linear-gradient(135deg,#2563eb,#7c3aed);color:#fff;border-radius:12px;padding:16px 20px;margin-top:20px;}.sl-apply div{flex:1;min-width:220px;}.sl-apply strong{display:block;font-size:16px;}.sl-apply small{opacity:.9;font-size:12.5px;}.sl-apply-btn{background:#fff;color:#1d3fbf;font-weight:600;text-decoration:none;padding:10px 18px;border-radius:9px;font-size:14px;white-space:nowrap;}
.sl-video-wrap{position:relative;padding-bottom:56.25%;height:0;overflow:hidden;border-radius:8px;}
.sl-video-wrap iframe{position:absolute;top:0;left:0;width:100%;height:100%;border:0;}
.sl-facts{display:grid;grid-template-columns:1fr 1fr;gap:14px 20px;list-style:none;margin:0;padding:0;}
.sl-facts li{display:flex;gap:10px;align-items:flex-start;font-size:14px;color:#333;line-height:1.5;}
.sl-facts li i{color:#13a2b7;width:18px;text-align:center;margin-top:2px;flex-shrink:0;}
.sl-facts li strong{display:block;font-size:12px;color:#8a949c;font-weight:600;text-transform:uppercase;letter-spacing:.02em;margin-bottom:1px;}
.sl-facts li a{color:#0c5d69;word-break:break-word;}
.sl-desc p{font-size:15px;line-height:1.75;color:#444;margin:0;}
.sl-map iframe{width:100%;height:280px;border:0;border-radius:8px;display:block;}
.sl-tabs{list-style:none;display:flex;gap:6px;flex-wrap:wrap;margin:0 0 16px;padding:0;border-bottom:1px solid #e7ebee;}
.sl-tabs li{padding:9px 16px;font-size:14px;font-weight:600;color:#8a949c;cursor:pointer;border-bottom:2px solid transparent;}
.sl-tabs li.active{color:#0c5d69;border-bottom-color:#0c5d69;}
.sl-tabcontent{display:none;}
.sl-tabcontent.active{display:block;}
.sl-side-box{background:#fff;border:1px solid #e7ebee;border-radius:10px;padding:18px;margin-bottom:20px;}
.sl-side-box > img{width:100%;border-radius:6px;display:block;}
.sl-side-title{font-size:15px;font-weight:700;color:#1c2b33;margin:0 0 14px;}
.sl-related-item{display:flex;gap:10px;align-items:center;padding:8px 0;border-bottom:1px solid #f0f2f4;}
.sl-related-item:last-child{border-bottom:none;}
.sl-related-thumb{width:56px;height:56px;border-radius:6px;object-fit:cover;flex-shrink:0;background:#eee;}
.sl-related-info a{font-size:13.5px;font-weight:600;color:#1c2b33;line-height:1.35;text-decoration:none;}
.sl-related-info a:hover{color:#0c5d69;}
.sl-related-info span{display:block;font-size:12px;color:#8a949c;margin-top:2px;}
.sidebarposts .post-link{font-size:13.5px;font-weight:600;color:#1c2b33;text-decoration:none;line-height:1.4;display:block;padding:8px 0;border-bottom:1px solid #f0f2f4;}
.sidebarposts .container-popularpost .row:last-child .post-link{border-bottom:none;}
.sidebartitle{font-size:15px;font-weight:700;color:#1c2b33;margin:0 0 6px;}
@media(max-width:860px){
.sl-grid{flex-direction:column;}
.sl-side{flex:0 0 auto;width:100%;}
.sl-facts{grid-template-columns:1fr;}
.sl-header{padding:14px;gap:12px;}
.sl-logo-box{width:84px;height:84px;flex:0 0 84px;}
.sl-header-title{font-size:19px;}
}
.sl-breadcrumb{font-size:13px;color:#777;max-width:1180px;margin:14px auto 0;padding:0 15px;}
.sl-breadcrumb a{color:#0c5d69;text-decoration:none;}
.sl-breadcrumb a:hover{text-decoration:underline;}
.sl-breadcrumb .sep{margin:0 6px;color:#bbb;}
.sl-claim{display:inline-flex;align-items:center;gap:6px;background:#ffc107;color:#1a1a1a;border:1.5px solid #e0a800;font-size:13px;font-weight:600;padding:9px 16px;border-radius:6px;text-decoration:none;margin-left:auto;}
.sl-claim:hover{background:#e0a800;border-color:#c69500;color:#1a1a1a;text-decoration:none;}
</style>

<?php
$listing_thumbnail = (isset($listingdata['listing_thumbnail']) && $listingdata['listing_thumbnail'] != '') ? $listingdata['listing_thumbnail'] : 'defaultlisting.png';
$listing_fullimage = (isset($listingdata['listing_fullimage']) && $listingdata['listing_fullimage'] != '') ? $listingdata['listing_fullimage'] : $listing_thumbnail;
$cover_image = base_url() . 'assets/images/' . $listing_fullimage;

// Structured data (JSON-LD) so Google can understand this listing as an entity
$sd_type_map = array('9' => 'CollegeOrUniversity', '10' => 'CollegeOrUniversity', '11' => 'School', '13' => 'Hotel', '14' => 'Hotel', '15' => 'Hotel', '16' => 'Physician', '17' => 'Hospital', '18' => 'Pharmacy');
$sd_cat = isset($listingdata['cat_id']) ? (string)$listingdata['cat_id'] : '';
$sd = array(
    '@context' => 'https://schema.org',
    '@type' => isset($sd_type_map[$sd_cat]) ? $sd_type_map[$sd_cat] : 'Organization',
    'name' => isset($listingdata['listing_title']) ? $listingdata['listing_title'] : '',
    'url' => base_url() . 'listing/' . (isset($listingslug) ? $listingslug : ''),
    'image' => $cover_image
);
$sd_desc = isset($listingdata['listing_detail']) ? trim(strip_tags($listingdata['listing_detail'])) : '';
if ($sd_desc !== '') { $sd['description'] = $sd_desc; }
if (isset($listingdata['address']) && trim($listingdata['address']) != '') {
    $sd['address'] = array('@type' => 'PostalAddress', 'streetAddress' => trim($listingdata['address']));
}
if (isset($listingdata['websitelink']) && trim($listingdata['websitelink']) != '') {
    $sd_site = trim($listingdata['websitelink']);
    if (!preg_match('#^https?://#i', $sd_site)) { $sd_site = 'http://' . $sd_site; }
    $sd['sameAs'] = array($sd_site);
}
if (isset($listingdata['founded']) && preg_match('/^\d{4}$/', trim($listingdata['founded']))) {
    $sd['foundingDate'] = trim($listingdata['founded']);
}
if (isset($reviewstats['review_count']) && (int)$reviewstats['review_count'] > 0 && $reviewstats['avg_rating'] !== null) {
    $sd['aggregateRating'] = array('@type' => 'AggregateRating', 'ratingValue' => round((float)$reviewstats['avg_rating'], 1), 'reviewCount' => (int)$reviewstats['review_count'], 'bestRating' => 5, 'worstRating' => 1);
}
echo '<script type="application/ld+json">' . json_encode($sd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) . '</script>' . "\n";

$cat_label = (isset($categorydetail[0]['cat_title']) && $categorydetail[0]['cat_title'] != '') ? $categorydetail[0]['cat_title'] : 'Listing';

$has_rating = (isset($listingdata['listing_review_totalreviews']) && $listingdata['listing_review_totalreviews'] != '' && $listingdata['listing_review_totalreviews'] > 0);

// Website button - only render when a real link exists
$website_url = '';
if (isset($listingdata['websitelink']) && trim($listingdata['websitelink']) != '') {
    $website_url = $listingdata['websitelink'];
    if (!preg_match('/^https?:\/\//i', $website_url)) {
        $website_url = 'http://' . $website_url;
    }
}
$website_nofollow = (isset($listingdata['isFollow']) && $listingdata['isFollow'] == 1);

// Enquire button - graceful fallback chain: listing email -> listing phone -> site contact page
$enquire_url = '';
$enquire_label = 'Enquire';
if (isset($listingdata['email']) && trim($listingdata['email']) != '') {
    $enquire_url = 'mailto:' . $listingdata['email'] . '?subject=' . rawurlencode('Enquiry about ' . $listingdata['listing_title']);
} elseif (isset($listingdata['phonenumber']) && trim($listingdata['phonenumber']) != '') {
    $enquire_url = 'tel:' . preg_replace('/\s+/', '', $listingdata['phonenumber']);
    $enquire_label = 'Call to Enquire';
} else {
    $enquire_url = base_url() . 'contact-us';
}

$has_map = (isset($listingdata['listing_cordinate_latitude']) && isset($listingdata['listing_cordinate_longitude'])
    && trim($listingdata['listing_cordinate_latitude']) != '' && trim($listingdata['listing_cordinate_longitude']) != ''
    && $listingdata['listing_cordinate_latitude'] != '0' && $listingdata['listing_cordinate_longitude'] != '0');

// Build a generic, no-API-key map for the sidebar - works for any city/any country/any listing type.
$__map_city_name = isset($map_city_name) ? $map_city_name : '';
$__map_country_name = isset($map_country_name) ? $map_country_name : '';
$map_location_parts = array();
if (isset($listingdata['address']) && trim($listingdata['address']) != '') {
    $map_location_parts[] = trim($listingdata['address']);
}
$__map_joined_so_far = implode(' ', $map_location_parts);
if ($__map_city_name != '' && stripos($__map_joined_so_far, $__map_city_name) === false) {
    $map_location_parts[] = $__map_city_name;
}
$__map_joined_so_far = implode(' ', $map_location_parts);
if ($__map_country_name != '' && stripos($__map_joined_so_far, $__map_country_name) === false) {
    $map_location_parts[] = $__map_country_name;
}
$map_location_text = implode(', ', $map_location_parts);

if ($has_map) {
    $map_embed_src = 'https://www.google.com/maps?q=' . $listingdata['listing_cordinate_latitude'] . ',' . $listingdata['listing_cordinate_longitude'] . '&output=embed';
} elseif ($map_location_text != '') {
    $map_embed_src = 'https://www.google.com/maps?q=' . rawurlencode($map_location_text) . '&output=embed';
} else {
    $map_embed_src = '';
}

$adimage = (isset($listingdata['adimage']) && $listingdata['adimage'] != '' && $listingdata['adimage'] != 'defaultlisting.png') ? $listingdata['adimage'] : '';
?>

<div class="sl-wrap">
    <nav class="sl-breadcrumb" aria-label="breadcrumb">
        <a href="<?php echo base_url(); ?>">Home</a>
        <span class="sep">/</span>
        <?php if (isset($childcategorydetail[0]['slug']) && trim($childcategorydetail[0]['slug']) != '') { ?>
        <a href="<?php echo base_url() . $childcategorydetail[0]['slug']; ?>"><?php echo htmlspecialchars(isset($childcategorydetail[0]['cat_title']) ? $childcategorydetail[0]['cat_title'] : $cat_label); ?></a>
        <?php } else { ?>
        <span><?php echo htmlspecialchars($cat_label); ?></span>
        <?php } ?>
        <span class="sep">/</span>
        <span><?php echo htmlspecialchars($listingdata['listing_title']); ?></span>
    </nav>


    <div class="sl-header">
<div class="sl-logo-box">
<img src="<?php echo base_url() . 'assets/images/' . $listing_thumbnail; ?>" alt="<?php echo htmlspecialchars($listingdata['listing_title']); ?>" onerror="this.src='<?php echo base_url(); ?>assets/images/placeholder.jpg'">
</div>
<div class="sl-header-info">
<span class="sl-badge"><?php echo htmlspecialchars($cat_label); ?></span>
<h1 class="sl-header-title"><?php echo $listingdata['listing_title']; ?></h1>
<div class="sl-header-meta">
<?php if (isset($listingdata['listing_city']) && $listingdata['listing_city'] != '' && !is_numeric($listingdata['listing_city'])) { ?>
<span><i class="fa fa-map-marker"></i> <?php echo $listingdata['listing_city']; ?></span>
<?php } ?>
<?php if ($has_rating) { ?>
<span class="sl-rating"><strong>&#9733; <?php echo round($listingdata['listing_review_reviewspercent'], 1); ?></strong> (<?php echo $listingdata['listing_review_totalreviews']; ?> reviews)</span>
<?php } ?>
</div>
</div>
</div>

<div class="sl-actions">
        <?php if ($website_url != '') { ?>
        <a class="sl-btn sl-btn-primary" target="_blank" <?php echo $website_nofollow ? "rel='nofollow noopener'" : "rel='noopener'"; ?> href="<?php echo $website_url; ?>">Visit Website</a>
        <?php } ?>
        <button type="button" class="sl-btn sl-btn-outline" onclick="slOpenEnquireModal()">Enquire Now</button>
        <button type="button" class="sl-claim" onclick="slOpenClaimModal()" title="Is this your business? Get in touch to claim or update this listing.">Is this your business? Claim / Suggest an Edit</button>
    </div>

    <div class="sl-grid">
        <div class="sl-main">

            <?php
            $tabtitles = array('Overview');
            if (isset($categorydetail[0]['tabs']) && trim($categorydetail[0]['tabs']) != '') {
                $extratabs = explode(",", $categorydetail[0]['tabs']);
                foreach ($extratabs as $et) {
                    $et = trim($et);
                    if ($et != '') { $tabtitles[] = $et; }
                }
            }
            if (count($tabtitles) > 1) {
            ?>
            <ul class="sl-tabs">
                <?php foreach ($tabtitles as $ti => $tt) { ?>
                <li class="<?php echo $ti == 0 ? 'active' : ''; ?>" data-tab="sltab<?php echo $ti; ?>"><?php echo $ti == 0 ? 'Overview' : htmlspecialchars($tt); ?></li>
                <?php if ($ti == 0) { ?><?php if (!empty($listingPhotos)): ?><li data-tab="slPhotoGallery">Photo Gallery</li><?php endif; ?><?php if (!empty($listingVideos)): ?><li data-tab="slVideoGallery">Videos</li><?php endif; ?><?php } ?>
                <?php } ?>
            </ul>
            <?php } ?>

<style>.sl-verified-badge{display:inline-block;font-size:12px;font-weight:600;color:#1a7f37;background:#e6f4ea;border-radius:12px;padding:2px 10px;margin-left:8px;vertical-align:middle;}.sl-verified-badge i{margin-right:4px;}.sl-source{margin-top:8px;color:#666;}.sl-tag-list{display:flex;flex-wrap:wrap;gap:8px;margin-top:10px;}.sl-tag-pill{display:inline-block;background:#f1f3f5;color:#333;border-radius:16px;padding:5px 14px;font-size:13px;}.sl-items-list{list-style:none;margin:10px 0 0;padding:0;}.sl-items-list li{padding:10px 0;border-bottom:1px solid #eee;}.sl-items-list li:last-child{border-bottom:none;}.sl-item-sub{display:block;color:#666;font-size:13px;margin-top:2px;}</style>
<div id="sltab0" class="sl-tabcontent active">

                <div class="sl-card">
                    <h2>Details</h2>
                    <ul class="sl-facts">
                        <?php
                        if (isset($listingdata['founded']) && $listingdata['founded'] != null && $listingdata['founded'] != "") {
                        ?>
                        <li><i class="fa fa-calendar"></i><span><strong>Founded</strong><?php echo $listingdata['founded']; ?></span></li>
                        <?php } ?>

                        <?php if ($website_url != '') { ?>
                        <li><i class="fa fa-globe"></i><span><strong>Website</strong><a href="<?php echo $website_url; ?>" target="_blank" rel="noopener"><?php echo $listingdata['websitelink']; ?></a></span></li>
                        <?php } ?>

                        <?php if (isset($listingdata['phonenumber']) && $listingdata['phonenumber'] !== null && $listingdata['phonenumber'] !== "") { ?>
                        <li><i class="fa fa-phone"></i><span><strong>Phone</strong><a href="tel:<?php echo preg_replace('/\s+/', '', $listingdata['phonenumber']); ?>" class="sl-phone-link" data-real="<?php echo htmlspecialchars($listingdata['phonenumber']); ?>" onclick="if(!this.classList.contains('revealed')){event.preventDefault();this.classList.add('revealed');this.textContent=this.getAttribute('data-real');}">Click to view number</a></span></li>
                        <?php }  ?>

                        <?php if (isset($listingdata['email']) && $listingdata['email'] != null && $listingdata['email'] != "") { ?>
                        <li><i class="fa fa-envelope"></i><span><strong>Email</strong><a href="mailto:<?php echo $listingdata['email']; ?>"><?php echo $listingdata['email']; ?></a></span></li>
                        <?php } ?>

                        <?php if (isset($listingdata['parent_cat_id']) && $listingdata['parent_cat_id'] == 2 && isset($listingdata['bookinglink']) && $listingdata['bookinglink'] != null && $listingdata['bookinglink'] != "") { ?>
                        <li><i class="fa fa-bed"></i><span><strong>Booking</strong><a href="<?php echo $listingdata['bookinglink']; ?>" target="_blank" rel="noopener">Book now</a></span></li>
                        <?php } ?>

                        <?php if (isset($listingdata['parent_cat_id']) && $listingdata['parent_cat_id'] == 2 && isset($listingdata['noofbeds']) && $listingdata['noofbeds'] != null && $listingdata['noofbeds'] != "") { ?>
                        <li><i class="fa fa-bed"></i><span><strong>Rooms / Beds</strong><?php echo $listingdata['noofbeds']; ?></span></li>
                        <?php } ?>

                        <?php if (isset($listingdata['parent_cat_id']) && $listingdata['parent_cat_id'] == 1 && isset($listingdata['fees']) && $listingdata['fees'] != null && $listingdata['fees'] != "") { ?>
                        <li><i class="fa fa-money"></i><span><strong>Fees</strong><?php echo $listingdata['fees']; ?></span></li>
                        <?php } ?>

                        <?php if (isset($listingdata['address']) && $listingdata['address'] != null && $listingdata['address'] != "") { ?>
                        <li><i class="fa fa-map-marker"></i><span><strong>Address</strong><?php echo $listingdata['address']; ?></span></li>
                        <?php } ?>
                        <?php for($factn=1;$factn<=6;$factn++){ $fl=isset($listingdata['fact'.$factn.'_label'])?trim($listingdata['fact'.$factn.'_label']):''; $fv=isset($listingdata['fact'.$factn.'_value'])?trim($listingdata['fact'.$factn.'_value']):''; if($fl!=''&&$fv!=''){ ?>
                        <li><i class="fa fa-info-circle"></i><span><strong><?php echo htmlspecialchars($fl); ?></strong><?php echo htmlspecialchars($fv); ?></span></li>
                        <?php } } ?>
                        
                    </ul>
                </div>

                <?php if (isset($listingdata['listing_detail']) && trim(strip_tags($listingdata['listing_detail'])) != '') { ?>
                <div class="sl-card sl-desc">
                    <h2><?php echo (isset($listingdata['listing_detail_title']) && $listingdata['listing_detail_title'] != '') ? $listingdata['listing_detail_title'] : 'About'; ?><?php if (isset($listingdata['is_verified']) && $listingdata['is_verified'] == 1) { ?><span class="sl-verified-badge"><i class="fa fa-check-circle"></i> Verified</span><?php } ?></h2>
                    <p><?php echo $listingdata['listing_detail']; ?></p><?php if (isset($listingdata['about_source_url']) && trim($listingdata['about_source_url']) != '') { ?><p class="sl-source">Source: <a href="<?php echo $listingdata['about_source_url']; ?>" target="_blank" rel="noopener"><?php echo $listingdata['about_source_url']; ?></a></p><?php } ?>
                </div>
                <?php } ?>

<?php if (isset($listingdata['tags']) && trim($listingdata['tags']) != '') { ?><div class="sl-card"><h2><?php echo (isset($listingdata['tags_label']) && trim($listingdata['tags_label']) != '') ? htmlspecialchars($listingdata['tags_label']) : 'Subjects and study areas'; ?></h2><div class="sl-tag-list"><?php foreach (explode(',', $listingdata['tags']) as $sltag) { $sltag = trim($sltag); if ($sltag != '') { ?><span class="sl-tag-pill"><?php echo htmlspecialchars($sltag); ?></span><?php } } ?></div></div><?php } ?><?php if (isset($listingdata['items_text']) && trim($listingdata['items_text']) != '') { ?><div class="sl-card"><h2><?php echo (isset($listingdata['items_label']) && trim($listingdata['items_label']) != '') ? htmlspecialchars($listingdata['items_label']) : 'Popular Programs'; ?></h2><ul class="sl-items-list"><?php foreach (preg_split('/\r\n|\r|\n/', $listingdata['items_text']) as $slitem) { $slitem = trim($slitem); if ($slitem == '') { continue; } $slparts = array_map('trim', explode('|', $slitem)); $slititle = isset($slparts[0]) ? $slparts[0] : ''; $slisub = isset($slparts[1]) ? $slparts[1] : ''; $sllink = isset($slparts[2]) ? $slparts[2] : ''; ?><li><?php if ($sllink != '') { ?><a href="<?php echo $sllink; ?>" target="_blank" rel="noopener"><?php echo htmlspecialchars($slititle); ?></a><?php } else { ?><?php echo htmlspecialchars($slititle); ?><?php } ?><?php if ($slisub != '') { ?><span class="sl-item-sub"><?php echo htmlspecialchars($slisub); ?></span><?php } ?></li><?php } ?></ul></div><?php } ?><?php /* location map moved to sidebar */ ?>

<div class="sl-card sl-reviews-card">
    <h2>Reviews &amp; Ratings</h2>
    <?php
        $rvavg = isset($reviewstats['avg_rating']) && $reviewstats['avg_rating'] !== null ? round($reviewstats['avg_rating'], 1) : 0;
        $rvcount = isset($reviewstats['review_count']) ? (int)$reviewstats['review_count'] : 0;
    ?>
    <div class="sl-rating-summary">
        <span class="sl-rating-num"><?php echo $rvavg; ?></span>
        <span class="sl-rating-stars"><?php echo str_repeat('&starf;', (int)round($rvavg)) . str_repeat('&star;', 5 - (int)round($rvavg)); ?></span>
        <span class="sl-rating-count"><?php echo $rvcount; ?> review<?php echo ($rvcount == 1) ? '' : 's'; ?></span>
    </div>

    <?php if (!empty($reviews)): ?>
    <div class="sl-review-list">
        <?php foreach ($reviews as $rv): ?>
        <div class="sl-review-item">
            <div class="sl-review-head">
                <strong><?php echo htmlspecialchars($rv['reviewer_name']); ?></strong>
                <span class="sl-review-stars"><?php echo str_repeat('&starf;', (int)$rv['rating']) . str_repeat('&star;', 5 - (int)$rv['rating']); ?></span>
                <span class="sl-review-date"><?php echo date('M j, Y', strtotime($rv['created_at'])); ?></span>
            </div>
            <p class="sl-review-text"><?php echo nl2br(htmlspecialchars($rv['review_text'])); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
    <p class="sl-review-empty">No reviews yet. Be the first to review!</p>
    <?php endif; ?>

    <div class="sl-review-form-wrap">
        <h3>Write a Review</h3>
        <div id="slReviewMsg" class="sl-review-msg" style="display:none;"></div>
        <form id="slReviewForm">
            <input type="hidden" name="listing_slug" value="<?php echo htmlspecialchars($listingslug); ?>">
            <div class="sl-form-row">
                <input type="text" name="reviewer_name" placeholder="Your name" required>
                <input type="email" name="reviewer_email" placeholder="Your email" required>
            </div>
            <div class="sl-star-input" id="slStarInput">
                <span data-val="1">&star;</span><span data-val="2">&star;</span><span data-val="3">&star;</span><span data-val="4">&star;</span><span data-val="5">&star;</span>
                <input type="hidden" name="rating" id="slRatingVal" value="0">
            </div>
            <textarea name="review_text" placeholder="Share your experience..." rows="4" required></textarea>
            <button type="submit" class="sl-review-submit">Submit Review</button>
        </form>
    </div>
</div>

<style>
.sl-rating-summary{display:flex;align-items:center;gap:10px;margin-bottom:15px;}
.sl-rating-num{font-size:28px;font-weight:700;}
.sl-rating-stars{color:#f5a623;font-size:20px;}
.sl-rating-count{color:#777;}
.sl-review-list{margin-bottom:20px;}
.sl-review-item{border-bottom:1px solid #eee;padding:12px 0;}
.sl-review-head{display:flex;align-items:center;gap:10px;flex-wrap:wrap;}
.sl-review-stars{color:#f5a623;}
.sl-review-date{color:#999;font-size:13px;}
.sl-review-text{margin:6px 0 0;color:#444;}
.sl-review-empty{color:#777;}
.sl-review-form-wrap{border-top:1px solid #eee;padding-top:15px;}
.sl-form-row{display:flex;gap:10px;margin-bottom:10px;flex-wrap:wrap;}
.sl-form-row input{flex:1;min-width:200px;padding:8px;border:1px solid #ddd;border-radius:4px;}
.sl-star-input{font-size:24px;color:#ccc;cursor:pointer;margin-bottom:10px;}
.sl-star-input span{margin-right:4px;}
.sl-star-input span.sl-star-on{color:#f5a623;}
.sl-review-form-wrap textarea{width:100%;padding:8px;border:1px solid #ddd;border-radius:4px;margin-bottom:10px;}
.sl-review-submit{background:#337ab7;color:#fff;border:none;padding:10px 20px;border-radius:4px;cursor:pointer;font-weight:600;}
.sl-review-msg{padding:10px;border-radius:4px;margin-bottom:10px;}
.sl-review-msg.sl-success{background:#e6f4ea;color:#1a7f37;}
.sl-review-msg.sl-error{background:#fdecea;color:#c0392b;}
</style>
<script>
(function(){
    function slFixSidebar(){
        var slSide = document.querySelector('.sl-side');
        var slGrid = document.querySelector('.sl-grid');
        if (slSide && slGrid && slSide.parentElement !== slGrid) {
            slGrid.appendChild(slSide);
        }
    }
    if (document.readyState === 'complete') { slFixSidebar(); } else { window.addEventListener('load', slFixSidebar); }
    var stars = document.querySelectorAll('#slStarInput span');
    var ratingInput = document.getElementById('slRatingVal');
    stars.forEach(function(s){
        s.addEventListener('click', function(){
            var val = parseInt(s.getAttribute('data-val'));
            ratingInput.value = val;
            stars.forEach(function(s2){
                s2.classList.toggle('sl-star-on', parseInt(s2.getAttribute('data-val')) <= val);
            });
        });
    });
    var form = document.getElementById('slReviewForm');
    if (form) {
        form.addEventListener('submit', function(e){
            e.preventDefault();
            var msg = document.getElementById('slReviewMsg');
            var rating = parseInt(ratingInput.value);
            if (!rating) {
                msg.textContent = 'Please select a star rating.';
                msg.className = 'sl-review-msg sl-error';
                msg.style.display = 'block';
                return;
            }
            var formData = new FormData(form);
            fetch('<?php echo base_url() . "submitreview"; ?>', {
                method: 'POST',
                body: formData
            }).then(function(r){ return r.json(); }).then(function(data){
                if (data.needs_login) { window.location.href = '<?php echo base_url('signup'); ?>'; return; }
                msg.textContent = data.message;
                msg.className = 'sl-review-msg ' + (data.success ? 'sl-success' : 'sl-error');
                msg.style.display = 'block';
                if (data.success) {
                    form.reset();
                    stars.forEach(function(s2){ s2.classList.remove('sl-star-on'); });
                    ratingInput.value = 0;
                }
            }).catch(function(){
                msg.textContent = 'Something went wrong. Please try again.';
                msg.className = 'sl-review-msg sl-error';
                msg.style.display = 'block';
            });
        });
    }
})();
</script>
            </div>

            <?php
            if (isset($categorydetail[0]['tabs']) && trim($categorydetail[0]['tabs']) != '') {
                $j = 1;
                foreach ($extratabs as $tab) {
                    $tab = trim($tab);
                    if ($tab == '') { continue; }
                    $sl_tab_is_video = (strtolower($tab) == 'videos' || strtolower($tab) == 'video');
                    $sl_tab_is_admissions = (strtolower($tab) == 'admissions');
                    $tabval = isset($listingdata['tab_value_' . $j]) ? $listingdata['tab_value_' . $j] : '';
                    if ($sl_tab_is_video) {
                        $sl_tabvid_url = isset($listingdata['video_url']) ? trim($listingdata['video_url']) : '';
                        $sl_tabvid_id = '';
                        if ($sl_tabvid_url != '' && preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|shorts\/))([a-zA-Z0-9_-]{11})/', $sl_tabvid_url, $sl_tabvid_matches)) { $sl_tabvid_id = $sl_tabvid_matches[1]; }
            ?>
            <div id="sltab<?php echo $j; ?>" class="sl-tabcontent">
                <div class="sl-card">
                    <h2><?php echo htmlspecialchars($tab); ?></h2>
                    <?php if ($sl_tabvid_id != '') { ?>
                    <div class="sl-video-wrap"><iframe src="https://www.youtube.com/embed/<?php echo $sl_tabvid_id; ?>" title="Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <?php } elseif ($sl_tabvid_url != '') { ?>
                    <p><a href="<?php echo htmlspecialchars($sl_tabvid_url); ?>" target="_blank" rel="noopener">Watch Video</a></p>
                    <?php } else { ?>
                    <p>No video available for this listing yet.</p>
                    <?php } ?>
                </div>
            </div>
            <?php
                    } elseif ($sl_tab_is_admissions) {
            ?>
            <div id="sltab<?php echo $j; ?>" class="sl-tabcontent">
                <div class="sl-card">
                    <h2><?php echo htmlspecialchars($tab); ?></h2>
                    <p><button type="button" class="sl-btn sl-btn-outline" onclick="slOpenEnquireModal()">Enquire Now</button></p>
                    <?php if (trim(strip_tags($tabval)) != '') { ?>
                    <div><?php echo $tabval; ?></div>
                    <?php } ?>
                    <?php if (!empty($listingdata["admission_url"]) && preg_match("~^https?://~i", $listingdata["admission_url"])) { ?>
                    <div class="sl-apply"><div><strong>Apply on the official admissions page</strong><small>Opens the university&#39;s own page with current dates, fees and forms.</small></div><a class="sl-apply-btn" href="<?php echo htmlspecialchars($listingdata["admission_url"]); ?>" target="_blank" rel="noopener nofollow">Apply on Official Site &rarr;</a></div>
                    <?php } ?>
                </div>
            </div>
            <?php
            } elseif (trim(strip_tags($tabval)) != '') {
            ?>
            <div id="sltab<?php echo $j; ?>" class="sl-tabcontent">
                <div class="sl-card">
                    <h2><?php echo htmlspecialchars($tab); ?></h2>
                    <div><?php echo $tabval; ?></div>
                </div>
            </div>
            <?php
                    }
                    $j++;
                }
            }
            ?>

        
<style>
.sl-gallery-hero{width:100%;max-height:420px;border-radius:8px;overflow:hidden;background:#000;margin-bottom:12px;}
.sl-gallery-hero img{width:100%;height:420px;object-fit:cover;display:block;}
.sl-gallery-hero-video{position:relative;height:0;padding-bottom:56.25%;max-height:none;}
.sl-gallery-hero-video iframe,.sl-gallery-hero-video video{position:absolute;top:0;left:0;width:100%;height:100%;border:none;}
.sl-gallery-thumbs{display:flex;gap:10px;overflow-x:auto;padding-bottom:4px;}
.sl-gallery-thumb{width:90px;height:65px;flex:0 0 auto;border-radius:6px;overflow:hidden;cursor:pointer;border:2px solid transparent;opacity:0.75;transition:all .15s;background:#eee;}
.sl-gallery-thumb img{width:100%;height:100%;object-fit:cover;display:block;}
.sl-gallery-thumb.active,.sl-gallery-thumb:hover{opacity:1;border-color:#0c5d69;}
.sl-gallery-vthumb-placeholder{width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:#888;font-size:20px;}
</style>
<?php if (!empty($listingPhotos)): ?>
            <div id="slPhotoGallery" class="sl-tabcontent">
                <div class="sl-card">
                    <h2>Photo Gallery</h2>
                    <div class="sl-gallery">
                        <div class="sl-gallery-hero">
                            <img id="slGalleryHeroImg" src="<?php echo base_url().'assets/images/'.$listingPhotos[0]['media_url']; ?>" alt="<?php echo htmlspecialchars(!empty($listingPhotos[0]['title']) ? $listingPhotos[0]['title'] : $listingdata['listing_title']); ?>">
                        </div>
                        <?php if (count($listingPhotos) > 1): ?>
                        <div class="sl-gallery-thumbs">
                            <?php foreach ($listingPhotos as $gi => $gp): ?>
                            <div class="sl-gallery-thumb<?php echo $gi==0?' active':''; ?>" onclick="slSwapGalleryImage(this, '<?php echo base_url().'assets/images/'.$gp['media_url']; ?>')">
                                <img src="<?php echo base_url().'assets/images/'.$gp['media_url']; ?>" alt="">
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if (!empty($listingVideos)): ?>
            <div id="slVideoGallery" class="sl-tabcontent">
                <div class="sl-card">
                    <h2>Videos</h2>
                    <div class="sl-gallery">
                        <div class="sl-gallery-hero sl-gallery-hero-video" id="slGalleryHeroVideoWrap">
                            <?php
                            $sl_v0 = $listingVideos[0];
                            $sl_v0_yid = '';
                            if (preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $sl_v0['media_url'], $sl_v0_m)) { $sl_v0_yid = $sl_v0_m[1]; }
                            ?>
                            <?php if ($sl_v0_yid != ''): ?>
                            <iframe id="slGalleryHeroVideoFrame" src="https://www.youtube.com/embed/<?php echo $sl_v0_yid; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <?php else: ?>
                            <video controls style="width:100%;height:100%;" src="<?php echo htmlspecialchars($sl_v0['media_url']); ?>"></video>
                            <?php endif; ?>
                        </div>
                        <?php if (count($listingVideos) > 1): ?>
                        <div class="sl-gallery-thumbs">
                            <?php foreach ($listingVideos as $gvi => $gv):
                                $gv_yid = '';
                                if (preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $gv['media_url'], $gv_m)) { $gv_yid = $gv_m[1]; }
                                $gv_thumb = $gv_yid != '' ? 'https://img.youtube.com/vi/'.$gv_yid.'/mqdefault.jpg' : '';
                            ?>
                            <div class="sl-gallery-thumb sl-gallery-vthumb<?php echo $gvi==0?' active':''; ?>" data-yid="<?php echo $gv_yid; ?>" data-url="<?php echo htmlspecialchars($gv['media_url']); ?>" onclick="slSwapGalleryVideo(this)">
                                <?php if ($gv_thumb != ''): ?>
                                <img src="<?php echo $gv_thumb; ?>" alt="">
                                <?php else: ?>
                                <div class="sl-gallery-vthumb-placeholder">&#9654;</div>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <script>
            function slSwapGalleryImage(el, src) {
                var hero = document.getElementById('slGalleryHeroImg');
                if (hero) { hero.src = src; }
                var thumbs = el.parentElement.querySelectorAll('.sl-gallery-thumb');
                for (var i=0;i<thumbs.length;i++){ thumbs[i].classList.remove('active'); }
                el.classList.add('active');
            }
            function slSwapGalleryVideo(el) {
                var yid = el.getAttribute('data-yid');
                var url = el.getAttribute('data-url');
                var wrap = document.getElementById('slGalleryHeroVideoWrap');
                if (wrap) {
                    if (yid) {
                        wrap.innerHTML = '<iframe id="slGalleryHeroVideoFrame" src="https://www.youtube.com/embed/' + yid + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                    } else {
                        wrap.innerHTML = '<video controls style="width:100%;height:100%;" src="' + url + '"></video>';
                    }
                }
                var thumbs = el.parentElement.querySelectorAll('.sl-gallery-vthumb');
                for (var i=0;i<thumbs.length;i++){ thumbs[i].classList.remove('active'); }
                el.classList.add('active');
            }
            </script>
<div class="sl-side">

            <?php if ($map_embed_src != '') { ?>
<div class="sl-side-box sl-map">
<p class="sl-side-title">Location</p>
<iframe loading="lazy" src="<?php echo $map_embed_src; ?>" style="width:100%;height:220px;border:0;border-radius:8px;display:block;"></iframe>
<?php if ($map_location_text != '') { ?>
<p style="font-size:12.5px;color:#8a949c;margin:10px 0 0;line-height:1.4;"><i class="fa fa-map-marker" style="color:#13a2b7;margin-right:4px;"></i><?php echo htmlspecialchars($map_location_text); ?></p>
<?php } ?>
</div>
<?php } ?>

<?php if ($adimage != '') { ?>
            <div class="sl-side-box">
                <img src="<?php echo base_url() . 'assets/images/' . $adimage; ?>" alt="">
            </div>
            <?php } ?>

            <?php if (isset($relatedlistings) && count($relatedlistings) > 0) { ?>
            <div class="sl-side-box">
                <p class="sl-side-title">Similar Listings</p>
                <?php foreach ($relatedlistings as $rl) { ?>
                <div class="sl-related-item">
                    <img class="sl-related-thumb" src="<?php echo base_url() . 'assets/images/' . (isset($rl['listing_thumbnail']) && $rl['listing_thumbnail'] != '' ? $rl['listing_thumbnail'] : 'defaultlisting.png'); ?>" onerror="this.src='<?php echo base_url(); ?>assets/images/placeholder.jpg'" alt="">
                    <div class="sl-related-info">
                        <a href="<?php echo base_url() . 'listing/' . $rl['listing_slug']; ?>"><?php echo $rl['listing_title']; ?></a>
                        <?php if (isset($rl['listing_city']) && $rl['listing_city'] != '' && !is_numeric($rl['listing_city'])) { ?>
                        <span><?php echo $rl['listing_city']; ?></span>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>

            <div class="box sidebarposts">
                <p class="sidebartitle">Related Posts</p>
                <div class="container-popularpost">
                    <?php
                    foreach ($relatedblogs as $singleblog) {
                    ?>
                    <div class="row">
                        <div class="col-12"><a class="post-link" href="<?php echo base_url() . 'blog/' . $singleblog['slug']; ?>"><?php echo $singleblog['title']; ?></a></div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
(function(){
    var tabs = document.querySelectorAll('.sl-tabs li');
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener('click', function(){
            var target = this.getAttribute('data-tab');
            var allTabs = document.querySelectorAll('.sl-tabs li');
            var allContent = document.querySelectorAll('.sl-tabcontent');
            for (var j = 0; j < allTabs.length; j++) { allTabs[j].classList.remove('active'); }
            for (var k = 0; k < allContent.length; k++) { allContent[k].classList.remove('active'); }
            this.classList.add('active');
            var el = document.getElementById(target);
            if (el) { el.classList.add('active'); }
        });
    }
})();
</script>

<style>
.sl-modal-overlay{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(15,27,32,.55);z-index:9999;align-items:center;justify-content:center;padding:20px;}
.sl-modal-overlay.sl-modal-open{display:flex;}
.sl-modal{background:#fff;border-radius:10px;max-width:520px;width:100%;max-height:88vh;overflow-y:auto;padding:26px 26px 22px;position:relative;box-shadow:0 20px 50px rgba(0,0,0,.25);}
.sl-modal h3{margin:0 0 4px;font-size:20px;color:#1c2b33;}
.sl-modal p.sl-modal-sub{margin:0 0 18px;color:#5b6b73;font-size:13.5px;}
.sl-modal-close{position:absolute;top:14px;right:16px;background:none;border:none;font-size:22px;line-height:1;color:#8a9aa1;cursor:pointer;padding:4px;}
.sl-modal-close:hover{color:#1c2b33;}
.sl-modal-field{margin-bottom:12px;}
.sl-modal-field label{display:block;font-size:12.5px;font-weight:600;color:#1c2b33;margin-bottom:4px;}
.sl-modal-field input,.sl-modal-field textarea{width:100%;padding:9px 10px;border:1px solid #ddd;border-radius:5px;font-size:14px;font-family:inherit;box-sizing:border-box;}
.sl-modal-field textarea{resize:vertical;min-height:70px;}
.sl-modal-section-title{font-size:13px;font-weight:700;color:#0c5d69;text-transform:uppercase;letter-spacing:.03em;margin:18px 0 10px;padding-top:10px;border-top:1px solid #eef1f3;}
.sl-modal-section-title:first-of-type{border-top:none;padding-top:0;margin-top:0;}
.sl-modal-submit{background:#0c5d69;color:#fff;border:none;padding:11px 22px;border-radius:6px;cursor:pointer;font-weight:600;font-size:14px;width:100%;margin-top:6px;}
.sl-modal-submit:hover{opacity:.9;}
.sl-modal-submit:disabled{opacity:.6;cursor:default;}
.sl-modal-msg{padding:10px;border-radius:4px;margin-bottom:12px;font-size:13.5px;display:none;}
.sl-modal-msg.sl-success{background:#e6f4ea;color:#1a7f37;display:block;}
.sl-modal-msg.sl-error{background:#fdecea;color:#c0392b;display:block;}
button.sl-claim{font:inherit;cursor:pointer;}
</style>

<div class="sl-modal-overlay" id="slEnquireOverlay">
    <div class="sl-modal">
        <button type="button" class="sl-modal-close" onclick="slCloseModal('slEnquireOverlay')">&times;</button>
        <h3>Send an Enquiry</h3>
        <p class="sl-modal-sub">Get in touch about <?php echo htmlspecialchars($listingdata['listing_title']); ?></p>
        <div class="sl-modal-msg" id="slEnquireMsg"></div>
        <form id="slEnquireForm">
            <input type="hidden" name="listing_slug" value="<?php echo htmlspecialchars($listingslug); ?>">
            <div class="sl-modal-field">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Your full name" required>
            </div>
            <div class="sl-modal-field">
                <label>Email</label>
                <input type="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="sl-modal-field">
                <label>Phone (with country code)</label>
                <input type="text" name="phone" placeholder="+1 555 123 4567">
            </div>
            <div class="sl-modal-field">
                <label>Message</label>
                <textarea name="message" placeholder="What would you like to know?" required></textarea>
            </div>
            <button type="submit" class="sl-modal-submit">Send Enquiry</button>
        </form>
    </div>
</div>

<div class="sl-modal-overlay" id="slClaimOverlay">
    <div class="sl-modal">
        <button type="button" class="sl-modal-close" onclick="slCloseModal('slClaimOverlay')">&times;</button>
        <h3>Claim / Suggest an Edit</h3>
        <p class="sl-modal-sub">Update the details below for <?php echo htmlspecialchars($listingdata['listing_title']); ?></p>
        <div class="sl-modal-msg" id="slClaimMsg"></div>
        <form id="slClaimForm">
            <input type="hidden" name="listing_slug" value="<?php echo htmlspecialchars($listingslug); ?>">

            <div class="sl-modal-section-title">Listing Details</div>
            <div class="sl-modal-field">
                <label>Title</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars(isset($listingdata['listing_title']) ? $listingdata['listing_title'] : ''); ?>">
            </div>
            <div class="sl-modal-field">
                <label>Address</label>
                <input type="text" name="address" value="<?php echo htmlspecialchars(isset($listingdata['address']) ? $listingdata['address'] : ''); ?>">
            </div>
            <div class="sl-modal-field">
                <label>Website</label>
                <input type="text" name="website" value="<?php echo htmlspecialchars(isset($listingdata['websitelink']) ? $listingdata['websitelink'] : ''); ?>">
            </div>
            <div class="sl-modal-field">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo htmlspecialchars(isset($listingdata['email']) ? $listingdata['email'] : ''); ?>">
            </div>
            <div class="sl-modal-field">
                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo htmlspecialchars(isset($listingdata['phonenumber']) ? $listingdata['phonenumber'] : ''); ?>">
            </div>
            <div class="sl-modal-field">
                <label>Founded Year</label>
                <input type="text" name="founded" value="<?php echo htmlspecialchars(isset($listingdata['founded']) ? $listingdata['founded'] : ''); ?>">
            </div>
            <div class="sl-modal-field">
                <label>Description</label>
                <textarea name="description" style="min-height:110px;"><?php echo htmlspecialchars(isset($listingdata['listing_detail']) ? strip_tags($listingdata['listing_detail']) : ''); ?></textarea>
            </div>

            <div class="sl-modal-section-title">Your Contact Info</div>
            <div class="sl-modal-field">
                <label>Your Name</label>
                <input type="text" name="submitter_name" placeholder="Your full name" required>
            </div>
            <div class="sl-modal-field">
                <label>Your Email</label>
                <input type="email" name="submitter_email" placeholder="you@example.com" required>
            </div>
            <div class="sl-modal-field">
                <label>Your Phone</label>
                <input type="text" name="submitter_phone" placeholder="+1 555 123 4567">
            </div>
            <div class="sl-modal-field">
                <label>Additional Suggestions</label>
                <textarea name="suggestions" placeholder="Anything else we should know or update?"></textarea>
            </div>

            <button type="submit" class="sl-modal-submit">Submit Suggestion</button>
        </form>
    </div>
</div>

<script>
(function(){
    window.slOpenEnquireModal = function(){ document.getElementById('slEnquireOverlay').classList.add('sl-modal-open'); };
    window.slOpenClaimModal = function(){
        <?php if (empty($this->session->userdata('userid'))) { ?>
        window.location.href = '<?php echo base_url('signup'); ?>';
        return;
        <?php } ?>
        document.getElementById('slClaimOverlay').classList.add('sl-modal-open');
    };
    window.slCloseModal = function(id){ document.getElementById(id).classList.remove('sl-modal-open'); };

    document.querySelectorAll('.sl-modal-overlay').forEach(function(overlay){
        overlay.addEventListener('click', function(e){
            if (e.target === overlay) { overlay.classList.remove('sl-modal-open'); }
        });
    });

    function wireForm(formId, msgId, endpoint, overlayId){
        var form = document.getElementById(formId);
        if (!form) { return; }
        var msg = document.getElementById(msgId);
        form.addEventListener('submit', function(e){
            e.preventDefault();
            var btn = form.querySelector('.sl-modal-submit');
            btn.disabled = true;
            msg.style.display = 'none';
            var formData = new FormData(form);
            fetch('<?php echo base_url(); ?>' + endpoint, {
                method: 'POST',
                body: formData
            }).then(function(r){ return r.json(); }).then(function(data){
                msg.textContent = data.message;
                msg.className = 'sl-modal-msg ' + (data.success ? 'sl-success' : 'sl-error');
                msg.style.display = 'block';
                btn.disabled = false;
                if (data.success) {
                    form.reset();
                    setTimeout(function(){ slCloseModal(overlayId); msg.style.display = 'none'; }, 2200);
                }
            }).catch(function(){
                msg.textContent = 'Something went wrong. Please try again.';
                msg.className = 'sl-modal-msg sl-error';
                msg.style.display = 'block';
                btn.disabled = false;
            });
        });
    }

    wireForm('slEnquireForm', 'slEnquireMsg', 'submit-enquiry', 'slEnquireOverlay');
    wireForm('slClaimForm', 'slClaimMsg', 'submit-claim', 'slClaimOverlay');
})();
</script>