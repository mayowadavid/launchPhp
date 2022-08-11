<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
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
     * @return Application|Factory|View|RedirectResponse
     */
    public function index(): Application|Factory|View|RedirectResponse
    {
        if(is_null(session('user:token')) && Helper::instance()->getPageAccessByModule('dashboard_statics'))
        {
            return $this->getSignInRouteByRole();
        }

        return $this->getDashboardRouteByRole();
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

    /**
     * @return Application|Factory|View
     */
    protected function getDashboardRouteByRole(): View|Factory|Application
    {
        $token = Crypt::decrypt(session('user:token'));
        $user = Cache::remember("dashboardUser{$token}", 60 * 5, function() use ($token) {
            $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(config('app.global_api_url') . 'user/show', [
                'type' => 'single',
                'id' => Crypt::decrypt(session('user:id')),
                'user_types' => [1,2,3],
                'organisation' => Crypt::decrypt(session('user:organisation')),
                'authenticatie' => Crypt::decrypt(session('user:email')),
            ]);
            return $response->json('result.message');
        });

        switch($user['role_id'])
        {
            case 1:
                $statics = $this->getStatics('admin');
                return view($this->layout)->nest('content', 'dashboard.admin.index', ['user' => $user, 'statics' => $statics]);
            case 2:
                $statics = $this->getStatics('manager');
                return view($this->layout)->nest('content', 'dashboard.manager.index', ['user' => $user, 'statics' => $statics]);
            case 3:
                $statics = $this->getStatics('employee');
                return view($this->layout)->nest('content', 'dashboard.employee.index', ['user' => $user, 'statics' => $statics]);
            default:
                abort(401);
        }
    }

    /**
     * @param string $type
     * @return array|mixed
     */
    protected function getStatics(string $type): mixed
    {
        $token = Crypt::decrypt(session('user:token'));
        return Cache::remember("dashboardStatics{$token}", 60 * 5, function() use ($token, $type) {
            $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(config('app.global_api_url') . 'dashboard/statics', [
                'type' => $type,
                'organisation_id' => Crypt::decrypt(session('user:organisation')),
                'authenticatie' => Crypt::decrypt(session('user:email')),
            ]);
            return $response->json('result.message');
        });
    }
}
