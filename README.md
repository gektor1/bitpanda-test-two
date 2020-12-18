## PHP Technical test

### 2.

Create a new Laravel project using composer

Attached you will find a DB dump and a .csv file. 

Create a DB connection in laravel using the .env file. 

Seed the DB based on the dump

In the resulted DB you will have these 1 table: `transactions`.
```
* transactions: id, code, amount, user_id, created_at, updated_at
```

You have two sources. One DB and one is the .csv file

Write two services(classes) that implement an interface which will allow you to retrieve the data. 

1. Create an endpoint which will return the transactions in a json with an extra parameter which will specify the source

endpoints:
* .../transactions?source=db
* .../transactions?source=csv

Some ideas:
- you can create a factory to determine the class handler
- you can also validate the source value and if the value is unknown throw an exception (eg: /transactions?source=html)

### Installation

1. Clone repo

2. Change to directory

````
cd bitpanda-test-one
````   

3. Install dependencies

````
composer install
````

4. Copy .env file

```
cp .env.example .env
```

5. Modify `DB_*` value in `.env` with your database config.

6. Generate application key:

````
php artisan key:generate
````

7. Migrate
````
php artisan migrate
````

8. Run
````
php artisan serve
````

9. Visit localhost:8000 in your browser


## Database seeding

**Populate the database with seed data with relationships which includes `users`, `countries` and `user_details`.**

Run the database seeder and you're done
````
    php artisan db:seed
````
***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command
````
    php artisan migrate:refresh
````

# Testing
````
    php artisan test
````

## Results

http://localhost:8000/transactions?source=db

http://localhost:8000/transactions?source=csv

http://localhost:8000/transactions?source=test