<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;

class GoogleController extends Controller {
    
    public function redirectToProvider()
    {
    return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
    $user = Socialite::driver('google')->stateless()->user();
    }
}
?>
