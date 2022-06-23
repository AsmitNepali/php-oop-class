<?php
trait Vehicle {
    public function start() {
        echo "Start the Vehicle";
    }
}
trait Bus {
    public function start() {
        echo "Drive The Bus";
    }
}

class DeluxBus {
    use Vehicle, Bus {
        Bus::start insteadof Vehicle;
    }

    public function seat() {
        echo "Book the seat";
    }
}

$bus = new DeluxBus();
$bus->start();