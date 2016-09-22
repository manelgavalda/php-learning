<?php

require 'bootstrap.php';

$persons = $query->all('persons');

require 'persons.template.php';
