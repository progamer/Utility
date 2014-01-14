<?php
CroogoNav::add ( 'settings.children.clear_cache', array (
		'title' => 'Celar Cache',
		'url' => array (
				'admin' => true,
				'plugin' => 'utility',
				'controller' => 'utilities',
				'action' => 'clear_cache' 
		) 
) );