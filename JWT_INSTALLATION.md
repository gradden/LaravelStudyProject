1. composer require php-open-source-saver/jwt-auth
2. php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
3. php artisan jwt:secret
4. A 'User' modellt kiegészítettem a 'use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;' és 'implements JWTSubject'
5. Két funkciót adtam hozzá a User modellhez még
6. Módosítottam a 'config/auth.php' fájlt, hogy a jwt authorizációt használja
7. Átírtam az AuthControllerben a login() függvényt, hogy a token változó az 'auth()->login($user)' függvényt használja.
