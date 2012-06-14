<?php
include "../Olimpiadas.php";

class OlimpiadasTest extends PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $olimpiadas = new Olimpiadas();
        $this->assertEquals(1, $olimpiadas->getPosition(1));
        $this->assertEquals(2, $olimpiadas->getPosition(2));
        $this->assertEquals(1, $olimpiadas->getPosition(10));
        $this->assertEquals(0, $olimpiadas->getPosition(11));
        $this->assertEquals(7, $olimpiadas->getPosition(206788));
    }
}