# ybank

>The ybank - Back end

## Contributors::busts_in_silhouette:
Geoffrey Oliaro

## Description
This is a simple Laravel Back-end that generates the relevant restfull APIs for the yBank front end. To generate the APIs the application uses passport a composer package. The yBank Back end hosts the registration interface for the yBank front end

## Build Setup
To run the project locally one has to:
1. Clone the project (git clone).
2. cd into the api directory
3. create a new empty mysql Database
4. create a new .env file in the root api directory
5. Using .env.example as a point of reference setup your .env file to suit your local environment
6. Do not forget to reference the db name, db password and db username in the .env file
![example env](https://user-images.githubusercontent.com/36531897/91690926-6a90e780-eb6f-11ea-84b9-020fa3a10cea.PNG)
7.now run the command ```bash $ composer install ``` 
8.now run the command ```bash $ npm install ``` 
9.now run the command ```bash $ php artisan key:generate ``` 
10. now run the command ```bash $ php artisan migrate ``` 
11. now run the command ```bash $ php artisan serve ``` 

```bash
# install dependencies
$ composer install
$ npm install

# generate secure api key on env
$ php artisan key:generate

# run db migrations
$ php artisan migrate

# run the development server at localhost:8000
$ php artisan serve

# run unit tests
$ php artisan test

```

## Build Result
On successful build this is the result on port 8000
![yBankAPi](https://user-images.githubusercontent.com/36531897/91689665-4207ee00-eb6d-11ea-8b8e-5f2be10c91e1.PNG)
