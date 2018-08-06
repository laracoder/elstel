<?php

namespace Tests\Feature;

use App\Ad;
use Illuminate\Http\Resources\Json\Resource;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function fetch_a_ad_index()
    {
        Resource::withoutWrapping();
        $ad = factory(Ad::class)->create();

        $this->get(route('ads.show', ['ad' => 1]))
            ->assertOk()
            ->assertJsonFragment([
                'id' => $ad->id,
                'created_at' => $ad->created_at->format('d.m.Y'),
                'updated_at' => $ad->created_at->format('d.m.Y')
            ])
            ->assertJsonSchema('ad');
    }
}
