# Shopify OAuth 2 client adapter

## Usage

```
// instantiate
$this->provider = new Slashnode\OAuth2\Shopify([
    'clientId'      =>  'client_id_goes_here',
    'clientSecret'  =>  'client_secret_goes_here',
    'redirectUri'   =>  'https://www.yourapp.com/oauth',
]);

// set the shopify store url
$this->provider->setStoreUrl('https://yourstorename.myshopify.com');

// set the scopes required
$this->provider->setScopes(array(
    'read_orders',
    'write_orders',
    'read_products',
    'read_customers',
));
```

You can then use as such:

```
// get the authorization URL
$url = $this->provider->getAuthorizationUrl();

```

```
// exchange authorization code for a token
$token = $this->provider->getAccessToken('authorization_code', [
    'code' => $code
]);
```