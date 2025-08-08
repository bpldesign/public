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
	),
	'timeline-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/timeline-block',
		'version' => '0.1.0',
		'title' => 'Timeline Event Block',
		'category' => 'widgets',
		'icon' => 'format-gallery',
		'description' => 'Add a new event to the timeline.',
		'example' => array(
			
		),
		'parent' => array(
			'create-block/timeline-frame'
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			
		),
		'textdomain' => 'bpl-custom-block-party',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'timeline-frame' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/timeline-frame',
		'version' => '0.1.0',
		'title' => 'Timeline Builder',
		'category' => 'widgets',
		'icon' => 'format-gallery',
		'description' => 'Build a timeline of events with this block.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'allowedBlocks' => array(
			'create-block/timeline-block'
		),
		'attributes' => array(
			
		),
		'textdomain' => 'bpl-custom-block-party',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
