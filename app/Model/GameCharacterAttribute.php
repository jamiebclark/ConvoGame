<?php
/**
 * Attributes for Game Instances of each character
 *
 **/
class GameCharacterAttribute extends AppModel {
	public $name = 'GameCharacterAttribute';
	public $belongsTo = ['Attribute', 'GameCharacter'];
}