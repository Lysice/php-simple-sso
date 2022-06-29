# PHP Simple SSO skeleton

[![Latest Stable Version]](https://packagist.org/packages/lysice/php-simple-sso)   


### Words meanings
* ***SSO*** - Single Sign-On.
* ***Server*** - page which works as SSO server, handles authentications, stores all sessions data.
* ***Broker*** - your page which is used visited by clients/users.
* ***Client/User*** - your every visitor.

### How it works?
Client visits Broker and unique token is generated. When new token is generated we need to attach Client session to his session in Broker so he will be redirected to Server and back to Broker at this moment new session in Server will be created and associated with Client session in Broker's page. When Client visits other Broker same steps will be done except that when Client will be redirected to Server he already use his old session and same session id which associated with Broker#1.

# Usage
This is only a skeleton package so you need to write a little bit extra code to get it working.

You can see [examples in docs/examples directory](docs/examples) and try to use it for your project. Also there is available [Laravel package](https://github.com/lysice/laravel-sso) which is written based on this package.
