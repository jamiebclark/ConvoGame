<?php
class World extends AppModel {
	var $name = 'World';
	var $hasMany = array('Level');
}