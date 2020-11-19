<?php
$title = isset($title) ? $title : $_default_title;
$keywords = isset($keywords) ? $keywords : $_default_keywords;
$description = isset($description) ? $description : $_default_description;

/* override */
$description = substr($description, 0, 157) . '...';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="<?= $keywords ?>" />
    <link rel="stylesheet" href="<?= HOME.'/assets/css/bundle.css' ?>" />
    <title><?= $title ?></title>
</head>

<body>
    sửa tại ./_private/header.php