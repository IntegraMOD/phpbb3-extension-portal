<?php
		global $table_prefix, $phpbb_root_path;

		define('WELCOME_MESSAGE', 1);
		define('UN_ALLOC_MENUS', 0);
		define('NAV_MENUS', 1);
		define('SUB_MENUS', 2);
		define('HEAD_MENUS', 3);
		define('FOOT_MENUS', 4);
		define('LINKS_MENUS', 5);
		define('ALL_MENUS', 90);
		define('UNALLOC_MENUS', 99);
		define('OPEN_IN_TAB', 1);
		define('OPEN_IN_WINDOW', 2);

		define('K_CONFIG_TABLE',			$table_prefix . 'k_config');
		define('K_MENUS_TABLE',				$table_prefix . 'k_menus');
		define('K_BLOCKS_TABLE',			$table_prefix . 'k_blocks');
		define('K_VARIABLES_TABLE',			$table_prefix . 'k_variables');
		define('K_NEWSFEEDS_TABLE',			$table_prefix . 'k_newsfeeds');
		define('K_RESOURCES_TABLE',			$table_prefix . 'k_resources');
		define('K_PAGES_TABLE',				$table_prefix . 'k_pages');
		define('K_DONATIONS_TABLE',			$table_prefix . 'k_donations');
		define('K_YOUTUBE_TABLE',			$table_prefix . 'k_youtube');
		define('K_ACRONYMS_TABLE',			$table_prefix . 'k_acronyms');

		$ext = 'ext/phpbbireland/portal/';
		// works for now //
		$img_path_acp_block_icons	= $phpbb_root_path . $ext . 'images/block_images/block/';
		$img_path_acp_menu_icons	= $phpbb_root_path . $ext . 'images/block_images/menu/';
		$img_path_acp_icons			= $phpbb_root_path . $ext . 'adm/images/';
		$portal_js					= $phpbb_root_path . $ext . 'js/portal.js';
		$css_path_acp				= $phpbb_root_path . $ext . 'adm/style/';