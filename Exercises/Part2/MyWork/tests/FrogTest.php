<?php

require __DIR__ . '/../../../../vendor/autoload.php';
require __DIR__ . '/../src/Frog.php';

class FrogTest extends \PHPUnit\Framework\TestCase
{

	private $objFrog;

    protected function tearDown(): void
    {
        $this->objFrog = null;
    }

    public function testFrogNamePass()
    {
    	$this->objFrog = new Frog('Tony', 'yellow');
    	$this->assertIsString($this->objFrog->getName(), 'The Frog name must be a string.');
    }

    public function testFrogColourPass()
    {
    	$this->objFrog = new Frog('Tony', 'yellow');
    	$this->assertIsString($this->objFrog->getColour(), 'The Frog colour must be a string.');
    }

}