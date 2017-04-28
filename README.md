# INSEC2
UniTrend - THE online shopping mall.

This project was completed as part of the INSE unit during year 2 at the University of Portsmouth. This is the official application submission for Team 2C 28/04/2017. A vast majority of this work was carried out by UP773455.

All files can be found under the HTML branch and in the HTML folder. Please ignore/ discard any mention of Java as the project has since changed to HTML/ PHP.

In order to run this application, a remote SQL host is needed and a PHP supporting webserver software is also necessary. I have chosen to use WAMP in this instance.

Functionality:
- Remote connection to SQL server
- Ability to register an account via the remote SQL connection
- Ability to login to the application using correct details that exist on the SQL server
- Ability to topup the user account by entering payment information and the desired amount to topup (SQL connection)
- Ability to purchase products from the website with existing account credit (SQL connection)

# Update Logs
Update logs can be viewed by checking the HTML branch repository history.

# TODO:
- ~~Make ATLEAST the first 4 homepage products work~~
- ~~If not enough credit, don't sell~~
- ~~If topup amount is greater than £1000, don't allow (don't allow negatives)~~
- ~~Top-up validation (16 digit card, password, 3 digit SC, checkbox)~~

# LOOK INTO:
- Add a cart page with current user session products (eh?) (ability to multiple order)
- Order tracking
- Admin panel - Access to all users information because yay security.
- Look into changing all directory listings to absolutes from root (maybe) - Fix file structures
- Improve overall design (where possible)

Please contact up773455@myport.ac.uk with any questions.
