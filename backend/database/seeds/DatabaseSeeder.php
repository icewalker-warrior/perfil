<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Experience;
use App\Skill;
use App\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'image' => 'https://raw.githubusercontent.com/b2w-marketplace/code-challenge/master/files/avatar-dev.png',
            'name' => 'Brian Walker',
            'profession' => 'Web Developer',
            'description' => '27-year old web developer fromt Colorado Springs with 5+ years of work experience invarious fields'
        ]);


        Contact::create([
            'tel' => '123-456-7890',
            'cel' => '012-345-6789',
            'address' => '1490 General Woods. Colorado Springs',
            'website' => 'brianwalker.co',
            'mail' => 'mail@brianwalker.co',
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Front End',
            'value' => '80%',
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Back End',
            'value' => '90%',
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Writing',
            'value' => '75%',
            'user_id' => 1
        ]);

        Experience::create([
            'name' => 'Front End Developer @ HillSong',
            'date' => 'January 2014',
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.",
            'user_id' => 1
        ]);

        Experience::create([
            'name' => 'PHP Developer @ Creative Wizards',
            'date' => 'March 2012 - December 2013',
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.",
            'user_id' => 1
        ]);

        Experience::create([
            'name' => 'UX Designer @ Graphics MasterMinds',
            'date' => 'January 2012 - February 2012',
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.",
            'user_id' => 1
        ]);

        Experience::create([
            'name' => 'Web Developer @ Harvard University',
            'date' => 'August 2006 - May 2010',
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.",
            'user_id' => 1
        ]);

        Experience::create([
            'name' => 'Colorado Springs College',
            'date' => 'August 2003 - May 2006',
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.",
            'user_id' => 1
        ]);


        Experience::create([
            'name' => 'UX Designer @ Graphics MasterMinds',
            'date' => 'January 2012 - February 2012',
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.",
            'user_id' => 1
        ]);

    }
}
