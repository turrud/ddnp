<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Method;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MethodControllerTest extends TestCase
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
    public function it_displays_index_view_with_methods(): void
    {
        $methods = Method::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('methods.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.methods.index')
            ->assertViewHas('methods');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_method(): void
    {
        $response = $this->get(route('methods.create'));

        $response->assertOk()->assertViewIs('app.methods.create');
    }

    /**
     * @test
     */
    public function it_stores_the_method(): void
    {
        $data = Method::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('methods.store'), $data);

        $this->assertDatabaseHas('methods', $data);

        $method = Method::latest('id')->first();

        $response->assertRedirect(route('methods.edit', $method));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_method(): void
    {
        $method = Method::factory()->create();

        $response = $this->get(route('methods.show', $method));

        $response
            ->assertOk()
            ->assertViewIs('app.methods.show')
            ->assertViewHas('method');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_method(): void
    {
        $method = Method::factory()->create();

        $response = $this->get(route('methods.edit', $method));

        $response
            ->assertOk()
            ->assertViewIs('app.methods.edit')
            ->assertViewHas('method');
    }

    /**
     * @test
     */
    public function it_updates_the_method(): void
    {
        $method = Method::factory()->create();

        $data = [
            'name' => $this->faker->name(),
            'text' => $this->faker->text(),
            'imgurl' => $this->faker->text(255),
            'video' => $this->faker->text(255),
        ];

        $response = $this->put(route('methods.update', $method), $data);

        $data['id'] = $method->id;

        $this->assertDatabaseHas('methods', $data);

        $response->assertRedirect(route('methods.edit', $method));
    }

    /**
     * @test
     */
    public function it_deletes_the_method(): void
    {
        $method = Method::factory()->create();

        $response = $this->delete(route('methods.destroy', $method));

        $response->assertRedirect(route('methods.index'));

        $this->assertSoftDeleted($method);
    }
}
