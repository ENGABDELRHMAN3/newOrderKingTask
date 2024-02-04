<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:setup-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('
        __      __ ________   _______  __      __ ________ 
        /  \    /  \\_____  \  \      \ \  \    /  \\_____  \
        \   \/\/   //  /   |   \  \ \   \/  \/   //  /   |   \
         \        //  /    |    \  \_\ \        //  /    |    \
          \__/\  / \  \____|__  /\_____\ \__/\  / \  \____|__  /
               \/   \_______ \ \/            \/   \_______ \/
                          \/                            
       
      ');
      $this->call('migrate');

      $this->call('db:seed');

      $this->info('Database setup complete.');
      
    }
}
