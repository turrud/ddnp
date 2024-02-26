<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Award;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AwardControllerTest extends TestCase
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
    public function it_displays_index_view_with_awards(): void
    {
        $awards = Award::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('awards.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.awards.index')
            ->assertViewHas('awards');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_award(): void
    {
        $response = $this->get(route('awards.create'));

        $response->assertOk()->assertViewIs('app.awards.create');
    }

    /**
     * @test
     */
    public function it_stores_the_award(): void
    {
        $data = Award::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('awards.store'), $data);

        $this->assertDatabaseHas('awards', $data);

        $award = Award::latest('id')->first();

        $response->assertRedirect(route('awards.edit', $award));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_award(): void
    {
        $award = Award::factory()->create();

        $response = $this->get(route('awards.show', $award));

        $response
            ->assertOk()
            ->assertViewIs('app.awards.show')
            ->assertViewHas('award');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_award(): void
    {
        $award = Award::factory()->create();

        $response = $this->get(route('awards.edit', $award));

        $response
            ->assertOk()
            ->assertViewIs('app.awards.edit')
            ->assertViewHas('award');
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

        $response = $this->put(route('awards.update', $award), $data);

        $data['id'] = $award->id;

        $this->assertDatabaseHas('awards', $data);

        $response->assertRedirect(route('awards.edit', $award));
    }

    /**
     * @test
     */
    public function it_deletes_the_award(): void
    {
        $award = Award::factory()->create();

        $response = $this->delete(route('awards.destroy', $award));

        $response->assertRedirect(route('awards.index'));

        $this->assertSoftDeleted($award);
    }
}
