<img src="https://media.giphy.com/media/1426nO2tbkJdBu/giphy.gif" width=100%>

# Project Title

Christmas assignment to build a task management application built with mainly PHP. As a user you can save lists and tasks and get more organized. The assignment both uses PHP front-and backend coding since the application is build with a database to store the user's tasks and lists. Therefore PDO is used to access the database and present the results on each users personal page. You can visit the site [here.](-add link)

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

-   <b> Update `navigation.php:8` has been changed into `<a class="navbar-brand" href="#">` . <br>

# Testers

Tested by the following people:

1. Jane Doe
2. John Doe
