<?php
/**
 * An interactive person within the Game World
 * 
 **/
class Character extends AppModel {
	public $name = 'Character';
	public $actAs = [
		'ParseCode' => ['fields' => ['construct_code']]
	];
	public $hasMany = [
		'CharacterAttribute',
		'CharacterScene',
		'GameCharacter',
	];
	public $belongsTo = ['World'];

	public $hasAndBelongsToMany = [
		'Attribute' => ['with' => 'CharacterAttribute'],
		'Game' => ['with' => 'GameCharacter'],
		'Scene' => ['with' => 'CharacterScene'],
	];
}