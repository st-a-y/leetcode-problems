<?php

class Solution
{

	/**
	 * @param String[] $strs
	 * @return String
	 */
	function longestCommonPrefix($strs)
	{
		$res = reset($strs);
		for ($i = 0; $i < count($strs) && $res; $i++) {
			while ($res && !str_starts_with($strs[$i], $res)) {
				$res = substr($res, 0, strlen($res) - 1);
			}
		}
		return $res;
	}
}
