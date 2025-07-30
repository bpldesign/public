<?php
// This file is generated. Do not modify it manually.
return array(
	'compare-img-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/compare-img-block',
		'version' => '0.1.0',
		'title' => 'Compare Img Block',
		'category' => 'widgets',
		'icon' => 'format-gallery',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'imageUrlOne' => array(
				'type' => 'string'
			),
			'imageUrlTwo' => array(
				'type' => 'string'
			),
			'imageAltOne' => array(
				'type' => 'string'
			),
			'imageAltTwo' => array(
				'type' => 'string'
			)
		),
		'textdomain' => 'bpl-custom-block-party',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
