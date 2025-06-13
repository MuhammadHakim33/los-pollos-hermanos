## Installation

1. Clone this project
    ```sh
    git clone https://github.com/MuhammadHakim33/los-pollos-hermanos.git
    ```
2. Install all dependencies
    ```sh
    composer install
    ```
    ```sh
    npm install
    ```
3. Create new database in your local
4. Duplicate the `.env.example` file then rename it to `.env`
5. Set the mysql db connection in the .env file
6. Run migration & seeder
    ```sh
    php artisan migrate --seed
    ```
7. Run the app
    ```sh
    php artisan serve
    ```
    ```sh
    npm run dev
    ```
