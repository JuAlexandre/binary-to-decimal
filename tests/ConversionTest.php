<?php

use PHPUnit\Framework\TestCase;
use Wcs\Conversion;

class ConversionTest extends TestCase
{
    public function testConvert()
    {
        $conversion = new Conversion();
        $result = $conversion->convert('10');
        $this->assertEquals(2, $result);

        $result = $conversion->convert('1010110');
        $this->assertEquals(86, $result);
    }
}
