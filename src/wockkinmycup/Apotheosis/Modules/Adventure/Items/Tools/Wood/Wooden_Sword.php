<?php

namespace wockkinmycup\Apotheosis\Modules\Adventure\Items\Tools\Wood;

use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemTypeIds;
use pocketmine\item\Sword;
use pocketmine\item\Tool;
use pocketmine\item\ToolTier;
use pocketmine\item\VanillaItems;
use pocketmine\utils\Config;

class Wooden_Sword extends Sword {

    /** @var Config */
    private Config $config;

    private string $affixType;

    public function __construct(Config $config, string $affixType) {
        parent::__construct(new ItemIdentifier(ItemTypeIds::WOODEN_SWORD), VanillaItems::WOODEN_SWORD()->getVanillaName(), ToolTier::WOOD());
        $this->config = $config;
        $this->affixType = $affixType;
    }

    public function getMaxDurability(): int
    {
        $maxDurability = 60;

        if ($this->config->exists("affix_attributes." . $this->affixType)) {
            $affixAttributes = $this->config->get("affix_attributes." . $this->affixType);

            if (isset($affixAttributes["decrease_durability"])) {
                $maxDurability -= $affixAttributes["decrease_durability"];
            } elseif (isset($affixAttributes["increase_durability"])) {
                $maxDurability += $affixAttributes["increase_durability"];
            }
        }

        return $maxDurability;
    }
}
