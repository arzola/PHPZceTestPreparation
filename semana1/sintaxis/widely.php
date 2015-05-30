<?php
$a = array(
	1 => 'php',
	'Hypertext',
	'Preprocessor',
	'widely used' =>
		array(
			'general' => 'purpose',
			'scripting' => 'language',
			'that' => 'was',
			'originally' =>
				array(
					'Web development',
					5 => 'designed',
					'Web development3',
					9 => 'for',
					'hola'=>'Web development3',
					'Web development2',
					4 => 'purpose',
				)
		)
);

echo $a['widely used']['originally'][10];