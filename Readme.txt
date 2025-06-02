# Laravel + Tailwind CSS Installation Guide

## 1. Install Laravel

If you don't have Composer installed, install it first: https://getcomposer.org/download/

Then run:
composer create-project laravel/laravel todo-app

cd todo-app

## 2. Install Tailwind CSS

Install Tailwind and its dependencies:
npm install -D tailwindcss postcss autoprefixer

Initialize Tailwind config:
npx tailwindcss init -p

## 3. Configure Tailwind

Edit `tailwind.config.js`: