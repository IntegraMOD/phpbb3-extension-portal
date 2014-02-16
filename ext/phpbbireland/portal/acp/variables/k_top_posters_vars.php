<?php

namespace phpbbireland\portal\acp;

global $request, $phpEx, $k_config, $template;

$user->add_lang_ext('phpbbireland/portal', 'blocks/k_recent_topics');

$k_top_posters_to_display = $k_config['k_top_posters_to_display'];

if ($request->is_set_post('submit'))
{
	$k_top_posters_to_display = request_var('k_top_posters_to_display', 10);
	$sgp_functions_admin->sgp_acp_set_config('k_top_posters_to_display', $k_top_posters_to_display);
}

$template->assign_vars(array(
	'S_K_TOP_POSTERS_TO_DISPLAY' => $k_top_posters_to_display,
));
