<?php
/**
 * The individual scenes (think rooms of a house) that make up a world
 *
 **/
class Scene extends AppModel {
	public $name = 'Scene';
	public $actsAs = [
		'ParseCode' => [
			'fields' => ['scene_init_code'],
			'mixedFields' => ['description'],
		]
	];

	public $hasMany = [
		'Character', 
		'Item',
		'CharacterScene',
	];
	public $belongsTo = ['World'];
	public $hasAndBelongsToMany = [
		'Character' => ['with' => 'CharacterScene'],
	];
}