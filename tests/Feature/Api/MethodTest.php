<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Method;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MethodTest extends TestCase
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
    public function it_gets_methods_list(): void
    {
        $methods = Method::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.methods.index'));

        $response->assertOk()->assertSee($methods[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_method(): void
    {
        $data = Method::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.methods.store'), $data);

        $this->assertDatabaseHas('methods', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(route('api.methods.update', $method), $data);

        $data['id'] = $method->id;

        $this->assertDatabaseHas('methods', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_method(): void
    {
        $method = Method::factory()->create();

        $response = $this->deleteJson(route('api.methods.destroy', $method));

        $this->assertSoftDeleted($method);

        $response->assertNoContent();
    }
}
