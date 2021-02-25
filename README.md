# Laravel React To Do App

![Screenshot](./Tasks.png 'Screenshot')

An example Task Manager App built with Laravel. It includes:

- Create, Read, Update, Delete functionality (CRUD)
- Task are ordered by priority (High, Medium, or Low)
- Tasks are stored on a MySQL table

## Set Up

#### Clone the repository:

```bash
git clone https://github.com/kchhan/tasks-app.git
```

#### Create your environment file:

```bash
cp .env.example .env
```

#### Update these settings in the .env file:

-   DB_DATABASE (your local database, i.e. "todo")
-   DB_USERNAME (your local db username, i.e. "root")
-   DB_PASSWORD (your local db password, i.e. "")

#### Install PHP dependencies:

```bash
composer install
```

_If you don't have Composer installed, [instructions here](https://getcomposer.org/)._

#### Generate an app key:

```bash
php artisan key:generate
```
#### Run the database migrations:

```bash
php artisan migrate
```
#### Install Javascript dependencies:

```bash
npm install
```

_If you don't have Node and NPM installed, [instructions here](https://www.npmjs.com/get-npm)._

#### Run an initial build:

```bash
npm run dev
```

**Laravel Docs:**

[https://laravel.com/docs/](https://laravel.com/docs/)
