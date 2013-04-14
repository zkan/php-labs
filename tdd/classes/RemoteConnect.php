<?php
// credit: http://www.sitepoint.com/tutorial-introduction-to-unit-testing-in-php-with-phpunit/
class RemoteConnect {
    public function connectToServer($serverName = null) {
        if($serverName == null) {
            throw new Exception("That's not a server name!");
        }
        $fp = fsockopen($serverName, 80);
        return ($fp) ? true : false;
    }

    public function returnSampleObject() {
        return $this;
    }
}

?>
