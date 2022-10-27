<?php

class Solution {

    /**
     * @param String[] $arr
     * @return Integer
     */
    function maxLength($arr) {
		$offset = ord('a');
		$uniq = [];
		foreach ($arr as $value) {
			$item = 0;
			for ($i = 0; isset($value[$i]); $i++) {
				$char = 1 << (ord($value[$i]) - $offset);
				if ($item & $char) continue 2;
				$item = $item | $char;
			}
			$uniq[] = $item;
		}

		$res = 0;
		$strings = [0];
		foreach ($uniq as $value) {
			for ($i = count($strings) - 1; $i >= 0; $i--) {
				if (($strings[$i] & $value) == 0) {
					$item = $value | $strings[$i];
					array_push($strings, $item);
					$res = max($res, $this->countBits($item));
				}
			}
		}
		return $res;
    }

	protected function countBits($num) {
		$count = 0;
        while ($num) {
            $count += $num & 1;
			$num = $num >> 1;
        }
		return $count;
	}
}
