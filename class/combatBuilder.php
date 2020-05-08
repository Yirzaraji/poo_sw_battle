<?php
include 'Personnage.php';

function personnagesCombat($attacker, $target)
{

    for ($i = 0; $i <= $target->vie && $attacker->vie; $i++) {
        echo '<p>' . $attacker->name . ' attaque ' . $target->name . ' ' . $attacker->atak($target) . ' lui infligeant ' . $attacker->atak . ' point de degats baissant ses points de vie a ' . $target->vie . ' </p>';
        echo '<p>' . $target->name . ' contre attaque en lui infligeant ' . $target->atak . ' ' .
        $target->atak($attacker) . ' point de degats ';
    }

    if ($target->dead()) {
        echo " puis, il se soigne et recupere " . $target->setVie() . ' points de vie</p>';
    } else {
        echo $target . " a survecu, il lui reste " . $target->vie . " de vie";
    }

    if ($attacker->dead()) {
        echo " <p> " . $attacker->name . " est morte</p>";
    } else {
        echo " <p> " . $attacker->name . " a survecu avec " . $attacker->vie . " de vie</p>";
    }

}

//var_dump(personnageResponse($Ashsoka, $Revan));
