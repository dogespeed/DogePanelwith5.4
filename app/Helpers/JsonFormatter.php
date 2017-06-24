<?php

if (!function_exists('formatter')) {

	/**
	 * description
	 *
	 * @param
	 * @return
	 */
	function formatter($code = 200, $message = 'success', $data = NULL)
	{
		return response()
			->json([
				'code'    => $code,
				'message' => $message,
				'data'    => $data,
			]);
	}
}
