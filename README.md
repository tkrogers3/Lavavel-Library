Tech Stack

HTML
CSS
JS
MySQL
PHP
Laravel
Localhost


Process
Setup
Plan out and pseudocode your project - see example kanban
Create GitHub repo Locally via laravel new my-app - see installing Laravel
NPM/Composer install and import/route necessary css/js/php libraries (E.g. Bootstrap, Passport)
Save all and create your first commit to master, then switch to a dev branch
Application File Structure
See Laravel Directory to understand what files are created and where they live

Develop
Create a dev branch to commit your code to
Add content and elements to your website
View changes and test locally
Save often, and commit to your development branch on GitHub when important changes happen
Push your commits to GitHub remote
For bug fixes, refactored code, and feature branches, you must create a branch off of dev onto a new-feature branch and create a Pull Request into dev branch when complete


Deploy
Create a Pull Request from dev into master
Confirm code is up to date and works correctly
Link your username.github.io to point to your new project or add it to an existing portfolio in settings
Push your code from local to either GitHub Pages or Firebase and save the hosting link in your repo description
Post a link to your Repo to the Projects Slack channel
Requirements
Do not begin using React until you have successfully completed the project. This is a back end project; it does not need to look pretty, it needs to work.

To complete the assignment, you must complete the following:

Create object relationship diagram (database tables with relationships)

Store a table of library card holders as users in your local MySQL database.

Store a table of books to checkout.

Store a table of checked out books and meta data such as date and number of times checked out as checkouts in your local MySQL database.

Implement full CRUD operations (create books and checkouts, read books and checked out books, update books, delete checkouts)

Implement foreign key relations to correctly store data using Eloquent

Users do not need to sign up or be real people, you can simulate this by creating a "new user" with Tinker.

Show all user and book statistics that are saved in database (for example: There are 3 users registered with the library, user "jim" has 2 books checked out: "Algorithms", and "Design Patterns", user "phil" has 0 books checked out, and user "sally" has 1 book checked out: "The Pragmatic Programmer", there are 5 books in the library total, three are checked out, etc.) you can format this data however you'd like, we suggest a html table with multiple tabs

Be able to click any user or book and view the info as well as perform full CRUD where applicable.(librarian superuser can perform any action and view any page, but basic card holder user can only view a subset of pages and perform limited actions)