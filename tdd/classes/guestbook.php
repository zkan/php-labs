<?php

class Guestbook {

    // Simulate a "database" here by creating a static entries array.
    // It will be like we have two entries in the table.

    private static $_entries = array(
        array(
            "name" => 'Kirk',
            "message" => "Hi, I\'m Kirk."
        ),
        array(
            "name" => "Ted",
            "message" => "Hi, I\'m Ted."
        )
    );

    public function viewAll() {
        return self::$_entries;
    }

    public function add($name, $message) {
        self::$_entries[] = array("name" => $name, "message" => $message);
        return true;
    }

    public function deleteAll() {
        self::$_entries = array();
        return true;
    }
}

?>
