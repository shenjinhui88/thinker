<?php

namespace Thinker\UCenter;

use Thinker\Facades\UCenter;
use Thinker\Facades\UCenterApi;
use Thinker\Models\AccessToken;

class WebAuth extends Auth
{

    public function redirect()
    {
        return redirect(UCenterApi::urlOfAuthorizePage());
    }

    public function user($code)
    {
        $accessToken = new AccessToken(
            UCenterApi::getAccessTokenByCode($code)
        );

        return $this->makeUserByAccessToken($accessToken);
    }
}
