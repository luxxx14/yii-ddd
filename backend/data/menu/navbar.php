<?php

return [
	'mainMenu' => [
		[
			'label' => ['admin', 'main'],
		],
		/*'yii2module\article\admin\helpers\Menu',
        'yubundle\storage\admin\helpers\Menu',
		[
			'label' => ['admin', 'system'],
		],
		'yii2lab\applicationTemplate\backend\helpers\Menu',
		'yii2lab\notify\admin\helpers\Menu',
		'yii2lab\rbac\admin\helpers\Menu',
		[
			'label' => ['admin', 'develop'],
		],
		'yii2lab\applicationTemplate\backend\helpers\ToolsMenu',
		'yii2tool\vendor\admin\helpers\Menu',
        'backend\modules\mail\helpers\Menu',*/
        'yubundle\reference\admin\helpers\Menu',
        'yubundle\staff\admin\helpers\Menu',
	],
];