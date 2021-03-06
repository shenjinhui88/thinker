<?php

namespace Tests\Unit\Api;

use Tests\TestCase;
use Thinker\Facades\UCenterApi;

class GetAccessTokenByCodeTest extends TestCase
{
    
    public function test_it_returns_ok()
    {
        $this->mockApiDemo('GetAccessTokenByCode', 'ok');

        $result = UCenterApi::getAccessTokenByCode($code = 123456);

        $this->assertObjectHasAttribute('access_token', $result);
    }

}
