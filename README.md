# First Commit

## Branchs

-   production (real Production Workflow)
    -   hotfixes (branchs That are quick fixes on production)
-   staging (blue/green server-- duplicate our production enveoment)
-   master(main)
    -   features
-   qa (preform test beform marging into staging)

## Create New Branch

git checkout -b branchName

## Create New Feature Brach

git checkout -b feature/1-readme-git-code

## Merge Branch

-   First Checkout that branch where wana merge
    git merge master
    git push

## Tags -

git tag "V1.0.0"
git push --tags

# Make A controller

-   php artisan make:controller ControllerName

# Make A Component

-   php artisan make:component ComponentName
    -   this will create two file one is on views/components
    -   and the other is on app/Views/components

# Middleware In Laravel

Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application.

    - Global Middleware (Check All Request)
    - Group Middleware (Check Request For Particular Group )
    - Route Middleware (Check Request For Particuler Route)

## To Make A middleware

> php artisan make:middleware MiddlewareName

    -   this will create a file one is on app/Http/Middleware/MiddlewareName.php

# Form Validation In Laravel

For Submiting a Form in Laravel need A "\_token" which will get From the {{@csrf_field()}} function.

# Query Builder

Laravel's database query builder provides a convenient, fluent interface to creating and running database queries. It can be used to perform most database operations in your application and works perfectly with all of Laravel's supported database systems.

# Eloquent ORM (Model)

Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table. In addition to retrieving records from the database table, Eloquent models allow you to insert, update, and delete records from the table as well.
