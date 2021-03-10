<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if only logged users can see dashboard
     *
     */
    public function test_only_logged_users_can_see_dashboard()
    {
        $response = $this->get('/dashboard')->assertRedirect('login');
    }

    /**
     * Test if only logged users can see dashboard
     *
     */
    public function test_only_authenticated_users_can_see_dashboard()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/dashboard')->assertOk();
    }
}
