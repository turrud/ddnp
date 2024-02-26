<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Award;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AwardTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_awards_list(): void
    {
        $awards = Award::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.awards.index'));

        $response->assertOk()->assertSee($awards[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_award(): void
    {
        $data = Award::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.awards.store'), $data);

        $this->assertDatabaseHas('awards', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_award(): void
    {
        $award = Award::factory()->create();

        $data = [
            'name' => $this->faker->name(),
            'text' => $this->faker->text(),
            'tanggal' => $this->faker->text(255),
            'lokasi' => $this->faker->text(255),
            'imgurl' => $this->faker->text(255),
            'video' => $this->faker->text(255),
        ];

        $response = $this->putJson(route('api.awards.update', $award), $data);

        $data['id'] = $award->id;

        $this->assertDatabaseHas('awards', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_award(): void
    {
        $award = Award::factory()->create();

        $response = $this->deleteJson(route('api.awards.destroy', $award));

        $this->assertSoftDeleted($award);

        $response->assertNoContent();
    }
}
