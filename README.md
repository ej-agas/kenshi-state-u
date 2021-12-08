# kenshi-state-u
Our 3rd year college web app converted to Laravel

---

## Minimum requirements to run

### [PHP v8.0.x](https://www.php.net/downloads.php)

### [Composer v2 or greater](https://getcomposer.org/)

### [MySQL 5.7.x](https://dev.mysql.com/downloads/mysql/5.7.html)

Once you have all 3 in your system and a mysql server running locally, proceed to the next step.

---

### Running the app locally

Inside the project directory, execute the following commands.

1. Install dependencies by running`composer install`
2. Copy the `.env.example` file and rename it to `.env`

***If you have custom database username and password set it now in your newly made `.env` file.*** <br>
***Find the entries below in the `.env` file and change them to the ones that you prefer.***
```
DB_DATABASE=ksu-database
DB_USERNAME=root
DB_PASSWORD=
```

3. Run the command `php artisan key:generate` to generate a unique key for encrypting session cookies
4. Make a schema in your database named `ksu-database` or to the one you have set earlier.
5. Run the command `php artisan migrate --seed` to create the tables in your database and also create dummy data.
6. Run the app by executing command `php artisan serve`
7. Visit the app in the browser via `localhost:8000` or `127.0.0.1:8000` if you have `localhost` pointed to a different address.

### Credentials

```
Admin
email: admin@ksu.edu
password: 123123123

all randomly generated students and teachers have default password of 123123123
```
