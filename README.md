## Author

[Anurag Deep](https://anuragdeep.com/)

## Run Locally

Clone the project

```bash
  git clone https://github.com/anuragdeepxon/CupidKnot.git
```

Go to the project directory

```bash
  cd CupidKnot
```

Install dependencies

```bash
  npm install
```

Run mix

```bash
  npm run dev
```

Install PHP dependencies

```bash
  composer install
```

Generate Key

```bash
  php artisan key:generate
```

Start the server

```bash
  php artisan serve
```

## Database

Update .env with database credentials, then run migrations

```bash
  php artisan migrate
```

Run Seeder to generate random users and to admin user

```bash
  php artisan db:seed
```

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`GOOGLE_CLIENT_ID=1082417790070-7of4d2op3n7ln8lko5krhak8pksfbl3a.apps.googleusercontent.com`

`GOOGLE_CLIENT_SECRET=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`

## Admin Credential

username: `admin@example.com`

password: `12345678`

## Demo Images

Login Page:
![image description](/public/images/login.png)

SignUp Page:
![image description](/public/images/singup1.png)

SignUp Page:
![image description](/public/images/singup2.png)

Google Auth:
![image description](/public/images/google.png)

User Dashboard:
![image description](/public/images/userpanel.png)

Admin Dashboard:
![image description](/public/images/adminpanel.png)

Logout:
![image description](/public/images/logout.png)
