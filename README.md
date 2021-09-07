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

## Tags

git tag "V1.0.0"
git push --tags
