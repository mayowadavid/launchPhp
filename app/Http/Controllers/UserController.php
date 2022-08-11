<?php

namespace App\Http\Controllers;

use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Integer;
use PragmaRX\Google2FA\Exceptions\IncompatibleWithGoogleAuthenticatorException;
use PragmaRX\Google2FA\Exceptions\InvalidCharactersException;
use PragmaRX\Google2FA\Exceptions\SecretKeyTooShortException;
use PragmaRX\Google2FA\Google2FA;

class UserController extends Controller
{
    /**
     * @var string
     */
    public string $layout = 'layouts.default';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        // @todo Fix token by user authentication
        $response = Http::withToken('v4.local.BykBz5aKAWUDFZMLru3BoqciXLQ_gTG3TXzrfzjlIvBphA3ho6Tb2rrZiR7WA50yD55fpMn-xcoW0O3yDU4GGzGAE5ki4WZjZp5XbY8KDkjrl5CcqGHXgTSVpvc7FvenT69FJFMZJv-3jn5jXmeOW5A-iiG8dj9Ilsxf7NQtfcXcZTmoRqUZVKbHaNouHoFPTnAUe-dJ1dQJnkJTYye5MBS1UQLVxmUvzPoNGJahWynjBU0JHCEP787qCZLZxjMNoRudj4QX5IaBLA1Pmlz3pLWl8qB5-jUIRubAJZTcENlGrIS3dH_b3GvsgycOmXOoXU5B-pSokrUMUetEtWVOejmohJeb2mDX1eVpJVW-zl95jlas2D1aMPH6WUrLcpUKvKxE_rElJm0dzcXbtESfT87ZJwWCWC1NrOe7ILUM8t8yNZst3Ks')->get(env('GLOBAL_URI') . 'user/show', [
            'type' => 'all',
            'user_types' => [3],
            'organisation' => 123456,
            'authenticatie' => 'mail@joshualonden.com'
        ]);

        $users = $response->json('result.message');


        return view($this->layout)->nest('content', 'users.index', ['users' => $users]);
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
     * @param string $email
     * @param int $organisation
     * @param string $middleware
     * @param string $version
     * @param string $token
     * @return array|mixed token
     */
    public function getToken(string $email, int $organisation, string $middleware, string $version, string $token): mixed
    {
        $response = Http::get(env('GLOBAL_URI') . 'token', [
            'mail' => $email,
            'organisation' => $organisation,
            'middleware' => $middleware,
            'version' => $version,
            'token' => $token,
        ]);

        if($response->status() == 403) {
            return false;
        }
        return $response->json('result.token');
    }

    /**
     * @param string $type
     * @param string $email
     * @param string|null $token
     * @return array|mixed
     */
    public function verifyToken(string $type, string $email, string $token = null): mixed
    {
        $response = Http::get(env('GLOBAL_URI') . 'verify', [
            'type' => $type,
            'email' => $email,
            'token' => $token,
        ]);

        if($response->status() == 404 || $response->status() == 401) {
            return false;
        }
        return $response->json('result.message');
    }

    /**
     * @throws IncompatibleWithGoogleAuthenticatorException
     * @throws SecretKeyTooShortException
     * @throws InvalidCharactersException
     */
    public function register(Request $request): Factory|View|Application
    {
//        if(!$request->hasValidSignature()) {
//            abort(401);
//        }

        $google2fa = app(Google2FA::class);

        $secret = $google2fa->generateSecretKey();
        $g2faUrl = $google2fa->getQRCodeUrl(
            'EDUos Web',
            'mail@joshualonden.com',
            $secret
        );

        $writer = new Writer(
            new ImageRenderer(
                new RendererStyle(400),
                new ImagickImageBackEnd()
            )
        );

        $this->verifyToken('authentication', 'mail@joshualonden.com', $secret);

        $qrcode_image = base64_encode($writer->writeString($g2faUrl));
        return view($this->layout)->nest('content', 'auth.register.index', ['qrcode' => $qrcode_image, 'secret' => $secret]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function verify(Request $request): RedirectResponse
    {
        Validator::make($request->all(), [
            'secret' => 'required|min:6|max:6',
            'email' => 'email|required',
        ])->validate();

        $verify = $this->verifyToken('verify', $request->email, $request->secret);
        $token = $this->getToken($verify['email'], $verify['organisation_id'], $verify['middleware'], '1.0.0', $verify['token']);

        $google2fa = app('pragmarx.google2fa');
        $valid = $google2fa->verifyKey($verify['google_authentication'], $request->secret, 8);

        if($valid) {
            $request->session()->regenerate();
            $request->session()->put('user:organisation', Crypt::encrypt($verify['organisation_id']));
            $request->session()->put('user:email', Crypt::encrypt($verify['email']));
            $request->session()->put('user:token', Crypt::encrypt($token));
            $request->session()->put('user:id', Crypt::encrypt($verify['id']));
            return Redirect::route('admin.dashboard.index');
        }

        return back()->withErrors([
            'error' => 'De opgegeven gegevens zijn incorrect, probeer het nogmaals.',
        ]);
    }

    public function signing(): Factory|View|Application
    {
        return view($this->layout)->nest('content', 'auth.signing.index', []);
    }
}
