<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator\Characters;

interface CharacterAttributeInterface extends BaseInterface
{
	public function getValue(): float;

	public function setValue( float $value ): void;
}
