<?php 
use PHPUnit\Framework\TestCase;
class ValidBracesTest extends TestCase {

public function test() {

$braces = new Brace("[()(]");

$this->assertEquals("[()]", $braces->validBraces(), "is an invalid string");

}
}