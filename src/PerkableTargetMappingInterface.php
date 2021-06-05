<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator;

interface PerkableTargetMappingInterface
{
	public function getPerkableTarget(): PerkableTargetInterface;

	public function setPerkableTarget( PerkableTargetInterface $perkableTarget ): void;

	public function getValue();

	public function setValue( $value );
}
