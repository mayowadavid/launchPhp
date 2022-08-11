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

class OrganisationController extends Controller
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
        if(is_null(session('user:token')) && Helper::instance()->getPageAccessByModule('organisation_show'))
        {
            return $this->getSignInRouteByRole();
        }

        $token = Crypt::decrypt(session('user:token'));
        $organisation = Cache::remember("organisationsShow", 60 * 5, function() use ($token) {
            $response = Http::withToken($token)->get(config('app.global_api_url') . 'organisation/show', [
                'type' => "all",
                "code" => Crypt::decrypt(session('user:organisation')),
                "relations" => ["license", "users"],
                "extra_relations" => ["groups"],
                'authenticatie' => Crypt::decrypt(session('user:email')),
            ]);
            return $response->json('result.message');
        });

        return view($this->layout)->nest('content', 'organisation.index', ['organisation' => $organisation]);
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
     * @return mixed
     */
    public function store(Request $request): mixed
    {
        $request->validate([
            'name' => 'bail|required|string',
            'code' => 'bail|required|string',
            'street' => 'bail|required|string',
            'country' => 'bail|required|string',
        ]);

        $token = Crypt::decrypt(session('user:token'));
        $response = Http::withToken($token)->post(config('app.global_api_url') . 'organisation/store', [
            'name' => $request->name,
            'code' => $request->code,
            'street' => $request->street,
            'house_number' => $request->house_number,
            'zipcode' => $request->zipcode,
            'country' => $request->country,
            'email' => $request->email,
            'authenticatie' => Crypt::decrypt(session('user:email')),
            'social_auth' => [
                'azure_client' => '',
                'azure_secret' => '',
                'azure_tenant' => '',
            ],
        ]);

        if($response->successful()) {
            Cache::forget('organisationsShow');
            return redirect()->route('admin.organisation.index')->withSuccess(['De organisatie is zojuist toegevoegd, u kunt nu de studenten en leerkrachten automatisch toevoegen door de buttons achter de betreffende organisatie.']);
        }
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function show(string $id): Application|Factory|View|RedirectResponse
    {
        if(is_null(session('user:token')) && Helper::instance()->getPageAccessByModule('organisation_store'))
        {
            return $this->getSignInRouteByRole();
        }

        $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(config('app.global_api_url') . 'organisation/show', [
            'type' => "single",
            'id' => $id,
            'relations' => ['socialAuth'],
            'extra_relations' => [],
            'authenticatie' => Crypt::decrypt(session('user:email')),
        ]);
        $organisation = $response->json('result.message');

        return view($this->layout)->nest('content', 'organisation.show', ['organisation' => $organisation]);
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
     * @return Mixed
     */
    public function destroy(int $id): Mixed
    {
        $response = Http::withToken(Crypt::decrypt(session('user:token')))->delete(config('app.global_api_url') . "organisation/delete/{$id}", [
            'authenticatie' => Crypt::decrypt(session('user:email')),
        ]);

        if($response->successful()) {
            Cache::forget('organisationsShow');
            return redirect()->route('admin.organisation.index')->withSuccess(['De organisatie is succesvol verwijderd, inclusief: Nieuws artikelen, gebruikers, studenten, leerkrachten en app gebruikers']);
        }

        return false;
    }

    /**
     * @return View|Factory|RedirectResponse|Application
     */
    public function organisationSettings(): View|Factory|RedirectResponse|Application
    {
        if(is_null(session('user:token')) && Helper::instance()->getPageAccessByModule('user_show'))
        {
            return $this->getSignInRouteByRole();
        }

        return view($this->layout)->nest('content', 'settings.manager.organisation', []);
    }

    public function organisationSettingsEdit($id)
    {
        //
    }
}
