<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\ProArchitectur;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProArchitecturControllerTest extends TestCase
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
    public function it_displays_index_view_with_pro_architecturs(): void
    {
        $proArchitecturs = ProArchitectur::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('pro-architecturs.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.pro_architecturs.index')
            ->assertViewHas('proArchitecturs');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_pro_architectur(): void
    {
        $response = $this->get(route('pro-architecturs.create'));

        $response->assertOk()->assertViewIs('app.pro_architecturs.create');
    }

    /**
     * @test
     */
    public function it_stores_the_pro_architectur(): void
    {
        $data = ProArchitectur::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('pro-architecturs.store'), $data);

        $this->assertDatabaseHas('pro_architecturs', $data);

        $proArchitectur = ProArchitectur::latest('id')->first();

        $response->assertRedirect(
            route('pro-architecturs.edit', $proArchitectur)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_pro_architectur(): void
    {
        $proArchitectur = ProArchitectur::factory()->create();

        $response = $this->get(route('pro-architecturs.show', $proArchitectur));

        $response
            ->assertOk()
            ->assertViewIs('app.pro_architecturs.show')
            ->assertViewHas('proArchitectur');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_pro_architectur(): void
    {
        $proArchitectur = ProArchitectur::factory()->create();

        $response = $this->get(route('pro-architecturs.edit', $proArchitectur));

        $response
            ->assertOk()
            ->assertViewIs('app.pro_architecturs.edit')
            ->assertViewHas('proArchitectur');
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

        $response = $this->put(
            route('pro-architecturs.update', $proArchitectur),
            $data
        );

        $data['id'] = $proArchitectur->id;

        $this->assertDatabaseHas('pro_architecturs', $data);

        $response->assertRedirect(
            route('pro-architecturs.edit', $proArchitectur)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_pro_architectur(): void
    {
        $proArchitectur = ProArchitectur::factory()->create();

        $response = $this->delete(
            route('pro-architecturs.destroy', $proArchitectur)
        );

        $response->assertRedirect(route('pro-architecturs.index'));

        $this->assertSoftDeleted($proArchitectur);
    }
}
