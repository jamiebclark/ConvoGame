<?php
class Character extends AppModel {
	var $name = 'Character';
	var $hasAndBelongsToMany = array('Conversation');
}