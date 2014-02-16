<?php

namespace phpbbireland\portal\acp;

global $request, $phpEx, $k_config, $template;

$user->add_lang_ext('phpbbireland/portal', 'blocks/k_news');
//echo '<pre>'; print_r($k_config);
if ($request->is_set_post('submit'))
{
	$k_news_allow            = request_var('k_news_allow', 1);
	$k_news_item_max_length  = request_var('k_news_item_max_length', 0);
	$k_news_items_to_display = request_var('k_news_items_to_display', 5);
	$k_news_type             = request_var('k_news_type', 0);
/*
	switch ($k_news_type)
	{
		case 4:  $k_news_type = POST_NEWS;
		break;

		case 5:  $k_news_type = POST_NEWS_GLOBAL;
		break;

		default: $k_news_type = 0;
		break;
	}
*/

	$sgp_functions_admin->sgp_acp_set_config('k_news_allow', $k_news_allow);
	$sgp_functions_admin->sgp_acp_set_config('k_news_item_max_length', $k_news_item_max_length);
	$sgp_functions_admin->sgp_acp_set_config('k_news_items_to_display', $k_news_items_to_display);
	$sgp_functions_admin->sgp_acp_set_config('k_news_type', $k_news_type);
}
else
{
	$k_news_allow            = $k_config['k_news_allow'];
	$k_news_item_max_length  = $k_config['k_news_item_max_length'];
	$k_news_items_to_display = $k_config['k_news_items_to_display'];
	$k_news_type             = $k_config['k_news_type'];
}

$template->assign_vars(array(
	'S_K_NEWS_ALLOW'            => $k_news_allow,
	'S_K_NEWS_ITEM_MAX_LENGTH'  => $k_news_item_max_length,
	'S_K_NEWS_ITEMS_TO_DISPLAY' => $k_news_items_to_display,
	'S_K_NEWS_TYPE'             => $k_news_type,
));
