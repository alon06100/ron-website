<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require 'homesite.html';
        break;
    case '/page2' :
        require 'page2.html';
        break;
    case '/homesite6' :
        require 'homesite6.html';
        break;
    case '/homesite4' :
        require 'homesite4.html';
        break;
}