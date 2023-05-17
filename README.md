<h1 align="center">UBX Case Management System</h1>
###### Installation
<p class="center"> <br>
- Create a new MYSQL database and update database details in `.env` file <br>
- `php artisan vendor:publish --provider="BalajiDharma\LaravelAdminCore\AdminCoreServiceProvider"` <br>
- `php artisan vendor:publish --provider="BalajiDharma\LaravelMenu\MenuServiceProvider"` <br>
- `php artisan migrate --seed --seeder=AdminCoreSeeder` <br>
- `npm install` <br>
- `npm run dev` <br>
- `php artisan serve` <br>
- Now open http://localhost:8000/
    
</p>    

<p class="center">
###### Super Admin Login <br>
- Email - superadmin@example.com
- Password - password
</p>





## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
