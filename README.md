## Ancestors
project for heritage research

## Features

- Laravel 5.5 + Vue + Vue Router + Vuex
- Pages with custom layouts 
- Examples for login, register and password reset
- Integration with [vform](https://github.com/cretueusebiu/vform)
- Authentication with [JWT](https://github.com/tymondesigns/jwt-auth)
- Webpack with [laravel-mix](https://github.com/JeffreyWay/laravel-mix)
- SVG icons with [svg-sprite-loader](https://github.com/kisenka/svg-sprite-loader)

## Installation

- `git clone https://github.com/sooand/ancestors.git`
- `cd ancestors`
- `cp .env.example .env`
- `composer install`
- `php artisan key:generate`
- `php artisan jwt:secret`
- Edit `.env` and set your database connection details
- `php artisan migrate`
- `npm install` / `yarn`

## Usage

#### Development

```bash
# build and watch
npm run watch

# serve with hot reloading
npm run hot
```

#### Production

```bash
npm run production
```