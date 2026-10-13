<?php
include 'Template.php';
Template::view('index.html', [
    'title' => 'Home Page',
    'css' => 'index.css'
]);
?>