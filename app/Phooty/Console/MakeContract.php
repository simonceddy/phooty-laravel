<?php

namespace App\Phooty\Console;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class MakeContract extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phooty:make:contract {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Phooty contract';

    protected function getStub()
    {
        $relativePath = '/stubs/contract.stub';

        return file_exists($customPath = $this->laravel->basePath(trim($relativePath, '/')))
            ? $customPath
            : __DIR__.$relativePath;
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Phooty\Contracts';
    }
}
