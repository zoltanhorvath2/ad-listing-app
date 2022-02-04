<?php
/**
 * Entrypoint for our application. Every request points to this file.
 */
session_start();

require '../app/init.php';

$app = new App();
