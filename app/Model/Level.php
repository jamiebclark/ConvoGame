<?php
class Level extends AppModel {
	var $name = 'Level';
	var $hasMany = array('Scene');
	var $belongsTo = array('World');
}