<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the sample database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables();
        $this->createAdReleatedItems();
    }

    private function createAdReleatedItems(): void
    {
        factory(App\AdChannel::class, 5)->create();
        factory(App\Ad::class, 50)->create()->each(function ($ad) {
            $ad->channels()->attach(random_int(1, 5));
        });
    }

    private function truncateTables(): void
    {
        DB::table('ad_channels')->truncate();
        DB::table('ad_ad_channel')->truncate();
        DB::table('ads')->truncate();
    }
}
