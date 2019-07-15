<?php

require __DIR__ . '/../../../../vendor/autoload.php';
require __DIR__ . '/../src/Pond.php';

class PondTest extends \PHPUnit\Framework\TestCase
{

	private $objPond;
	private $pond_size;
 
    protected function setUp(): void
    {
        $this->objPond = new Pond();
        $this->pond_size = $this->objPond->getSize();
    }
 
    protected function tearDown(): void
    {
        $this->objPond = null;
        $this->pond_size = null;
    }
 
    public function testSizeInt()
    {
        $this->assertIsInt($this->pond_size, 'The Pond size must be an int');
    }

    public function testSize()
    {
    	$expected = 0;
        $this->assertGreaterThan($expected, $this->pond_size, "The Pond size must greater than {$expected}");
    }
}