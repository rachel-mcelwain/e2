<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }

    public function migrate() 
    {
        $faker = Factory::create();

        $this->app->db()->createTable('details', [
            'pick' => 'varchar(8)',
            'element' => 'varchar(8)',
            'winner' => 'varchar(255)',
            'timestamp' => 'timestamp'
        ]);

        dump('migrations complete');
    }

    public function seed() 
    {
        $faker = Factory::create();

        for($i = 15; $i > 0; $i--) {
            $this->app->db()->insert('details', [
                'pick' => ['rock', 'paper', 'scissors'][rand(0, 2)],
                'element' => ['rock', 'paper', 'scissors'][rand(0, 2)],
                'winner' => rand(0, 2),
                'timestamp' => $faker->dateTimeBetween('-'.$i.'days', '-'.$i.'days')->format('Y-m-d H:i:s')
            ]);
        }

        dump('Seeds complete');
    }

}
