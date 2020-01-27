## Restful API made with laravel

This API returns product recommendations based on weather
## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Docker and Composer

### Installing


Clone container


```
git clone https://github.com/Saltibarsciai/meteo-api-consumer.git
```


Navigate to cloned container

```
cd ~/meteo-api-consumer
```

Execute docker-compose.yml

```
docker-compose up -d
```

Enter the bash


```
docker-compose exec php-fpm bash
```

Install composer dependencies

```
composer install
```

Copy and rename .env.example file

```
cp .env.example .env
```

Generate app key

```
php artisan key:generate
```

Create and seed database

```
php artisan migrate --seed
```

Example http://localhost:8081/api/products/recommended/utena

## Response info
API endpoint should look like this:

 localhost:8081/api/products/recommended/**{city}**
 
 for example:
 
 localhost:8081/api/products/recommended/**{Vilnius}**
 
 **_Response for this will be_**
 
 ```json
{
    "city": "vilnius",
    "current_weather": "light-rain",
    "recommended_products": [
        {
          "sku": "a-46",
          "name": "Red a",
          "price": 25
        },
        {
          "sku": "pla-7",
          "name": "LightGoldenRodYellow placeat",
          "price": 24
        }
     ]
 }
 ```
Try these yourself:

localhost:8081/api/products/recommended/**{taurage}**

localhost:8081/api/products/recommended/**{kaunas}**

localhost:8081/api/products/recommended/**{klaipeda}**
