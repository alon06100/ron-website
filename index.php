<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require 'homesite.html';
        break;
    case '/homesite2' :
        require 'homesite2.html';
        break;
    case '/homesite6' :
        require 'homesite6.html';
        break;
    case '/homesite4' :
        require 'homesite4.html';
        break;
    case '/castro' :
        require 'castro.html';
        break;
    case '/rubinstain' :
        require 'rubinstain.html';
        break;
    case '/arakashkelon' :
        require 'arakashkelon.html';
        break;
    case '/rakevet' :
        require 'rakevet.html';
        break;
    case '/populart' :
        require 'populart.html';
        break;
    case '/tabu' :
        require 'tabu.html';
        break;
    case '/tacoli' :
        require 'tacoli.html';
        break;
    case '/eilat' :
        require 'eilat.html';
        break;
    case '/haavoda' :
        require 'haavoda.html';
        break;
    case '/neviot' :
        require 'neviot.html';
        break;
    case '/achva' :
        require 'achva.html';
        break;
    case '/familysoap' :
        require 'familysoap.html';
        break;
}