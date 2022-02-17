<?php

namespace Star\RulesAPI;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {

    public function onEnable(): void{
        $this->getLogger()->info("RulesAPI is activated");
    }
    
    public function onDisable(): void{
        $this->getLogger()->info("RulesAPI is unactivated");
    }
}