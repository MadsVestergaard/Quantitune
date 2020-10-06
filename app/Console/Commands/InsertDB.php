<?php
namespace App\Console\Commands;


use DB;
use Eloquent;
use Illuminate\Console\Command;


class InsertDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'model:import {--file=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports the model into the system';

    private $import_path;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->import_path = base_path() . "/import";
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    
     public function handle()
    {
        echo "Hello world!";
    }
}