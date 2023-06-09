<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Init extends Command
{
    use HasUuids;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

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
        $user = new User();
        $user->name = "Will Oliveira";
        $user->email = "woliveiravix@gmail.com";
        $user->password = bcrypt('Big158012@');
        $user->save();

        dd($user);
    }
}
