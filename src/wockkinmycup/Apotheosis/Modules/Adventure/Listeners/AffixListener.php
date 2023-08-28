<?php

namespace wockkinmycup\Apotheosis\Modules\Adventure\Listeners;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Listener;
use wockkinmycup\Apotheosis\Utils\Utils;

class AffixListener implements Listener {

    public function onDamage(EntityDamageByEntityEvent $e) {
        $damager = $e->getDamager();
        $victim = $e->getEntity();
        // TODO: implement affix damage buff
        // TODO: implement dffix damage reduction
        // TODO: implement affix damage deduction/increase the amount of damage taken if affix is "Poor" or lower
    }
}
