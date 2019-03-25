## Primedia

### instructions for setup
This is a laravel project ([laravel.com](laravel.com)).   
To run it, it requires `php` and `mysql` or any relational db like postgres, mssql etc.

After cloning the project, fill in the `.env` file with the necessary database details and run the following command.   
`php artisan migrate --seed`

Everything is ready at this point.

They are sevaral options available for testing the API.

one with the least setup is running `php artisan serve`.

From there postman/any browser can be used to test the API endpoint available.

#### endpoint details
 endpoint requires a `date` in the format `Y-m-d`.  
and a `station` (options `[kfm, capetalk, 702, 947]`).  

The url has to be constructed as follows:

`{baseUrl}/api/{date}/{station}`


where `date` and `station` follow the guidelines above.   
Example:`{baseUrl}/api/2019-03-22/kfm`

`baseUrl` is the url to access the app.
