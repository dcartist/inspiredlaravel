<?php

use Illuminate\Database\Seeder;
use App\Group;
class CreateGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $group = [
            [
                'name' => 'Mentor Meetup',
                'description' => 'Find a mentor and be a mentor',
                'type' => 'Mentorship',
            ],
            [
                'name' => 'Get Inspired',
                'description' => 'Find ideas and inspiration from other users',
                'type' => 'Mentorship',
            ],
            [
                'name' => 'Talk',
                'description' => 'Do you need an ear? This is the place to go.',
                'type' => 'Mentorship',
            ],
            [
                'name' => 'Dev Help!!',
                'description' => 'A place where developers can get help with their code.',
                'type' => 'Development',
            ],
            [
                'name' => 'Design Circle',
                'description' => 'A place where designer can get help with their code.',
                'type' => 'Design',
            ],
            [
                'name' => 'Data & Data',
                'description' => 'A place where data scientist can get help with their code.',
                'type' => 'datascience',
            ],
            ];
            foreach ($group as $key => $value) {
                Group::create($value);
            }
    }
}
