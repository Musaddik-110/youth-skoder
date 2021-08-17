<?php

use App\Models\About;
use App\Models\Activity;
use App\Models\Alumni;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\Setting;
use App\Models\TestTwo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        // $this->call(UserSeeder::class);
        factory(About::class, 1)->create();
        factory(Setting::class, 5)->create();
        factory(Gallery::class, 12)->create();
        factory(Event::class, 18)->create();
        factory(Activity::class, 18)->create();
        factory(Alumni::class, 18)->create();
        factory(Member::class, 18)->create();
        factory(Blog::class, 18)->create();
        // $this->call(ContactFeedbackSeeder::class);
        // $this->call(BlogSeeder::class);
    }
}
