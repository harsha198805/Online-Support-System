# Online Support System
2025-06-22

The users table has a role column used to identify user types (e.g., agent).

Only authenticated users with the role agent are allowed to access agent-related routes.

Laravel's default authentication system is being used (auth middleware is applied).

Email configuration is assumed to be set in the .env file before testing.

Improvements Implemented

Created a custom AgentMiddleware to restrict access to agent-only routes.

Applied role-based access control using middleware.

Made the dashboard responsive for mobile users by fixing Bootstrap navbar toggle behavior.

Added filters (status, customer name search, date range) with auto-submit using jQuery.

Added a reset button for filters to clear query parameters.

Added color-coded status badges (Opened, Pending) using Bootstrap styling.

Made tables mobile-friendly with table-responsive.


git clone https://github.com/harsha198805/Online-Support-System.git

cd Online-Support-System

composer install

npm install

npm run build 

cp .env.example .env

php artisan key:generate

Set DB connection details

Configure mail settings

php artisan migrate

php artisan db:seed

php artisan serve

agent login link

http://127.0.0.1:8000/login

username = agent@example.com

password = 12345678
