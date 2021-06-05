<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator\Characters;

interface CharacterSkillInterface extends BaseInterface
{
	public function getBaseSkills(): array;

	public function setBaseSkills( array $baseSkills ): void;

	public function getValue(): float;
}
