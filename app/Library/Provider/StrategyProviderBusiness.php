<?php

namespace App\Library\Provider;

class StrategyProviderBusiness implements StrategyProviderInterface{

    /**
     * @param $data
     * @return array
     */
    public function format($data)
    {
        $returnData = array();
        foreach ($data as $item) {
            foreach ($item as $key => $var){
                $returnData[] = [
                    'name' => $key,
                    'level' => $var['level'],
                    'time' => $var['estimated_duration'],
                ];
            }
        }
        return $returnData;
    }
}
