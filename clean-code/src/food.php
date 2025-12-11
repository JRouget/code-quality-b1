<?php

class Food {
    private DateTime $expirationDate;
        private bool $approvedForConsumption;
            private ?int $inspectorId;

    public function isEdible(): bool { $now = new DateTime();
        if($this->expirationDate > $now && $this->approvedForConsumption === true && $this->inspectorId !== null) {
            return true;
        }
    else {
        return false;
    }
    }
}

$foodItem = new Food(new DateTime('2024-12-31'), true, 123);
if ($foodItem->isEdible()) {
                echo "The food is safe to eat.";
} else {


        echo "The food is not safe to eat.";
}
