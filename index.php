<?php
include 'Template.php';
Template::view('index.html', [
    'title' => 'Home Page',
    'colors' => ['red','blue','green']
]);
?>