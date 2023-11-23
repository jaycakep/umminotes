<?php
require './libs/rb.php';

R::setup( 'mysql:host=localhost;dbname=umminotes',
        'root', '' );

if(!R::testConnection()) die('No DB connection!');
?>
