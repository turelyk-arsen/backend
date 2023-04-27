<?php
/*
Exercise 2: Create a simple user-friendly Laravel App : Lists of team members

Create a Laravel application that lists team members and 
allows users to access their individual pages with information about them, 
using only Models, Views, and Routes. The application should include a main 
team members list page and separate pages for each team member's information.


1 Create a model (TeamMember.php) that stores an array of team members 
with their information (e.g., name and role).

2 Create two views: one for displaying the list of team members 
(team.blade.php) and another for displaying the individual team member's 
information (team_member.blade.php).

3 In the team.blade.php view, create an unordered list of team members. 
For each team member, add a link to their individual page using their ID 
as a URL parameter (e.g., /about/1).

4 In the team_member.blade.php view, display the team member's name and role.
 Also, add a "Back to team members list" link that redirects to the main team
  members list page.

5 In the web.php routes file, create a route for the main team members 
list page (e.g., /about). This route should return the team.blade.php view.

6 In the same web.php file, create a route for the individual team member's
 page (e.g., /about/{id}). This route should use the ID parameter to fetch 
 the team member's information from the TeamMember model and pass it to the
  team_member.blade.php view.
*/