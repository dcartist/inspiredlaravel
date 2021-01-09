<?php

use Illuminate\Database\Seeder;
use App\Directory;
class CreateDirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $directory = [
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
            [
                'name' => 'Creative Morning',
                'type' => 'Meetup',
                'description' => 'Meet new people and get inspired by lectures!',
                'url' => 'https://creativemornings.com/',
            ],
        ];

        foreach ($directory as $key => $value) {
            Directory::create($value);
        }
    }
}
