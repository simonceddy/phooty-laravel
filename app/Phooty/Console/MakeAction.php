<?php

namespace App\Phooty\Console;

use Illuminate\Console\GeneratorCommand;

class MakeAction extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phooty:make:action {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a phooty action';


    protected function getStub()
    {
        $relativePath = '/stubs/action.stub';

        return file_exists($customPath = $this->laravel->basePath(trim($relativePath, '/')))
            ? $customPath
            : __DIR__.$relativePath;
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Phooty\Actions';
    }
}
