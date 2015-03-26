<?php
echo $this->Form->create();
echo $this->Form->hidden('id');
echo $this->Form->input('title');
echo $this->Form->input('description');
echo $this->Form->input('construct_code', array('class' => 'parsecode'));
echo $this->Form->end('Update');