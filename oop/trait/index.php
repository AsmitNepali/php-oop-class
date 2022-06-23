<?php
trait Vehicle {
    public function start() {
        echo "start the vehicle";
    }
}

trait Bus {
    public function start() {
        echo "Start the bus";
    }
}

class DeluxBus {

    use Vehicle, Bus {
        Bus::start insteadof Vehicle;
    }

    public function seat() {
        echo "Book Seat";
    }
}

$dbus = new DeluxBus();
$dbus->seat();
$dbus->start();