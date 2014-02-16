<?php

namespace phpbbireland\portal\acp;

global $request, $phpEx, $k_config, $template;

$user->add_lang_ext('phpbbireland/portal', 'blocks/k_welcome');

$k_welcome_message = $k_config['k_welcome_message'];

if ($request->is_set_post('submit'))
{
	$k_welcome_message = $request->variable('k_welcome_message', '');
	$sgp_functions_admin->sgp_acp_set_config('k_welcome_message', $k_welcome_message);
}

$template->assign_var('S_K_WELCOME_MESSAGE', $k_welcome_message);
