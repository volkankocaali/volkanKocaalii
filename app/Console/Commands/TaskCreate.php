<?php

namespace App\Console\Commands;

use App\Library\Provider\ProviderFacade;
use App\Library\Provider\StrategyProviderContext;
use App\Repositories\Provider\ProviderRepositoryInterface;
use App\Repositories\Task\TaskRepositoryInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class TaskCreate extends Command
{
    /**
     * @var object
     */
    public $taskRepository;
    public $providerRepository;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:task';



    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Task fetching database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(TaskRepositoryInterface $taskRepository,ProviderRepositoryInterface $providerRepository)
    {
        parent::__construct();
        $this->taskRepository = $taskRepository;
        $this->providerRepository = $providerRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = $this->providerRepository->all();
        $this->taskRepository->truncate();

        foreach ($response as $item) {
            $objectCreate = ProviderFacade::create($item->provider_name,$item->provider_url);
            $httpRequest = Http::get($objectCreate->getUrl())->json();

            $strategyContextIT = new StrategyProviderContext($objectCreate->getName());
            $task = $strategyContextIT->list($httpRequest);

            foreach ($task as $taskItem) {
                $this->taskRepository->create($taskItem);
            }
        }
    }
}
