# Hacker News clone in PHP


## Features

- Submit stories or ask questions.
- Recursive comments
- Vote on questions and comments
- Stories are ranked based on user votes using an algorithm similar to [hacker news ranking].

## System Requirements

This is using 
- PHP >= 5.2.X
- MySQL >= 5.6

##Installation

Installation requires access to a command line.
** Clone/download the repository

Install dependencies
**run composer install
** Update config.ini with your database information
  * I used MyAdminPhp for MySQL DB
  * Make sure the db user has permission to create tables.
**execute php install.php
** goto http://{{SiteName}}/signup.php and create a new user:

