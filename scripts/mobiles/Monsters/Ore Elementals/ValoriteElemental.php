<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class ValoriteElemental extends Mobile {
	public function summon() {
		$this->name = "a valorite elemental";
		$this->body = 112;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(226, 255);
		$this->dex = rand(126, 145);
		$this->int = rand(71, 92);
		$this->maxhits = rand(136, 153);
		$this->hits = $this->maxhits;
		$this->damage = 0;
		$this->damageMax = 0;
		$this->resist_physical = rand(65, 75);
		$this->resist_fire = rand(50, 60);
		$this->resist_cold = rand(50, 60);
		$this->resist_poison = rand(50, 60);
		$this->resist_energy = rand(40, 50);
		$this->karma = -3500;
		$this->fame = 3500;
		$this->virtualarmor = 38;

}}
?>
