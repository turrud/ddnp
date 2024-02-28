<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\ProjectInterior;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectInteriorTest extends TestCase
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
    public function it_gets_project_interiors_list(): void
    {
        $projectInteriors = ProjectInterior::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.project-interiors.index'));

        $response->assertOk()->assertSee($projectInteriors[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_project_interior(): void
    {
        $data = ProjectInterior::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.project-interiors.store'),
            $data
        );

        $this->assertDatabaseHas('project_interiors', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_project_interior(): void
    {
        $projectInterior = ProjectInterior::factory()->create();

        $data = [
            'name' => $this->faker->name(),
            'text' => $this->faker->text(),
            'imgurl' => $this->faker->text(255),
            'video' => $this->faker->text(255),
            'url' => $this->faker->url(),
        ];

        $response = $this->putJson(
            route('api.project-interiors.update', $projectInterior),
            $data
        );

        $data['id'] = $projectInterior->id;

        $this->assertDatabaseHas('project_interiors', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_project_interior(): void
    {
        $projectInterior = ProjectInterior::factory()->create();

        $response = $this->deleteJson(
            route('api.project-interiors.destroy', $projectInterior)
        );

        $this->assertSoftDeleted($projectInterior);

        $response->assertNoContent();
    }
}
