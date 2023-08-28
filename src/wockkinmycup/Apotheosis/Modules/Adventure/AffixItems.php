<?php

namespace wockkinmycup\Apotheosis\Modules\Adventure;

use pocketmine\item\Item;
use wockkinmycup\Apotheosis\Utils\Utils;

class AffixItems {

    public function getAffixEffects() : array {
        return Utils::affixConfig()->get("affix_effects");
    }

    public function applyAffixesToItem(Item $item, string $rarity) {
        $affixEffects = $this->getAffixEffects();

        if (isset($affixEffects[$rarity])) {
            $selectedAffixes = $affixEffects[$rarity];
            foreach ($selectedAffixes as $affixType => $affixData) {
                // TODO: Apply the affix effect to the item
                // TODO: Modify the item's stats based on the affix data

                /*$itemName = $affixType . " " . $item->getName();
                  $item->setCustomName($itemName);*/
            }
        }
    }
}
