<?php

class Solution
{

	/**
	 * @param String $s
	 * @return Boolean
	 */
	function isValid($s)
	{
		$tmp = [];
		foreach (str_split($s) as $ch) {
			if (in_array($ch, ['(', '[', '{'])) {
				switch ($ch) {
					case '(':
						$tmp[] = ')';
						break;
					case '[':
						$tmp[] = ']';
						break;
					case '{':
						$tmp[] = '}';
						break;
				}
			} else {
				$open = array_pop($tmp);
				if ($open != $ch) {
					return false;
				}
			}
		}
		return empty($tmp);
	}
}
