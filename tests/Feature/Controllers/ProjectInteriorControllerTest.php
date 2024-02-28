<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\ProjectInterior;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectInteriorControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_project_interiors(): void
    {
        $projectInteriors = ProjectInterior::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('project-interiors.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.project_interiors.index')
            ->assertViewHas('projectInteriors');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_project_interior(): void
    {
        $response = $this->get(route('project-interiors.create'));

        $response->assertOk()->assertViewIs('app.project_interiors.create');
    }

    /**
     * @test
     */
    public function it_stores_the_project_interior(): void
    {
        $data = ProjectInterior::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('project-interiors.store'), $data);

        $this->assertDatabaseHas('project_interiors', $data);

        $projectInterior = ProjectInterior::latest('id')->first();

        $response->assertRedirect(
            route('project-interiors.edit', $projectInterior)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_project_interior(): void
    {
        $projectInterior = ProjectInterior::factory()->create();

        $response = $this->get(
            route('project-interiors.show', $projectInterior)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.project_interiors.show')
            ->assertViewHas('projectInterior');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_project_interior(): void
    {
        $projectInterior = ProjectInterior::factory()->create();

        $response = $this->get(
            route('project-interiors.edit', $projectInterior)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.project_interiors.edit')
            ->assertViewHas('projectInterior');
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

        $response = $this->put(
            route('project-interiors.update', $projectInterior),
            $data
        );

        $data['id'] = $projectInterior->id;

        $this->assertDatabaseHas('project_interiors', $data);

        $response->assertRedirect(
            route('project-interiors.edit', $projectInterior)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_project_interior(): void
    {
        $projectInterior = ProjectInterior::factory()->create();

        $response = $this->delete(
            route('project-interiors.destroy', $projectInterior)
        );

        $response->assertRedirect(route('project-interiors.index'));

        $this->assertSoftDeleted($projectInterior);
    }
}
