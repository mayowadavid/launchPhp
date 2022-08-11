<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{

    /**
     * @var string
     */
    public string $layout = 'layouts.default';

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Application|Factory|View|RedirectResponse
     */
    public function index(Request $request): Application|Factory|View|RedirectResponse
    {
        if(is_null(session('user:token')))
        {
            $this->getSignInRouteByRole();
        }

        $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(env('GLOBAL_URI') . 'user/show', [
            'type' => 'single',
            'id' => Crypt::decrypt(session('user:id')),
            'user_types' => [1],
            'organisation' => Crypt::decrypt(session('user:organisation')),
            'authenticatie' => Crypt::decrypt(session('user:email')),
        ]);
        $user = $response->json('result.message');

        return view($this->layout)->nest('content', 'dashboard.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    protected function getSignInRouteByRole()
    {
        $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(env('GLOBAL_URI') . 'user/show', [
            'type' => 'single',
            'id' => Crypt::decrypt(session('user:id')),
            'user_types' => [1],
            'organisation' => Crypt::decrypt(session('user:organisation')),
            'authenticatie' => Crypt::decrypt(session('user:email')),
        ]);
        $user = $response->json('result.message');

        switch($user['role_id'])
        {
            case 1:
                return Redirect::route('auth.authentication.signing');
            case 2:
            case 3:
                return Redirect::route('auth.signing');
            default:
                abort(401);
        }
    }
}
