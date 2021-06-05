<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator\Characters;

interface BaseInterface
{
	public function getId(): string;

	public function setId( string $id ): string;

	public function getName(): string;

	public function setName( string $name ): void;

	public function getDescription(): string;

	public function setDescription( string $description ): void;
}
