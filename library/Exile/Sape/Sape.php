<?php

class Exile_Sape_Sape
{
	public static function showCode()
	{
		$options = XenForo_Application::getOptions();

		if (!defined('_SAPE_USER')) {
			define('_SAPE_USER', $options->exile_sape_id);
		}

		if ($options->exile_sape_id) {
			require_once(realpath($_SERVER['DOCUMENT_ROOT'] . '/' . $options->exile_sape_id . '/sape.php'));
			$sape = new SAPE_client(array('charset' => 'UTF-8', 'force_show_code' => true));
			echo $sape->return_block_links();
		} else {
			echo '';
		}
	}
}