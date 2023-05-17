<h1 align="center">UBX Case Management System</h1>
</p>


## Installation

- Create a new MYSQL database and update database details in `.env` file
- Upload SQL file attached to your Database
- `npm install`
- `npm run dev`
- `php artisan serve`
- Now open http://localhost:8000/

###### Super Admin Login
- Email - superadmin@example.com
- Password - password

###### Lawyer Login
- Email - test@example.com
- Password - 12345678

#### Admin Configuration:

To change the Admin Prefix, change `prefix` on `config/admin.php` or add the `ADMIN_PREFIX` on env 

```php
'prefix' => env('ADMIN_PREFIX', 'admin'),
```

</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
