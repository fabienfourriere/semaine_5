<?php

require_once "./classes/Directeur.class.php";

use PHPUnit\Framework\TestCase;

class DirecteurTest extends TestCase {

    public function ancienneted(int $nbanneesd)
    {
        echo "Le directeur a une ancienneté de ".$nbanneesd." années.<br>";
    }

    public function primed(int $sommed){
        $sommed = (0.07 * $_salaire) + (0.03 * $_date);
        $jourd = dated('30-11-y');
echo "Le directeur reçoit la somme de" .$sommed. "à la date du" .$jourd ;
    }

}

?>