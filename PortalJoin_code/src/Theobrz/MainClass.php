<?php

namespace Theobrz;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerMoveEvent;

class MainClass extends PluginBase implements Listener{
	
  public function onEnable(){
		
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
		
}
		
  public function onJoin(PlayerMoveEvent $event){
    $player = $event->getPlayer();
			
    $block = $player->getLevel()->getBlock($player->floor()->subtract(0, 1));
			
 if($block->getId() == 70){
				
    $player->getServer()->dispatchCommand($player, "sw join");
    
  }
 }
}