<?php
$feedback = $app['database']->selectAll('feedback');
require 'views/feedback.view.php';
