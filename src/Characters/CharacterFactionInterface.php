<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator\Characters;

interface CharacterFactionInterface extends BaseInterface
{
	public function getParentFaction(): CharacterFactionInterface;

	public function setParentFaction( CharacterFactionInterface $parentFaction ): void;

	public function getRequirements(): array;

	public function setRequirements( array $requirements ): void;

	public function getConstraints(): array;

	public function setConstraints( array $constraints ): void;

	public function getPerks(): array;

	public function setPerks( array $perks ): void;
}
