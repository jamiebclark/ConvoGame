<?php
/**
 * Interactble Items within a World
 *
 **/
class Item extends AppModel {
	public $name = 'Item';
	public $actAs = [
		'ParseCode' => ['fields' => ['construct_code']]
	];
	public $hasMany = [
		'ItemScene',
		'GameItem',
	];
	public $belongsTo = ['World'];

	public $hasAndBelongsToMany = [
		'Game' => ['with' => 'GameItem'],
		'Scene' => ['with' => 'ItemScene'],
	];
}