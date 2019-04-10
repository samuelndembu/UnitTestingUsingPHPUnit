<?php 
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase {

public function test() {
require('user.php');
$user = new User("User 1");

$this->assertEquals("User 1", $user->getUserName(), "User name is set correctly");

$mod = new Moderator("Moderator");

$this->assertInstanceOf(User::class, $mod, "Moderator is a User");

}

}
