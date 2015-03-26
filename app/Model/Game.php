<?php
class Game extends AppModel {
	var $name = 'Game';
	var $belongsTo = array(
		'World',
		'Player', 
		'Scene', 
	);
}