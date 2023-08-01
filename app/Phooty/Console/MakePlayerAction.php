<?php

namespace App\Phooty\Console;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class MakePlayerAction extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phooty:make:playeraction {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new PlayerAction';

    protected function getStub()
    {
        $relativePath = '/stubs/playerAction.stub';

        return file_exists($customPath = $this->laravel->basePath(trim($relativePath, '/')))
            ? $customPath
            : __DIR__.$relativePath;
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Phooty\Actions';
    }
}
