## Task description

We want you to create a small web app where the user can find jobs he/she is interested in. Moreover, there should
be the possibility to publish a new job for an admin user and make it available to potential candidates.
The next section outlines the specific task we want you to do.

## Tasks to be done

1. The home page should initially show a list of all recent jobs.
   The `index.blade.php` is the home page which contains the starting point for you.

   Following information should be displayed in the job list on the home page:
    * Title of the job.
    * Name of the company the job belongs to.
    * Description of the job.
    * Location.
    * Date and Time the job was published (format: yyyy-MM-dd HH:mm:ss)

   - The jobs in the list should be sorted by the `created_at` timestamp descending by default, which means that the most recent ones should be at the top.
   - Moreover, only the jobs which were created within the last week should be included in the list.
   - There should be a button above the job list which can reverse the order.
   - A job can either be active or inactive if taken by an applicant. As a user I want to see visually which job is active
   and which one inactive. Think about how this can look in the UI and implement it.

At the bottom of this section there is a link to a UI-Mockup, which shows you how the layout of the small web-app
should approximately look like.

2. An input field should be provided where the user can search for a job by its title. As the user keeps typing
   the list of jobs should be adapted immediately based on the search pattern. The filtering should be done solely on the client
   side in order to provide a good user experience. This functionality should be implemented on the client-side in JavaScript.

3. According to the proposed UI mock-up (see bottom of this section), additional filter options should be provided to the user. Firstly, he/she should
   be able to narrow down the search results based on the selected locations shown in the sidebar. All locations from the available jobs should be selectable in the sidebar.
   As you have all jobs with all attributes present on the client, you don't have to load anything extra but do the work on the client side.

4. Secondly the user should also be able to search for jobs from specific companies. Therefore, add the available companies
   as selectable options in the sidebar. 
   If the user selects a company, only the jobs which belong to this company should be shown in the list.
   
5. Next to each item in the job list the user should have the possibility to highlight a job. When clicking the respective button
the item should be highlighted so that you can clearly distinguish it from the other jobs. When clicking the button again, it should be reverted.
   The information whether a job is highlighted should be updated in the database as well (`highlighted` column). 

For all the filter options as well as the highlighting, the list in the UI should automatically update without a page refresh.

5. There should be a link on the home page, called "Add new job ad", which brings the user to a new page where he/she first needs
   to provide a password to confirm that he/she is an admin user. If the user types in the correct password a form is shown where he/she can enter a new job ad.
   If the password was incorrect, an error should be shown and the user should not get redirected to the next page with the form.
   You are not required to follow any security best practices like you would have to do in a real productive app. You can simply
   hard-code the admin password and compare against it in the frontend. This means, you don't have to do a request to the backend to validate it.

On the target page with the form there should be according input fields for title, description and location of the job as well as a dropdown list with the
available companies. When the user fills in all the data and hits the "Save" button, a new job should be saved to the database
and the user should get redirected to the home page with the full list of jobs afterwards. All the attributes of the job
are mandatory and if the user tries to submit an incomplete form, an error should be shown.
When the job was created successfully the user should get redirected back to the home page and the new job should be shown at the top of the list (as it is the most recent one).

Here is a UI mockup of the home page to give you a hint about the layout.
[UI-Mockup](https://drive.google.com/open?id=1LNf1n1k8JtmjdAwx_k5vEwj4Cc1WZ37v)

## Project Setup

In order to get you started quickly we have created a basic project setup for you. It uses the PHP web framework [Laravel](https://laravel.com),
which we also use at jobs.at for our projects. It gives you a great starting point to prototype a web app with PHP, HTML, CSS and JavaScript.

## Requirements to run this project
If you have PHP, composer and Node installed on your machine can skip the the following two steps and continue with the
next section.

1. Make sure you have installed PHP.

   On Windows you can use [WAMP](http://www.wampserver.com/en/).
   On Mac OSX we recommend installing PHP via [Homebrew](https://brew.sh/index_de). Just execute `brew install php`.
   On Linux (Ubuntu) you can use `sudo apt-get install php`.
   Check your installation with `php -v`.

2. Install composer (the package manager for PHP)

   [Download and install](https://getcomposer.org/download/)
   If you are n Mac OSX you can also use `brew install composer`.
   Check you installation with `composer --version`.

## Startup the project

Now, you are already setup to run this project for the first time.

1. Get the playground to your machine by either
    * Forking the repository into your github account (preferred).
    * If for whatever reason you do not have a Github account run `git clone https://github.com/jobs-at/coding-exercise-frontend-vanillajs.git coding-exercise` to clone the repository to your machine.
2. Run `cd coding-exercise` to change to the project folder.
3. Run `composer install` to install all PHP dependencies.
4. Copy the content of `.env.example` to `.env` file.
5. Run `php artisan key:generate` to generate the necessary application key which will be put automatically into you `.env` file.
6. Run `php artisan serve` to startup the development server.
7. Open [http://localhost:8000/](http://localhost:8000/) in your browser.

## Frontend development

The frontend build requires you to have Node installed. If you do not yet have Node installed, you can download and
install it from [here](https://nodejs.org/en/download/). On MacOSX you can use `brew install node` as well.
Check your installation with `node -v` which should print the current node version.

Now run

1. `npm install` to install all frontend dependencies.
2. `npm run watch` to build the frontend and make it watching your files for any changes.
   This process will automatically detect any changes to frontend resources like HTML, SCSS and JS so that you only have
   to reload your browser window after a change.

## Database

In order to make the user experience more realistic the project uses a MySql database to store the jobs and companies
needed to complete the exercise. You therefore need to start a MySql database on your computer.

If have MySql installed on your machine, add a new database called `coding_exercise_frontend_vanillajs`. The default user
for this project is `root` with an empty password. If you want to use a different mysql user, change the config in your
`.env` file.

If you don't yet have MySql installed, you can download it from [here](https://dev.mysql.com/downloads/mysql/) and follow the instructions.
If you are on Mac, you can install it via `brew install mysql` or on Linux (Ubuntu) via `sudo apt-get install mysql-server` for instance.

## Job and company sample data

We have created database migrations and a seeder for you to build up the database quickly.
It also populates it with sample data (jobs and companies) so you do not have to manually enter any test data from scratch.

Simply execute `php artisan migrate:fresh --seed` to migrate the database and fill it with data.

After that you can connect to your database and check whether there is a `jobs` and a `companies` table with fake data.
The data consists of 30 random jobs and 3 companies whereby each of them having assigned 10 jobs.
Info: You do not have to pay attention to the `migrations` table.

## A few more tips before you start

Make sure you have started up the Laravel Development Server with `php artisan serve`.
I recommend running `npm run watch` which automatically refreshes you frontend resources like HTML (Blade), Vue (.vue), JS and SCSS when something changes.
As a result you just need to refresh your browser window and can inspect your changes.
If some change is not reflected in the browser you may have to rerun `npm run watch` at some point but this should actually
be the exception.

The project already contains the necessary models `Job.php` and `Company.php` (you can find them in the `app/Models` folder)
with the attributes from the database. Behind the scenes an OR mapper ([Eloquent](https://laravel.com/docs/8.x/eloquent)) uses these Model classes to ease the communication
with the database. There are also the routes to the home page (`http://localhost:8000`) and to the page where you can add a new job (`http://localhost:8000/jobs`).

Regarding the frontend, we do not expect a fancy UI design but keep mobile-first and responsiveness in mind when layouting the pages.
