<?php
/**
 * An instance of an item within a game
 *
 **/
class GameItem extends AppModel {
	public $name = 'GameItem';
	public $belongsTo = ['Game', 'Item', 'Scene'];
}