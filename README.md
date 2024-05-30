# PHP test

## 1. Installation

  - create an empty database named "phptest" on your MySQL server
  - import the dbdump.sql in the "phptest" database
  - put your MySQL server credentials in the constructor of DB class
  - you can test the demo script in your shell: "php index.php"

## 2. Expectations

This simple application works, but with very old-style monolithic codebase, so do anything you want with it, to make it:

  - easier to work with
  - more maintainable

  ## 2. Output

Working functionalities:

  - Displaying of user-friendly table contanining news and comments records.
  - Deletion of news and comments records.
  - Adding of new records for news and comments.
  
Added templates/files/folders:

- Twig template for views (installed using composer)
- composer files (.json, .lock, vendor)
- Controllers.php for AJAX requests.
- js/main.js for delete and add ajax requests.
- screenshots (contains all screenshots of the result)

Altered files:

- utils/DB.php
- utils/NewsManager.php

Development tools used:

- XAMPP
- VS Code
