<?php

namespace DevOpsFuture\PackageGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use DevOpsFuture\PackageGenerator\Console\Command\PackageMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ProviderMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ModuleProviderMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\AdminControllerMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\PortalControllerMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\AdminRouteMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\PortalRouteMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\MigrationMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ModelMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ModelProxyMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ModelContractMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\RepositoryMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\SeederMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\MailMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\CommandMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\EventMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ListenerMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\MiddlewareMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\RequestMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\NotificationMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\DatagridMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\PaymentPackageMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\PaymentMethodProviderMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\PaymentMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ShippingPackageMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ShippingMethodProviderMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\ShippingMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\PortalThemeMakeCommand;
use DevOpsFuture\PackageGenerator\Console\Command\AdminThemeMakeCommand;

class PackageGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerCommands();
    }

    /**
     * Register the console commands of this package
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PackageMakeCommand::class,
                ProviderMakeCommand::class,
                ModuleProviderMakeCommand::class,
                AdminControllerMakeCommand::class,
                PortalControllerMakeCommand::class,
                AdminRouteMakeCommand::class,
                PortalRouteMakeCommand::class,
                MigrationMakeCommand::class,
                ModelMakeCommand::class,
                ModelProxyMakeCommand::class,
                ModelContractMakeCommand::class,
                RepositoryMakeCommand::class,
                SeederMakeCommand::class,
                MailMakeCommand::class,
                CommandMakeCommand::class,
                EventMakeCommand::class,
                ListenerMakeCommand::class,
                MiddlewareMakeCommand::class,
                RequestMakeCommand::class,
                NotificationMakeCommand::class,
                DatagridMakeCommand::class,
                PaymentPackageMakeCommand::class,
                PaymentMethodProviderMakeCommand::class,
                PaymentMakeCommand::class,
                ShippingPackageMakeCommand::class,
                ShippingMethodProviderMakeCommand::class,
                ShippingMakeCommand::class,
                PortalThemeMakeCommand::class,
                AdminThemeMakeCommand::class,
            ]);
        }
    }
}