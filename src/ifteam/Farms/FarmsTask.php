<?php
namespace ifteam\Farms;

use pocketmine\scheduler\PluginTask;

class FarmsTask extends PluginTask {
	public function __construct(Farms $owner) {
		parent::__construct ( $owner );
	}
	public function onRun(int $currentTick) {
		$this->getOwner()->tick();
	}
}