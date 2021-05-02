<?php
namespace App\Repositories\Provider;

use App\Models\Provider;

class ProviderRepository implements ProviderRepositoryInterface {

    public $model;

    public function __construct(Provider $provider)
    {
        $this->model = $provider;
    }

    public function all()
    {
        return $this->model->all();
    }

}
