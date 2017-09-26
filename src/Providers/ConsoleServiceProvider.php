<?php

namespace Nwidart\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Nwidart\Modules\Commands\CommandMakeCommand;
use Nwidart\Modules\Commands\ControllerMakeCommand;
use Nwidart\Modules\Commands\DisableCommand;
use Nwidart\Modules\Commands\DumpCommand;
use Nwidart\Modules\Commands\EnableCommand;
use Nwidart\Modules\Commands\GenerateEventCommand;
use Nwidart\Modules\Commands\GenerateJobCommand;
use Nwidart\Modules\Commands\GenerateListenerCommand;
use Nwidart\Modules\Commands\GenerateMailCommand;
use Nwidart\Modules\Commands\GenerateMiddlewareCommand;
use Nwidart\Modules\Commands\GenerateNotificationCommand;
use Nwidart\Modules\Commands\GenerateProviderCommand;
use Nwidart\Modules\Commands\GenerateRouteProviderCommand;
use Nwidart\Modules\Commands\InstallCommand;
use Nwidart\Modules\Commands\ListCommand;
use Nwidart\Modules\Commands\MakeCommand;
use Nwidart\Modules\Commands\MakeFactoryCommand;
use Nwidart\Modules\Commands\MakePolicyCommand;
use Nwidart\Modules\Commands\MakeRequestCommand;
use Nwidart\Modules\Commands\MakeRuleCommand;
use Nwidart\Modules\Commands\MigrateCommand;
use Nwidart\Modules\Commands\MigrateRefreshCommand;
use Nwidart\Modules\Commands\MigrateResetCommand;
use Nwidart\Modules\Commands\MigrateRollbackCommand;
use Nwidart\Modules\Commands\MigrationCommand;
use Nwidart\Modules\Commands\ModelCommand;
use Nwidart\Modules\Commands\PublishCommand;
use Nwidart\Modules\Commands\PublishConfigurationCommand;
use Nwidart\Modules\Commands\PublishMigrationCommand;
use Nwidart\Modules\Commands\PublishTranslationCommand;
use Nwidart\Modules\Commands\SeedCommand;
use Nwidart\Modules\Commands\SeedMakeCommand;
use Nwidart\Modules\Commands\SetupCommand;
use Nwidart\Modules\Commands\UnUseCommand;
use Nwidart\Modules\Commands\UpdateCommand;
use Nwidart\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        GenerateEventCommand::class,
        GenerateJobCommand::class,
        GenerateListenerCommand::class,
        GenerateMailCommand::class,
        GenerateMiddlewareCommand::class,
        GenerateNotificationCommand::class,
        GenerateProviderCommand::class,
        GenerateRouteProviderCommand::class,
        InstallCommand::class,
        ListCommand::class,
        MakeCommand::class,
        MakeFactoryCommand::class,
        MakePolicyCommand::class,
        MakeRequestCommand::class,
        MakeRuleCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrationCommand::class,
        ModelCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
    ];


    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }


    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
