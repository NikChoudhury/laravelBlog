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
