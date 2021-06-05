<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator\Characters;

interface CharacterPerkInterface extends BaseInterface
{
	public function getPerkableTargetMappings(): array;

	public function setPerkableTargetMappings( array $perkableTargetMappings ): void;
}
