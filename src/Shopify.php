<?php

namespace Slashnode\OAuth2;

use League\OAuth2\Client\Provider\IdentityProvider;

class Shopify extends IdentityProvider
{
    protected $store_url;

    public function urlAuthorize()
    {
        return "{$this->store_url}/admin/oauth/authorize";
    }

    public function urlAccessToken()
    {
        return "{$this->store_url}/admin/oauth/access_token";
    }

    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        // not implemented
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        // not implemented
    }

    public function setStoreUrl($store_url)
    {
        $this->store_url = $store_url;
    }
}