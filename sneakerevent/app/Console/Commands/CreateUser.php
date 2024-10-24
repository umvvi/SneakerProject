<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateUser extends Command
{
    protected $signature = 'user:create {name} {email}';
    protected $description = 'Create a new user';

    public function handle()
    {
        // Code to create a user
        $name = $this->argument('name');
        $email = $this->argument('email');

        // Logic for user creation
        $this->info("User created: $name with email $email");
    }
}
