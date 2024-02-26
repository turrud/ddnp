<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\ProArchitectur;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProArchitecturTest extends TestCase
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
    public function it_gets_pro_architecturs_list(): void
    {
        $proArchitecturs = ProArchitectur::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.pro-architecturs.index'));

        $response->assertOk()->assertSee($proArchitecturs[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_pro_architectur(): void
    {
        $data = ProArchitectur::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.pro-architecturs.store'), $data);

        $this->assertDatabaseHas('pro_architecturs', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_pro_architectur(): void
    {
        $proArchitectur = ProArchitectur::factory()->create();

        $data = [
            'name' => $this->faker->name(),
            'imgurl' => $this->faker->text(255),
            'text' => $this->faker->text(),
            'video' => $this->faker->text(255),
        ];

        $response = $this->putJson(
            route('api.pro-architecturs.update', $proArchitectur),
            $data
        );

        $data['id'] = $proArchitectur->id;

        $this->assertDatabaseHas('pro_architecturs', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_pro_architectur(): void
    {
        $proArchitectur = ProArchitectur::factory()->create();

        $response = $this->deleteJson(
            route('api.pro-architecturs.destroy', $proArchitectur)
        );

        $this->assertSoftDeleted($proArchitectur);

        $response->assertNoContent();
    }
}
