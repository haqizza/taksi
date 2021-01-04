# Setup

## Install Dependencies
```
~ composer install
```

## Migrate And Seed Database
```
~ php spark migrate
~ php spark db:seed UserSeeder
~ php spark db:seed PembayaranSeeder
```

## Run Application
```
~ php spark serve
```