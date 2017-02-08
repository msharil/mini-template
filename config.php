<?php
error_reporting(0);

$params = array (
			'appName' => 'Sistem Pendahuluan Pinjaman Pelajar',
			'today' => date('d M Y')
		);

$sidebar = array(
			'Dashboard' => array('url' => 'dashboard.php#', 'icon' => 'fa fa-dashboard fa-2x'),
			'Admin' => array('url' => 'admin.php#', 'icon' => 'fa fa-qrcode fa-2x'),
			'Modul 1' => array('url' => 'admin.php#', 'icon' => 'fa fa-desktop fa-2x'),
			'Modul 2' => array('url' => 'admin.php#', 'icon' => 'fa fa-table fa-2x'),
			'Modul 3' => array('url' => 'admin.php#', 'icon' => 'fa fa-edit fa-2x'),
			'Sub Modul' => array(				
				'icon' => 'fa fa-sitemap fa-2x',
				'sub' => 
							array('url' => 'abc#', 'linkName' => 'Sub 01'),
				//		 	array('url' => 'abc#', 'linkName' => 'Sub 01'),
				
			),
			'Admin' => array('url' => 'admin.php#', 'icon' => 'fa fa-edit fa-2x'),
		);
?>