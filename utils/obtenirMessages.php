<?php
require_once 'common.php';
require_once SITE_ROOT . 'utils/database.php';

echo json_encode(obtenirMessagesChat($pdo, $_SESSION['userId']));
