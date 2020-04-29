<?php

$query= require 'boostrap.php';

$product=$query->selectAll('products');

require 'index.view.php';
