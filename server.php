<?php

require_once ("classes/Chat.php");

$chat = new Chat();

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socet_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);
socket_bind();