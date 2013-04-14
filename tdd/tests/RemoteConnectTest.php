<?php
// credit: http://www.sitepoint.com/tutorial-introduction-to-unit-testing-in-php-with-phpunit/
require_once("../classes/RemoteConnect.php");
//require_once("/usr/share/php/PHPUnit/Framework/TestCase.php");
//require_once("PHPUnit/Autoload.php");

class RemoteConnectTest extends PHPUnit_Framework_TestCase {
    public function setUp() {}
    public function tearDown() {}
    public function testConnectionIsValie() {
        // Test to ensure that the object from an fsockopen is valid
        $connObj = new RemoteConnect();
        $serverName = "www.google.com";
        $this->assertTrue($connObj->connectToServer($serverName) !== false);
    }
}

?>
