<img src="https://media.giphy.com/media/1426nO2tbkJdBu/giphy.gif" width=100%>

# 2do

Christmas assignment to build a task management application built with mainly PHP. As a user you can save lists and tasks and get more organized. The assignment both uses PHP front-and backend coding since the application is build with a database to store the user's tasks and lists. Therefore PDO is used to access the database and present the results on each users personal page. You can visit the site [here.](-add link)
<br>
<details>
  <summary>Requirements</summary>
  Below is the list of requirements for this assignment.

 - The application should be written in HTML, CSS, JavaScript, SQL and PHP.

- The application should be built using a SQLite database with at least three different tables.

- The application should be pushed to a public repository on [GitHub](https://github.com/).

- The application should be responsive and be built using the method mobile-first.

- The application should be implement secure hashed passwords when signing up.

- The project should implement an accessible graphical user interface.

- The project should [declare strict types](https://www.php.net/manual/en/language.types.declarations.php.strict) in files containing only PHP code.

- The project should not include any coding errors, warning or notices.
</details>

<details>
 <summary>Features</summary>
Below is the list of user stories. This is the behavior on how the user interact with the application.
    
- As a user I should be able to create an account.

- As a user I should be able to login.

- As a user I should be able to logout.

- As a user I should be able to edit my account email and password.

- As a user I should be able to upload a profile avatar image.

- As a user I should be able to create new tasks with title, description and deadline date.

- As a user I should be able to edit my tasks.

- As a user I should be able to delete my tasks.

- As a user I should be able to mark tasks as completed.

- As a user I should be able to mark tasks as uncompleted.

- As a user I'm able to create new task lists with title.

- As a user I'm able to edit my task lists.

- As a user I'm able to delete my task lists along with all tasks.

- As a user I'm able to add a task to a list.

- As a user I'm able to view all tasks.

- As a user I'm able to view all tasks within a list.

- As a user I'm able to view all tasks which should be completed today.
</details>

# Installation

In order to do this you will need to have PHP installed on your computer.

Install this project by following these steps:

<b> Clone the repository from this address: </b>

```
https://github.com/amandaprintz/2do.git
```

<br>
<b> In the project's root folder, start a php server by typing this in your terminal: </b>

```
php -S localhost:8000
```

<br>
<b> Open up your browser and paste this URL in the address bar: </b>

```
https://localhost:8000
```
# Wonderlist +

- Delete account along with all its lists and tasks.
- Move task from one list to another.

# Code Review

Code review written by [Agnes Skönvall](https://github.com/agnesskonvall).

1. `mylists.php:41-42` - Very readable code with comments, it’s easy to understand even at first glance. Although I’m not completely sure what the arrows on row 100 are for, perhaps a left over note for yourself?
2. `index.php:8` - As I download the repo and open it on localhost, I’m seeing error messages. For example “Welcome, Warning: Undefined array key "username””. I really think you should have an else that shows something else when the user is not logged in. Perhaps an introduction to what the website does?
3. `register.php:23-27` - Perhaps making the user repeat their password would be beneficial. For in cases like when the user misspells it when registering.
4. `updatelist.php:22-25` - Deleting lists and tasks is permanent, how about adding a window alert to your delete-button? It’s now a very simple misclick and everything is gone! You can use the “onclick”-property for the button, no need for javascript! Keep it simple!
5. `login.php:27-30` - You can save more variables for the user-session here, perhaps an image-url and and id? They might come in handy later!
6. `navigation.php:8` - Don’t use links to localhost:8000. Not everyone uses 8000 for their localhost. You might also want to make your website live, this will be a problem!
7. `navigation.php:15` - Save $\_SERVER['SCRIPT_NAME'] as a variable instead, it will make your code more readable!
8. `mylists.php:52-73` - You’re using an ul-tag as if you’re making a list, but there are no list items - li-tags within it. It’s not very accessible. Perhaps use separate tags for the things you wish to display and get rid of the ul?
9. `index.php:19` - The ● kind of looks like a checkbox. Perhaps a blacked out one or a dash would suffice as you’re using checkboxes in other places.
10. `functions.php:72-85` - You’re using this function to display the tasks that are to be completed today, but it also shows the tasks that are completed. Consider adding to your query something to leave out the completed tasks!

#
<b> Updates post code review </b>  
-  `navigation.php:8` has been changed into `<a class="navbar-brand" href="index.php">` . <br>
-  `index.php:19`has been changed to a `-`. 
-  `mylists.php:41-42` this line has been removed.
-  `index.php:8` fixed. 


# Testers

Tested by the following people:

1. Sophie Wulff
2. Hanna Rosenberg
