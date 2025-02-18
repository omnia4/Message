# Task: Send Message to 10,000 Users

## Steps Done:
1. Set up Laravel Queue using Redis.
2. Created a Job (`SendMessageToUsers`) to handle sending messages.
3. Used chunking to process users in batches of 200 to avoid memory issues.
4. Created a Mailable (`CustomMessage`) for email content.
5. Tested the system with a small number of users.
6. Documented the process in this file.

## How to Run:
1. Clone the repository.
2. Run `composer install`.
3. Set up `.env` file with your database and Redis credentials.
4. Run migrations: `php artisan migrate`.
5. Start the queue worker: `php artisan queue:work`.
6. Trigger the job by visiting the designated route or running a command.

## Notes:
- Ensure Redis is installed and running.
- Adjust the number of workers based on server capacity.