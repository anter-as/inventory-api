<h1 align="center">Laravel Inventory Management API</h1>

## About APP

A simplified RESTful API for managing inventory across multiple warehouses.


## 🧱 Requirements

- PHP 8
- Composer
- MySQL
- Web server (e.g., Apache, Nginx)

## Installation

1. **Clone the repository**:

   ```bash
   git clone https://github.com/anter-as/inventory-api.git
   cd inventory-api

2. **Install dependencies**:

   ```bash
   composer install

3. **Copy .env file**:

   ```bash
   cp .env.example .env

4. **Configure .env with your database credentials**:

   ```bash
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_username_password

5. **Generate app key**:

   ```bash
   php artisan key:generate

6. **Run migrations and seeders**:

   ```bash
   php artisan migrate --seed

7. **Serve the app**:

   ```bash
   php artisan serve

And You're ready to use the APIs

## 🔐 Authentication

1. **Create a user manually via Tinker**:

   ```bash
   php artisan tinker
   $user = \App\Models\User::factory()->create();
   $token = $user->createToken('api-token')->plainTextToken;
   echo $token;

2. **Then use the token in your requests**:

    ```makefile
    Authorization: Bearer YOUR_TOKEN_HERE

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### 📡 API Endpoints

All endpoints are protected using Sanctum. Use the Authorization header in every request

### 📦 Inventory

* GET /api/inventory
  * List paginated inventory items
  * Optional filters:
    * ?name=laptop
    * ?min_price=100
    * ?max_price=500

### 🔄 Stock Transfers

* POST /api/stock-transfers
  * Body

    ```json
    {
        "inventory_item_id": 1,
        "from_warehouse_id": 1,
        "to_warehouse_id": 2,
        "quantity": 10
    }

### 🏢 Warehouse Inventory

* GET /api/warehouses/{id}/inventory
  * Lists stock items for a specific warehouse
  * Response is cached for 10 minutes

## 🧪 Running Tests

1. **Create a separate database for tests (e.g., inventory_test)**

2. **Update .env.testing**:

    ```env
    DB_CONNECTION=mysql
    DB_DATABASE=inventory_test
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_username_password

3. **Run tests**:

    ```bash
    php artisan test
