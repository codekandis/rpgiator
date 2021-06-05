<?php declare( strict_types = 1 );
namespace CodeKandis\RPGiator;

interface PerkableTargetInterface
{
	public function computeByPerk( $value );
}
