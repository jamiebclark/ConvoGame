<?php
class Scene extends AppModel {
	var $name = 'Scene';
	var $hasMany = array('Interaction');
	var $belongsTo = array('World');
}