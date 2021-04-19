# COGIP-app

This was a group project (made with [Charlotte](https://github.com/CharlotteMoureau) and [Samantha](https://github.com/Samantha-35)) carried out from the 05<sup>th</sup> to the 19<sup>th</sup> of April 2021 (including one week off) as part of the BeCode Liège's Junior Web Developer programm. We were tasked to make an accounting website for the ~~very well known~~ [COGIP](https://www.youtube.com/watch?v=15fqMAO76S8) company. The database must include data relating to people, companies and invoices which should be related as folow:

- Company --- type
- Company --- invoice
- People --- invoice
- People --- company

The app itself must include a companies page, an invoices page, a contact page and a providers/clients page as well as details pages for all of these informations. COGIP's director Jean-Christian must also have administrator rights to manage users, modify and delete data and be able to add new invoice, contact and company. His secretary Muriel should have moderator rights that only allows her to add new data.

## Mission objectives

- Use of different URL parameters and filename
- Use of sanitization to avoid SQL injections
- Validation of data
- Construction of a functional relational database
- Use of correct joins in SQL
- Use of aliases in your SQL request
- Implementation of a CRUD to read, add, modify and delete data

## Learning objectives

- [ ]  Crypt password in a database
- [ ]  Use an MVC structure
- [ ]  Use a router
- [ ]  Setup a session
- [ ]  Allow access to certain page in regards to permissions

### Languages

- PHP
- Boostrap
- Docker environment
- Deployment to Heroku (thanks to the tutorial of [Maxime](https://github.com/Maxime-Bott/how_to_deploy_docker_apache_to_heroku))

## Who did what:

- William: creating the database, design of all the pages using Bootstrap, population of the MySQL table
- Samantha: creating the database, setup of webphpmyadmin, rewriting of the url
- Charlotte: creating the database, MVC structure, SQL requests, router, CRUD
## Deployed on Heroku:

### [Here!]()
