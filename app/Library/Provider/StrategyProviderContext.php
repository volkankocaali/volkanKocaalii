<?php

namespace App\Library\Provider;

class StrategyProviderContext {
    private $strategy = NULL;

    public function __construct($strategyId)
    {
        switch ($strategyId){
            case "IT":
                $this->strategy = new StrategyProviderIt();
            break;
            case "Business" :
                $this->strategy = new StrategyProviderBusiness();
            break;
        }
    }
    public function list($data): array
    {
        return $this->strategy->format($data);
    }
}
