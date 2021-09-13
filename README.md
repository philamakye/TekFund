# ABOUT TEKFUND
> TekFund is a crowdfunding platform originally built for the Kwame Nkrumah University of Science and Technology (KNUST) Community by three final year students [Philip Oduro Amakye](https://github.com/philamakye), [Gerald Bosu Ofori](https://github.com/geraldofori), [Daniel Ofei Manasseh](https://github.com/heywest).

## Running the project in localhost
- Clone or Download zip of the repository
- Open the terminal in the path of the project folder
- Run `composer install`
- Run `npm install`
- Run `npm run dev`
- Run `cp .env.example .env`
- Run `php artisan generate:key`
- Go to the env file and enter the name and password of your database eg. 'DB_DATABASE: Tekfund', 'DB_USERNAME: Root', 'DB_PASSWORD: mysql123'
- Run `php artisan migrate --seed`
- Finally run `php artisan serve` to run the project in your localhost.
