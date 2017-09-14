<?php
namespace Application\Controllers;

class Controller {
    private $unlocked = false;
    private $user;

    public function __construct($user) {
        if (isset($user)) {
            if ($this->$user = $user) {
                return $unlocked = true;
            } else {
                return $unlocked = false;
            }
        } else {
            return $unlocked = false;
        }
        return 0;
    }

    public function isUnlocked() {
        if ($this->$unlocked == true) {
            return echo('Está Desbloqueado!');
        } else {
            return echo('Está Bloqueado.');
        }
    }
}

?>
