<?php

//require '../core/bootstrap.php';

$persons = $query->all('Persons');

require 'views/persons.template.php';
