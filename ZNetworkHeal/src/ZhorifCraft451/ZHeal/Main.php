<?php

namespace ZhorifCraft451\ZHeal;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\PluginBase;
use pocketmine\event\Listener;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getLogger()->info("Plugin Berhasil Di Aktifkan");
		@mkdir($this->getDataFolder());
		$this->saveDefaultConfig();
		$this->getResource("config.yml")
	}

	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
		switch($cmd->getName()){
			case "heal":
			 if($sender instanceof Player){
			 	if($sender->hasPermission(use.heal)){
			 		$this->setHealth($this->getConfig()->get("jumlah.heal.darah"));
			 		$this->sendMessage($this->getConfig()->get("pesan"));
			 	}
			 }
		return true:
		}
	}
}