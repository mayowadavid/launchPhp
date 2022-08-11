<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return RedirectResponse|null
     */
    protected function getSignInRouteByRole(): RedirectResponse|null
    {
        $token = Crypt::decrypt(session('user:token'));
        $user = Cache::remember("pageAccess{$token}", 60 * 5, function() use ($token) {
            $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(config('app.global_api_url') . 'user/show', [
                'type' => 'single',
                'id' => Crypt::decrypt(session('user:id')),
                'user_types' => [1, 2, 3],
                'organisation' => Crypt::decrypt(session('user:organisation')),
                'authenticatie' => Crypt::decrypt(session('user:email')),
            ]);
            return $response->json('result.message');
        });

        switch($user['role_id'])
        {
            case 1:
                return Redirect::route('auth.authentication.signing');
            case 2:
            case 3:
                return Redirect::route('auth.signing');
            default:
                abort(404);
        }
    }
}
