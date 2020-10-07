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
    
    //protected $signature = "hallo:world";

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
        
        $options = $this->options();
        if (file_exists($options['file'])) 
        {
            $query = sprintf("LOAD DATA LOCAL INFILE '%s' INTO TABLE test", $options['file']) .
        "
        FIELDS TERMINATED BY ';' ENCLOSED BY '\"' LINES TERMINATED BY '\r\n' IGNORE 1 LINES
        (@No, @Timestamp, @TitleCol, @ArtistCol, @Album, @Duration, @Played_DurationCol, @ProgramTitle, @Score, @Label, @ReleaseDate, @ACRIDCol, @ISRC, @ISWC, @UPC, @Deezer, @Spotify, @Youtube, @Composers, @Lyricists, @Publishers)
        SET Title=@TitleCol, Artist=@ArtistCol, Played_Duration=@Played_DurationCol, ACRID=@ACRIDCol;";

        //$query = sprintf("INSERT INTO test (Title, Played_Duration, Artist, ACRID) VALUES ('%s', %d, '%s', '%s')", "hello", 10000, "world", "absoadism");
        
            echo $query . "\r\n";
            try
            {

                $pdo = DB::connection()->getPdo();
                
                $recordCount = $pdo->exec($query);
    
                echo $recordCount . "\r\n";
                
                if (empty($recordCount) || $recordCount == 0)
                {
                    echo "Failed to import \r\n";
                }
                else
                {
                    echo sprintf("Succeded import: %d\r\n", $recordCount);
                }
            }
            catch (\Exception  $e)
            {
                dd($e->getMessage());
            }


                
        }

    }
}