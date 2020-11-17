<?php

namespace MDevGM;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase{
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
        $player = $this->getServer()->getPlayer($sender->getName());

    switch($cmd->getName()){
        case "gm1":
            if($sender instanceof Player){
                $sender->sendMessage("§l§bGM §r§8: §fYour gamemode was changed to creative!");
                $sender->setGamemode(1);
                }
            break;
        case "gm0":
            if($sender instanceof Player) {
                $sender->sendMessage("§l§bGM §r§8: §fYour gamemode was changed to survival!");
                $sender->setGamemode(0);
            }
            }
            return true;
    }
}