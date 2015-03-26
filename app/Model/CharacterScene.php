<?php
/**
 * The placement of a character within a scene
 *
 **/
class CharacterScene extends AppModel {
	public $name = 'CharacterScene';
	public $actsAs = [
		'ParseCode' => ['fields' => ['scene_init_code']],
	];
	public $belongsTo = ['Character', 'Scene'];
}