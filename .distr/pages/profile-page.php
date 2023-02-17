{% extends 'default.php' %}

{% block version %}
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
$version = 'profile-page';
include_once $ROOT . 'version.php';
?>
{% endblock %}

{% block blocks %}
{% include 'header/block.php' %}
{% include 'profile/block.php' %}
{% include 'gallery/block.php' %}
{% include 'rating/block.php' %}
{% include 'developments/block.php' %}
{% set post_class = 'news-post' %}
{% set post_news = true %}
{% include 'news/block.php' %}
{% include 'footer/block.php' %}
{% endblock %}