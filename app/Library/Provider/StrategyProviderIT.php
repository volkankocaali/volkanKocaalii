<?php

namespace App\Library\Provider;

class StrategyProviderIT implements StrategyProviderInterface{

    /**
     * @param $data
     * @return array
     */
    public function format($data): array
    {
        $returnData = array();
        foreach ($data as $item) {
            $returnData[] = [
                'name' => $item['id'],
                'level' => $item['zorluk'],
                'time' => $item['sure'],
            ];
        }
        return $returnData;
    }
}
