<?php
/**
 * An instance of dialog within a scene
 *
 **/
class Dialog extends AppModel {
	public $name = 'Dialog';
	public $belongsTo = ['World'];
	public $hasMany = ['DialogChoice'];
}