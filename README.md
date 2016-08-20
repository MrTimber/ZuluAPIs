# ZuluAPIs
Implementation of the Zulutrade APIs (Forex &amp; Binary Options) for the client side

* [ZuluTrading Forex API Reference](https://www.zulutrade.com/restapi-reference)
* [ZuluTrading Binary API Reference](https://www.zulutrade.com/restapi-binary-reference)

**A forex trader account is needed** to use the forex API functions, and **a binary options trader account is needed** to use the binary options API functions.

There is a `index.php.ori` file in the root folder. Copy it to `index.php`, and put your login and password informations inside at this place :

    $zuluForexClient = new ZuluForexClient('forex_trader_account_login', 'forex_trader_account_password');
    $zuluBOsClient = new ZuluBOsClient('binary_options_trader_account_login', 'binary_options_trader_password');
    
*The `.gitignore` file is setted to git ignore the index.php file, so you're login and password informations won't be be added to your commits.*

> Note : This implementation of a REST API use [Guzzle](https://github.com/guzzle/guzzle) for requests management.
