<?php

namespace Database\Seeders;

use App\Models\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //look at the relationships in readme to derive this


        // 3 levels deep -> when nesting each new factory needs to go directly inside the previous has ... 6 users each with 2 employers that each has 5 jobs
        // User::factory(2)->has(Employer::factory(2)->has(Job::factory(2)))->create();

        $users = User::factory(2)->create();
        $tags = Tag::factory(2)->create();

        User::factory(2)->has(Employer::factory(2)->has(Job::factory(2)->hasAttached($tags)))->create();

        // job seeder can have a sequence to sort/filter the featured jobs


        // pivot tables dont stop seeders from seedingso  job::factory can be made above and the tag::factory separately below.
        // however seeder relationshps can be made using the hasAttached() method

    }
}
