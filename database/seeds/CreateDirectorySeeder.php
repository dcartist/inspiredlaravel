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
                'name' => 'Tiny Buddha',
                'type' => 'Inspire',
                'description' => 'Simple wisdom for complex lives',
                'url' => 'https://tinybuddha.com/',
            ],
            [
                'name' => 'DC Code & Coffeee',
                'type' => 'Meetup',
                'description' => 'An informal meetup for anyone to work/hack on your own project in an afternoon with coffee and cakes. All skill levels are welcome. Feel free to come and work, help or just have a chat!',
                'url' => 'https://www.meetup.com/dc-code-coffee/',
            ],
            [
                'name' => 'Alexandria Code and Coffee',
                'type' => 'Meetup',
                'description' => 'Alexandria Code and Coffee is a free, informal co-working session. People of all skill levels bring their personal projects and we use the time to socialize, work, and network.',
                'url' => 'https://www.meetup.com/Alexandria-Code-Coffee/',
            ],
            [
                'name' => 'Women Who Code',
                'type' => 'Meetup',
                'description' => 'Empowering Women in Technology',
                'url' => 'https://www.womenwhocode.com/',
            ],
            [
                'name' => 'Dev Community',
                'type' => 'Tech',
                'description' => 'A constructive and inclusive social network for software developers. With you every step of your journey.',
                'url' => 'https://dev.to/',
            ],
            [
                'name' => 'Ted Talks',
                'type' => 'Inspire',
                'description' => '3600+ talks to stir your curiosity',
                'url' => 'https://www.ted.com/talks',
            ],
            [
                'name' => 'Site Inspire',
                'type' => 'Ideas',
                'description' => 'A CSS gallery and showcase of the best web design inspiration, featuring over 2500 websites searchable by type, subject, and style.',
                'url' => 'https://www.siteinspire.com/',
            ],
            [
                'name' => 'Muzli Inspiration by InVision',
                'type' => 'Ideas',
                'description' => 'Designers` Secret Source: all the design inspiration you need. (also for developers). It also has a chrome extension.',
                'url' => 'https://muz.li/',
            ],
            [
                'name' => 'Design inspiration',
                'type' => 'Ideas',
                'description' => 'An image & color search engine for creating mood boards and finding art, design, logos, photography, app & ui.',
                'url' => 'https://www.designspiration.com/',
            ],
        ];

        foreach ($directory as $key => $value) {
            Directory::create($value);
        }
    }
}
