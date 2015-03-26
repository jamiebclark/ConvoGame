<?php
class Player extends AppModel {
	var $name = 'Player';
	var $hasMany = array('Game');
}