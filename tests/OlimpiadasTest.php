<?php
include "../Olimpiadas.php";

class OlimpiadasTest extends PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $olimpiadas = new Olimpiadas();
        $this->assertEquals(1, $olimpiadas->getPossition(1));
        $this->assertEquals(2, $olimpiadas->getPossition(2));
        $this->assertEquals(1, $olimpiadas->getPossition(10));
        $this->assertEquals(0, $olimpiadas->getPossition(11));
        $this->assertEquals(7, $olimpiadas->getPossition(206788));
    }
}