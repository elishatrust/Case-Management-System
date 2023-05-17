<h1 align="center">UBX Case Management System</h1>
###### Installation
<p class="center">
- Create a new MYSQL database and update database details in `.env` file
- `php artisan vendor:publish --provider="BalajiDharma\LaravelAdminCore\AdminCoreServiceProvider"`
- `php artisan vendor:publish --provider="BalajiDharma\LaravelMenu\MenuServiceProvider"`
- `php artisan migrate --seed --seeder=AdminCoreSeeder`
- `npm install`
- `npm run dev`
- `php artisan serve`
- Now open http://localhost:8000/
    
</p>    

<p class="center">
###### Super Admin Login
- Email - superadmin@example.com
- Password - password
</p>





## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
