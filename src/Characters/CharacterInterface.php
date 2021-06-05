<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator\Characters;

interface CharacterInterface extends BaseInterface
{
	public function getGender(): string;

	public function setGender( string $gender ): void;

	public function getSize(): float;

	public function setSize( float $size ): void;

	public function getAge(): int;

	public function setAge( int $age ): void;

	public function getWeight(): float;

	public function setWeight( float $weight ): void;

	public function getEyeColor(): string;

	public function setEyeColor( string $eyeColor ): void;

	public function getHairColor(): string;

	public function setHairColor( string $hairColor ): void;

	public function getSkinColor(): string;

	public function setSkinColor( string $skinColor ): void;

	public function getHandedness(): string;

	public function setHandedness( string $ambidexterity ): void;

	public function getTrivias(): array;

	public function setTrivias( array $trivias ): void;

	public function getFactions(): array;

	public function setFactions( array $factions ): void;
}
