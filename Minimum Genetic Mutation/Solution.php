<?php

class Solution {
    const DICT = ['A', 'C', 'G', 'T'];

    /**
     * @param String $start
     * @param String $end
     * @param String[] $bank
     * @return Integer
     */
    function minMutation($start, $end, $bank) {
        $res = 0;
        $bank = array_flip($bank);
        if (!isset($bank[$end])) return -1;
        $queue = [[$start, 0]];
        while ($queue) {
            list($gene, $steps) = array_shift($queue);
            for ($i = 0; $i < 8; $i++) {    
                foreach (self::DICT as $ch) {
                    if ($ch == $gene[$i]) continue;
                    $newGene = $gene;
                    $newGene[$i] = $ch;
                    if (isset($bank[$newGene])) {
                        $queue[] = [$newGene, $steps + 1];
                        if ($newGene == $end) return $steps + 1;
                    }
                }
            }
        }
        return -1;
    }
}