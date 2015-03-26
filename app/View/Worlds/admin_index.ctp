<?php
foreach ($worlds as $world):
	$url = array('action' => 'view', $world['World']['id']);
	$this->Table->cells(array(
		array(
			$this->Html->link(
				$world['World']['title'],
				$url
			)
		)
	), true);
endforeach;
echo $this->Table->output();