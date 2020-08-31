# The yBank
>The yBank root repo


## Contributors::busts_in_silhouette:
Geoffrey Oliaro

## Description
The yBank is a Laravel, vue application that allows a user to register and complete simple bank transactions 
The back end for the yBank runs on Laravel
The front end runs on vueJs and consumes the Laravel backend restful APIs

## Build Setup
Since this project is composed of two applications running synchronously one should install both the two applications to be able to 
## Note :warning:
The various guides on how to get started are written also in each of the relevant directories for ease of use
see a successful project build
# The back end (api)

To run the project locally one has to:
1. Clone the project (git clone).
2. cd into the api directory
3. create a new empty mysql Database
4. create a new .env file in the root api directory
5. Using .env.example as a point of reference setup 
your .env file to suit your local environment
6. Do not forget to reference
the db name, db password and db username in the .env file
7. now run the command ```bash $ composer install ``` 
8. now run the command ```bash $ npm install ``` 
9. now run the command ```bash $ php artisan key:generate ``` 
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

# The front end (web)

To run the project locally one has to:
1. Clone the project.
2. cd into the web directory then run the relevant command suitable to the intended result :



```bash
# install dependencies

$ npm install

# serve with hot reload at localhost:3000
$ npm run dev

# build for production and launch server
$ npm run build
$ npm run start

# generate static project
$ npm run generate

# run jest unit tests
$ npm run test

```
  
## Build Result
On successful build this is the result on port 8000(back end)
![yBankAPi](https://user-images.githubusercontent.com/36531897/91689665-4207ee00-eb6d-11ea-8b8e-5f2be10c91e1.PNG)

This is the result after running npm install then running npm run dev on port 3000(front end)
![yBankWeb](https://user-images.githubusercontent.com/36531897/91686238-6e1f7100-eb65-11ea-9076-3e55859950ca.PNG)


