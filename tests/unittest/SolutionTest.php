<?php 
use PHPUnit\Framework\TestCase;
require('solution.php');
class SolutionTest extends TestCase {

public function test() {

$sum = new Solution(10);

$this->assertEquals(10, $sum->multiple(), false);
}
}