<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class LicenseController extends Controller
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
        if(is_null(session('user:token')) && Helper::instance()->getPageAccessByModule('license_show'))
        {
            return $this->getSignInRouteByRole();
        }

        $organisations = Cache::remember("organisations", 60 * 5, function() {
            $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(config('app.global_api_url') . 'organisation/show', [
                'type' => "all",
                'relations' => ['socialAuth'],
                'extra_relations' => [],
                'authenticatie' => Crypt::decrypt(session('user:email')),
            ]);
            return $response->json('result.message');
        });

        $licenses = Cache::remember("licenses", 60 * 5, function() {
            $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(config('app.global_api_url') . 'organisation/license/show', [
                'type' => "all",
                'authenticatie' => Crypt::decrypt(session('user:email')),
            ]);
            return $response->json('result.message');
        });

        return view($this->layout)->nest('content', 'license.index', ['licenses' => $licenses, 'organisations' => $organisations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request): mixed
    {
        $request->validate([
            'modules' => 'bail|required|array',
            'valid_till' => 'bail|required|date',
            'organisation' => 'bail|required|string',
        ]);

        $response = Http::withToken(Crypt::decrypt(session('user:token')))->post(config('app.global_api_url') . 'organisation/license/store', [
            'middleware' => "eduos",
            "version" => "1.0.0",
            'modules' => implode(';', array_keys($request->modules)) . ';',
            'valid_till' => $request->valid_till,
            'status' => true,
            'organisation_id' => "123456",
            'authenticatie' => Crypt::decrypt(session('user:email')),
        ]);

        if($response->successful()) {
            Cache::forget('licenses');
            return redirect()->route('admin.license.index')->withSuccess(['De organisatie is zojuist toegevoegd, u kunt nu de studenten en leerkrachten automatisch toevoegen door de buttons achter de betreffende organisatie.']);
        }
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function show(int $id): Application|Factory|View|RedirectResponse
    {
        if(is_null(session('user:token')) && Helper::instance()->getPageAccessByModule('license_store'))
        {
            return $this->getSignInRouteByRole();
        }

        $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(config('app.global_api_url') . 'organisation/license/show', [
            'type' => "single",
            'id' => $id,
            'organisation_id' => Crypt::decrypt(session('user:organisation')),
            'authenticatie' => Crypt::decrypt(session('user:email')),
        ]);
        $license = $response->json('result.message');

        $modules = explode(';', $license['modules']);

        return view($this->layout)->nest('content', 'license.show', ['license' => $license, 'modules' => $modules]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Mixed
     */
    public function destroy(int $id): Mixed
    {
        $response = Http::withToken(Crypt::decrypt(session('user:token')))->delete(config('app.global_api_url') . "organisation/license/delete/{$id}", [
            'authenticatie' => Crypt::decrypt(session('user:email')),
        ]);

        if($response->successful()) {
            Cache::forget('licenses');
            return redirect()->route('admin.license.index')->withSuccess(['De organisatie is succesvol verwijderd, inclusief: Nieuws artikelen, gebruikers, studenten, leerkrachten en app gebruikers']);
        }
        return false;
    }
}
