<?php
class Rotator
{
    public $availableDomains = array();
    public $nextDomain;
    public $lander;

    function __construct($lander)
    {
        $this->lander = $lander;
    }

    public function setDomains($domains) 
    {
        $this->availableDomains = $domains;
    }

    private function getRandomDomain() 
    {
        $randomArrayElement = array_rand($this->availableDomains, 1);
        $this->nextDomain = $this->availableDomains[$randomArrayElement];
    }

    public function getLocationString() 
    {
        return sprintf("Location: %s/%s", $this->nextDomain, $this->lander);
    }

    public static function getLander()
    {

        $lander = !empty($_GET['rotator_lander']) ? $_GET['rotator_lander'] : '';
        return $lander;
    }

    public function redirect() 
    {
        $this->getRandomDomain();
        $locationString = $this->getLocationString();
        header("HTTP/1.1 301 Moved Permanently"); 
        header($locationString);
        exit();
    }
}