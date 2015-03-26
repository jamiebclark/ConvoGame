<?php
/**
 * Attribute values for Characters
 *
 **/
class Attribute extends AppModel {
	public $name = 'Attribute';
	public $actsAs = [
		'ParseCode' => [
			'fields' => ['min_value_code', 'max_value_code'],
		]
	];

	public $hasMany = ['CharacterAttribute', 'GameCharacterAttribute'];
	public $belongsTo = ['World'];
	public $hasAndBelongsToMany = [
		'Character' => ['with' => 'CharacterAttribute'],
		'GameCharacter' => ['with' => 'GameCharacterAttribute'],
	];
}