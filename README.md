<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
 Multi-Tenant Laravel Project with InertiaJS

This Laravel application is designed for a multi-tenant architecture, providing a simple and efficient user experience using InertiaJS.
## Project Setup
# -composer install 
# -npm install 
# -npm run dev 
# -php artisan app:setup-database

### Done Now link tow test Domin lIke kfc.test and mac.test on localHost project

## Project Overview

The project achieves the following objectives:

1. **Setting Up the Laravel Project and Configuring Multi-Tenancy:**
   - Created a Laravel project supporting multi-tenancy without external packages.
   - Implemented user authentication.
   - Utilized InertiaJS for a seamless user experience.

2. **Superadmin Dashboard:**
   - Created a dashboard displaying all merchants and associated users.

3. **Merchant Dashboard:**
   - Developed a dashboard showing users associated with the current merchant.

4. **User Dashboard:**
   - Designed a welcoming dashboard for individual users.

5. **Seeders for Data:**
   - Implemented seeders to populate initial data, including super admin, 30 merchants, and 100 users per merchant.

 ## Default User Credentials 

### SuperAdmin 
- Email: SuperAdmin@test.com
- Password: 1234564789

- Email: SuperAdmin@email.com
- Password: 1234564789

### Merchant 
- Email: Kfc@email.com
- Password: 123456798

#### Merchant's Users
- User 1:
  - Email: Kfcuser-0@email.com
  - Password: 123456798
- User 2:
  - Email: Kfcuser-1@email.com
  - Password: 123456798
- User 3:
  - Email: Kfcuser-2@email.com
  - Password: 123456798

### Another Merchant
- Email: Mackdonaled@email.com
- Password: 123456789

#### Merchant's Users 
- User 1:
  - Email: Mackdonaleduser-0@email.com
  - Password: 123456798
- User 2:
  - Email: Mackdonaleduser-1@email.com
  - Password: 123456798
- User 3:
  - Email: Mackdonaleduser-2@email.com
  - Password: 123456789
