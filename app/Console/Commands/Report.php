<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Report extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hourly job report';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->info('Dang tao bao cao');
    }
}
