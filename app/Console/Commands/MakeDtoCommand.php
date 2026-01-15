<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeDtoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:dto {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Data Transfer Object (DTO) class';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = Str::studly($this->argument('name'));

        $path = app_path("Dtos/{$name}Dto.php");

        if (file_exists($path)) {
            $this->error("DTO class {$name}Dto already exists!");
            return Command::FAILURE;
        }

        File::ensureDirectoryExists(\app_path('Dtos'));

        File::put($path, $this->getStub($name));

        $this->info("DTO class {$name}Dto created successfully.");
        return command::SUCCESS;
    }

    private function getStub(string $name): string
    {
        return <<<PHP
        <?php
        namespace App\Dtos;

        class {$name}Dto
        {
            public function __construct(
                // Define your DTO properties here
            ) {}

            public static function make(array \$data): self
            {
                return new self(
                    // Map array data to DTO properties here
                );
            }

            public function toArray(): array
            {
                return [
                    get_object_vars(\$this)
                ];
            }
        }
        PHP;
    }
}
