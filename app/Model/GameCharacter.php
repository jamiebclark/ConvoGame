<?php
/**
 * An instance of a character within a game
 *
 **/
class GameCharacter extends AppModel {
	public $name = 'GameCharacter';
	public $belongsTo = ['Game', 'Character', 'Scene'];
}