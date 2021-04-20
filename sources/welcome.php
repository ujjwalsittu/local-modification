<?php
// if ($wo['loggedin'] == true) {
//   header("Location: " . $wo['config']['site_url']);
//   exit();
// }
// TODO. modified by ME

$wo['description'] = $wo['config']['siteDesc'];
$wo['keywords']    = $wo['config']['siteKeywords'];
$wo['page']        = 'home';
$wo['title']       = $wo['config']['siteTitle'];
$wo['content']     = Wo_LoadPage('home/content'); //TODO. modified by me