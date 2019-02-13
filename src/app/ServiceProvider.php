<?php
namespace BasicStructeMod;

use App\Http\Kernel;
use BasicStructeMod\Console\BasicCommand;
use BasicStructeMod\Middleware\BasicMiddleware;
use Illuminate\Console\Scheduling\Schedule;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function register()
    {
        $app = \Illuminate\Foundation\AliasLoader::getInstance();

        #DEFININDO VARIAVEIS DE CONFIGURACOES
        $this->mergeConfigFrom(__DIR__ . '/config/basic.php'        , 'grandchef');
        $this->mergeConfigFrom(__DIR__ . '/config/database_conn.php', 'database.connections');

        #CARREGANDO ROTAS
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

        #FACADES
        $app->alias('BasicFacades', 'BasicStructeMod\Facades\BasicFacades');

        #CONSOLE
        $this->commands([
            BasicCommand::class,
        ]);

        $this->app->singleton('MyCript', function () {
            return $this->app->make('BasicStructeMod\App\MyClass\MyCript');
        });

    }

    public function boot()
    {
        #CRIANDO MIDDLE
        $this->registerMiddleware( 'basic-middle',BasicMiddleware::class);

        #CARREGANDO TRADUCOES
        $this->loadTranslationsFrom(__DIR__.'/translations', 'Basiclang');
        
        #ADD COMMAND KERNEL queue:run
        $this->app->booted(function () {
            $schedule = $this->app->make(Schedule::class);
            $schedule->command('COMMAND_NAME:BASIC')->everyMinute()->withoutOverlapping();
        });
    }

    protected function registerMiddleware($name, $middleware)
    {
        $kernel = $this->app[Kernel::class];
        $kernel->pushMiddleware($middleware);
        \Route::pushMiddlewareToGroup($name, $middleware);
    }

}
