<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use SplFileObject;
use App\Models\PostalCode;

class ImportPostalCodeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:postal-code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import postal-code';

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
     * @return int
     */
    public function handle()
    {
        PostalCode::truncate();

        $csv_path = storage_path('app\csv\x-ken-all.csv');

        $put_csv_path = storage_path('app\csv\postal_code.csv');

        file_put_contents($put_csv_path, str_replace("\"", "", file_get_contents($csv_path)));

        $file = new SplFileObject($put_csv_path);

        $file->setFlags(SplFileObject::READ_csv);

        foreach ($file as $row) {
            mb_convert_variables("UTF-8", "sjis-win", $row);
            if (!is_null($row[0])) {
                Postal_Code::create([
                    'first_code' => substr($row[2], 0, 3),
                    'last_code' => substr($row[2], 3, 4),
                    'prefecture' => $row[6],
                    'city' => $row[7],
                    'address' => $row[8]
                ]);
            }
        }
    }
}
