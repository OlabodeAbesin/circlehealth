# Circle Link Health

Build a Laravel application which will be used by nurses to input their patients’ blood pressure readings. 

**The application should have below features**

- [x] A page for creating patients
- [X] A page to record blood pressure readings for patients
- [x] Export a CSV of all patients 

**Dev requirements**

- [x] Use Laravel Excel to generate CSV
- [x] Use Livewire Datatables
- [x] Use tailwind css
- [x] Write tests
- [x] Use Alpine/Livewire, not Vue.js or anything else
- [x] Create a seeder that seeds the DB with 50000 patients. We will run this seeder when evaluating your project. The app and CSV export should work with 50000 patients.

## Installation

1. Clone the repository
```
git clone https://github.com/olabodeabesin/circlelink
```

2. Create a local environment and update the variables
```
cp .env.example .env
```

4. Install all composer dependencies
```
 composer install
```

5. Install all npm dependencies
```
 npm install
```

6. Generate an application key
```
php artisan key:generate
```

7. Run all migrations
```
php artisan migrate
```

8. Run all seeders (This will take a few minutes to run initial patient data)
```
php artisan artisan db:seed
```

9. While waiting for Seeders to run, you can login immediately with below credentials
```
email => johndoe@gmail.com,
password => 123456789,
```

10. Finding it difficult to export? Please see image https://imgur.com/a/rK80vGL


11. Run tests
```
php artisan test
```

