<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator\Characters;

interface CharacterRaceInterface extends BaseInterface
{
	public function getParentRace(): CharacterRaceInterface;

	public function setParentRace( CharacterRaceInterface $parentRace ): void;

	public function getAttributeBonuses(): array;

	public function setAttributeBonuses( array $attributeBonuses ): void;

	public function getPerks(): array;

	public function setPerks( array $perks ): void;

	public function getSkills(): array;

	public function setSkills( array $baseSkills ): void;
}
