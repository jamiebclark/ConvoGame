<?php
/**
 * Connects Characters to their Attributes
 *
 **/
class CharacterAttribute extends AppModel {
	public $name = 'CharacterAttribute';
	public $actsAs = [
		'ParseCode' => [
			'fields' => ['min_value_code', 'max_value_code'],
		]
	];
	
	public $belongsTo = ['Character', 'Attribute'];
}