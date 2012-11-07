<?php
/**
 * Elgg header logo
 */

$logo = elgg_view('output/img', array('src' => 'mod/theme_airy/graphics/logo.png'));
$logo_link = elgg_view('output/url', array('text' => $logo, 'href' => elgg_get_site_url()));

echo $logo_link;