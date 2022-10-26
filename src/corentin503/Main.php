<?php

namespace corentin503;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getLogger()->info("AntiFallDamage de corentin503 activé !");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDamage(EntityDamageEvent $event)
    {
        $player = $event->getEntity();

        if ($player instanceof Player) {
            if ($event->getCause() === EntityDamageEvent::CAUSE_FALL) {
                $event->cancel();
            }
        }
    }
}