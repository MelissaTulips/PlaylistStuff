<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PlaylistTest extends TestCase
{

     public function test_user_can_log_in_and_see_playlists(): void
    {

        $this->authenticate($response);
        $response->assertRedirect(route('playlist.index', absolute: false));



        // $response->assertStatus(302);

                $response = $this->get('/playlist');
                $response->assertSee("Playlists");
                $response->assertSee("Create Playlist");
                $response->assertSee("No Playlist found");
    }

    public function test_user_can_see_created_playlists(): void
    {
        authenticate($response);
        $response->assertSee("No Playlist found");
               
    }

    public function authenticate(): void{

        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);


    }


 
        
    
}
