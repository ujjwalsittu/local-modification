<?php
if ($wo['loggedin'] == true) {//  TODO MODIFIED BY ME
    header("Location: " . $wo['config']['site_url']); //  TODO MODIFIED BY ME
    exit();
}

$page = 'login';
$wo['description'] = $wo['config']['siteDesc'];
$wo['keywords']    = $wo['config']['siteKeywords'];
$wo['page']        = 'welcome';
$wo['title']       = $wo['config']['siteTitle'];
$wo['content']     = Wo_LoadPage('welcome/'.$page); //  TODO MODIFIED BY ME

