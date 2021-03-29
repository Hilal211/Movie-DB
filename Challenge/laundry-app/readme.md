TODO: add readme instructions

##### php artisan api:generate

### Running the application for the first time:
1. Prepare the .env file by creating .env in the back-end directory.
2. Copy the content of .env.example to .env and replace the DB Section with your own
3. Go to back-end directory using the terminal
4. In the terminal run `$ composer install`
5. In the terminal run `$ php artisan migrate --seed` this will add default data into your database
6. In the terminal run `$ php artisan key:generate` 
7. In the terminal run `$ php artisan storage:link` this will create a symbolic link for the storage `back-end/storage/public` to `back-end/public/storage`
8. In the terminal run `$ php artisan jwt:secret` this will generate a secret key to be user for authentication system
9. In the terminal run `$ php artisan serve` this will run the application
10. to login into the default dashboard go to `back-end/config/auth.php` file, and search for the `Authentication Defaults` section.
    Replace 
    ```php
    'defaults' => [
            'guard' => 'api',
            'passwords' => 'users',
        ],
    ```
    with
    ```php
     'defaults' => [
                'guard' => 'web',
                'passwords' => 'users',
        ],
    ```
    
 11. To login using the JWT API go to `back-end/config/auth.php` file, and search for the `Authentication Defaults` section.
    Replace 
    ```php
    'defaults' => [
            'guard' => 'web',
            'passwords' => 'users',
        ],
    ```
    with
    ```php
     'defaults' => [
                'guard' => 'api',
                'passwords' => 'users',
        ],
    ```


### API Documentation:
- You can find the API documentation inside back-end/public/docs/index.html
- Open the back-end/public/docs/index.html in your browser where you will see the API documentation.

### Testing API using Postman ( If till now you don't know what is Postman ask your teammates )
1. Open Postman
2. In Postaman search on how to import collections
3. The application collection is available inside back-end/public/docs/collection.json
4. To test the API that need authentications first make a request to login and get the token from the response
5. Second: use this token in every request that need Authentication by specifying a header key `Authorization` with value `Bearer {token}`, The `{token}` is the token that the login request had returned in the previous api call
 
### References:
- [Auth Tutorial](https://medium.com/@manuelmauriciozamarrn/implementing-jwt-on-laravel-5-8-edc39f545886)
- [QuickAdminPanel](https://2019.quickadminpanel.com/)
