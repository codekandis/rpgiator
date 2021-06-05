<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator\Characters;

interface CharacterMutableSkillInterface extends CharacterSkillInterface
{
	public function setValue( float $value ): void;

	public function addValue( float $value ): void;

	public function subtractValue( float $value ): void;
}
