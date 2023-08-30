<?php

namespace wockkinmycup\Apotheosis\Utils;

use pocketmine\utils\Config;
use wockkinmycup\Apotheosis\Loader;

class Utils {

    public static function getConfig() : Config {
        return new Config(Loader::getInstance()->getDataFolder() . "config.yml");
    }
    
    public static function affixConfig() : Config {
        return new Config(Loader::getInstance()->getDataFolder() . "affix.yml");
    }
}
