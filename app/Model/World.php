<?php
/**
 * The overall universe the different game instances exist within
 *
 **/
class World extends AppModel {
	public $name = 'World';
	public $hasMany = [
		'Attribute',
		'Character', 
		'Dialog',
		'Game', 
		'Item',
		'Scene',
	];
}