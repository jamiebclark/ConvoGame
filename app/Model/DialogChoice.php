<?php
/**
 * An option within a Dialog tree
 *
 **/
class DialogChoice extends AppModel {
	public $name = 'DialogChoice';
	public $actsAs = [
		'ParseCode' => ['fields' => ['init_code', 'selected_code']],
	];
	public $belongsTo = ['Dialog'];
}