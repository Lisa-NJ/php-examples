<?php

// $this
// PHP_EOL

class Site {

    private $url;
    private $title;
    
    function __construct( $par1="", $par2="" ) {
        $this->url = $par1;
        $this->title = $par2;
     }

    function setUrl($par){
       $this->url = $par;
    }
    
    function getUrl(){
       echo $this->url . PHP_EOL;
    }
    
    function setTitle($par){
       $this->title = $par;
    }
    
    function getTitle(){
       echo $this->title . PHP_EOL;
    }
  }

$site = new Site();
$site->setTitle("Marry");
$site->getTitle();

$site1 = new Site("www.google.com", "Google");
$site1->getTitle();
?>