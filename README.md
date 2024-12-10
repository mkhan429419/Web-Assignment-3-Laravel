# Triathlon PK - Web Application (Assignment 3)

This project is a dynamic web application built with **Laravel PHP** as part of Assignment 3 for the course. It showcases different features such as **facilities**, **services**, **specialties**, and **instructors** for a triathlon event.

## Group Members

- Aimen Munawar - BESE-13-A (415867)
- Hadia Ali - BESE-13-A (410865)
- Maheen Akhtar Khan - BESE-13-A (429419)

## GitHub Repository

[Triathlon PK - Web Application GitHub Repository](https://github.com/mkhan429419/Web-Assignment-3-Laravel)

## Steps to Run the Code Locally

Follow the steps below to set up the project on your local machine:

### 1. **Clone the Repository**

```bash
git clone https://github.com/mkhan429419/Web-Assignment-3-Laravel.git
cd web-assignment-3
npm install
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed --class=FacilitiesTableSeeder
php artisan db:seed --class=ServicesTableSeeder
php artisan db:seed --class=SpecialtiesTableSeeder
php artisan db:seed --class=InstructorsTableSeeder
npm run dev
php artisan serve



