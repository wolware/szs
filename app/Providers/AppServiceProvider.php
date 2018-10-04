<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->addDBALTypes();
    }


    public function addDBALTypes()
    {
        $connection = DB::connection();
        if (App::runningInConsole()) {
            //workaround for php artisan migrate --database=
            if (isset($_SERVER['argv'][2]) && strpos($_SERVER['argv'][2], '--database=') !== false) {
                $connection = DB::connection(str_replace('--database=', '', $_SERVER['argv'][2]));
            }
        }
        $doctrineConnection = $connection->getDoctrineConnection();
        $dbPlatform = $doctrineConnection->getSchemaManager()->getDatabasePlatform();
        foreach (config('database.types_mapping', []) as $dbType => $doctrineType) {
            $dbPlatform->registerDoctrineTypeMapping($dbType, $doctrineType);
        }
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
