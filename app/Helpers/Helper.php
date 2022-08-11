<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class Helper
{
    /**
     * @param string $module
     * @return bool
     */
    public function getPageAccessByModule(string $module): bool
    {
        if(!is_null(session('user:token')))
        {
            $token = Crypt::decrypt(session('user:token'));
            $organisation = Cache::remember("pageAccess{$token}", 60 * 5, function() use ($token) {
                $response = Http::withToken(Crypt::decrypt(session('user:token')))->get(config('app.global_api_url') . 'organisation/show', [
                    'type' => 'single',
                    'code' => Crypt::decrypt(session('user:organisation')),
                    'relations' => ['license'],
                    'extra_relations' => [''],
                    'authenticatie' => Crypt::decrypt(session('user:email'))
                ]);
                return $response->json('result.message');
            });

            if(in_array($module, explode(';', $organisation['license']['modules']))) {
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * @return Helper
     */
    public static function instance(): Helper
    {
        return new Helper();
    }
}