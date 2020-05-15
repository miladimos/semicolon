<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name:Name of RepositoryPattern} {--model=?}' ;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New Repository Pattern files for your Model';


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
     * @return mixed
     */
    public function handle()
    {
        return print('Test Repo');
    }
}
