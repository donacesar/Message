<?php
include_once __DIR__ . '/classes/Message.php';

Message::make('ok', 'success');

Message::displayMessage();
echo "\n";
Message::displayType();

Message::delete();
