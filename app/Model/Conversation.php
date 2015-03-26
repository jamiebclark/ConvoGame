<?php
class Conversation extends AppModel {
	var $name = 'Conversation';
	var $hasAndBelongsToMany = array('Interaction');
}