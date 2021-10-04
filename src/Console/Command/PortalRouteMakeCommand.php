<?php

namespace Webkul\PackageGenerator\Console\Command;

use Illuminate\Support\Str;
use Webkul\PackageGenerator\Generators\PackageGenerator;

class PortalRouteMakeCommand extends MakeCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package:make-portal-route {package} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new portal route file.';

    /**
     * @return mixed
     */
    protected function getStubContents()
    {
        return $this->packageGenerator->getStubContents('portal-routes', $this->getStubVariables());
    }

    /**
     * @return array
     */
    protected function getStubVariables()
    {
        return [
            'CONTROLLER_CLASS_NAME' => $this->getClassNamespace($this->argument('package') . '/Http/Controllers/Portal/' . $this->getStudlyName() . 'Controller'),
            'LOWER_NAME'            => $this->getLowerName(),
        ];
    }

    /**
     * @return string
     */
    protected function getSourceFilePath()
    {
        $path = base_path('packages/' . $this->argument('package')) . '/src/Http';

        return $path . '/portal-routes.php';
    }
}