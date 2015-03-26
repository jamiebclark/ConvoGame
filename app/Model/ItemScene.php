<?php
/**
 * The placement of a item within a scene
 *
 **/
class ItemScene extends AppModel {
	public $name = 'ItemScene';
	public $actsAs = [
		'ParseCode' => ['fields' => ['scene_init_code']],
	];
	public $belongsTo = ['Item', 'Scene'];
}