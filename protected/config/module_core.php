<?php
/**
 * Basic Modules information
 *
 * Modules:
 *	gii
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu
 * @contact (+62)856-299-4114
 *
 */
return array(
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'     => 'system.gii.GiiModule',
            'generatorPaths'=>array(
                'application.libraries.gii',
            ),
			'password'  => '0o9i8u7y',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters' => array('127.0.0.1','::1'),
		),
	)
);
