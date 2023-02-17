{% extends 'default.php' %}

{% block version %}
	<?php
	$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
	$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
	$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
	$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
    $version = 'event-now-page';
    include_once $ROOT . 'version.php';
	?>
{% endblock %}
{% block blocks %}
	{% set eventsPageNow = true %}
	{% set acco_class = 'acco' %}
	{% set acco_content = 'acco-content' %}
	{% set acco_content_rv = 'acco-content-rv' %}
	{% set acco = true %}
	{% include 'header/block.php' %}
	{% include 'main-page-now/block.php' %}
	<section class="bg-reviews">
		{% include 'reviews/block.php' %}
		{% include 'reviews/block.php' %}
	</section>
	{% include 'program/block.php' %}
	{% include 'fights/block.php' %}
	{% include 'news/block.php' %}
	{% include 'adres/block.php' %}
	{% include 'popup-reg/block.php' %}
	{% include 'footer/block.php' %}
	{% endblock %}