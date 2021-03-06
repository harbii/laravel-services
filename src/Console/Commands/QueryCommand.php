<?php

namespace harby\services\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class QueryCommand extends GeneratorCommand
{
    /**
     * The name of the console command.
     *
     * @var string
     */
    protected $name = 'service:query';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a class for a single field on the root Query type.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Query';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace( $rootNamespace ) : string {
        return config( 'harby-services.namespaces.queries' , config( 'lighthouse.namespaces.queries' ) ) ;
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub( ) : string {
        return __DIR__ . '/stubs/field.stub' ;
    }
}
