<?php
class Interaction extends AppModel {
	var $name = 'Interaction';
	var $hasMany = array('Conversation');
	var $belongsTo = array('Scene');
	
	var $types = array(
		0 => 'Conversation',
		1 => 'Use Object',
		2 => 'Pick up Object',
		3 => 'Scene',
	);
}	