**Steps to install:**

1. Clone the repository on your local machine:  git clone https://github.com/ciprianNetoiu/sky.git
2. Make a database and a user for it in MySQL. Fill the .env file with the database credential. Default values are:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sky
   DB_USERNAME=sky
   DB_PASSWORD=sky2023

3. In a terminal, inside the root folder, run the following commands:
   php artisan migrate
   php artisan db:seed

**How to test the application:**

To start the app just run this command inside the root folder: php artisan serve
You should get a message like this:  INFO  Server running on [http://127.0.0.1:8000].

Open Postman or another similar app.
Make a post request using the base URL you received above. Full URL using the IP I received:
http://127.0.0.1:8000/api/crossword
I used a bearer token for authentication. As it was not time to make a mechanism to generate the token, I just hard-coded it. The bearer is: f684dd2a-f72d-4bc4-b24f-445a54f1763b
As a parameter you can add 'date' equal to a database formatted date (2023-08-24). This parameter is not mandatory.
If the date in the post request matches one of the already created crosswords, I return the crossword for that day, if not a new one is generated. So if you want a crossword from the past, you only have to make a request with the desired date.
Send the request, and you should get the desired response.

**Answers:**
1. Which infrastructure resources you would need to run the utility daily in an automated fashion?
   I would use the Laravel Queues system to create a job that runs every night. I could also use a cronjob to do this.
2. How would you deploy your code to the infrastructure?
   I use devAzure for deployments. I have a pipeline for my project, and I make a new release from the master branch each time I want to deploy new code.
3. How would you automate your deployments so that each push to your default branch will trigger a deployment to your production environment?
   I used to work in a team witch automated the deployment when pushing to server. I don't actually like this idea. We were working with GitHub, and we used GitHub service hooks for this.
4. Is it possible to get the data about past crosswords? If yes, how would you build a solution to get all the historical crosswords data?
   It is possible, I already implemented a solution in the project.
   I have 3 tables in the database:
    - items - a table where all possible words are kept (in the project, I only have the ones you included in the PDF)
    - crossword_items -  as a link table where I keep all the words linked to the crossword table
    - crosswords - is the main table where a new record is created for each day
   All the historical crosswords are stored in the database, so we can access them whenever we want.



	
