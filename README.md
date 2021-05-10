// COSW30Project //


// Summary //

The purpose of this project is to create a minimalistic dating website. Users will be able to register to the website, login and (ideally) browse other users's profiles. In order to accomplish this, I will use HTML and PHP through the use of forms, a database and SQL. I'd really like to include a directory of user's profiles and the ability to see and edit your own profile which would include the ability to upload profile pictures but we'll see how that pans out.

//Database Planning //

USERS - Table Name

user_id, INT 11, Primary Key, Auto Increment, NOT NULL

email_address, VARCHAR 50, Attributes

password, VARCHAR 100, Attributes
  
first_name, VARCHAR 50, Attributes
  
last_name, VARCHAR 50, Attributes
  
create_date, TIMESTAMP, Attributes
  
last_login, DATETIME, Attributes

// Functionality Outline //

Files marked with a * might be deleted or repurposed. Files marked with a + are possible additions.

As of now, there will be 16-18 required files, possibly a few more if I can get the user profiles and ability to edit profiles up and running.

1. Title: Add User page

Filename: add_user.php

Users: Members

Description: This page would allow people to register for the website and immediately point users toward the directory. 

2. Title: Couple Graphic

Filename: couple.mp4

Users: Members

Description: This primarily serves as the image users will see on the index page.

3. Title: Edit User Page (*)

Filename: edit_user.php

Users: Users, Admin

Description: Allows the user to edit their information. Will also allow an Admin to do the same if a user cannot access their information for whatever reason. 

4. Title: Footer

Filename: footer.php

Users: Admin

Description: The footer used throughout the website. Will likely add redirections to 'Keen's' other social media profiles.

5. Title: Form (*)

Filename: form.css

Users: Members

Description: Didn't have code on it, will probably delete once I ensure it wasn't important.

6. Title: Header

Filename: header.php

Users: Admin

Description: The header used throughout the website. (Need to edit to better reflect the website.)

7. Title: Login Page

Filename: inc_login.php

Users: Users

Description: Allows the user to login to their account.

8. Title:  Registration page

Filename: inc_registration.php

Users: Members

Description: Allows the user to register for an account.

9. Title: Keen Index Page

Filename: index.php

Users: Members, Admin

Description: A minimalistic landing page for the entire website.

10. Title: Insert

Filename: insert.php

Users: Admin

Description: Attempts MySQL server connection.

11. Title: List of Website Users (Directory)

Filename: list_users.php

Users: Members, Admin

Description: Displays a list of users.

12. Title: User Login Form

Filename: login.php

Users: Members, Admin

Description: Allows users to login to their account through a form.

13. Title: Connect to MYSQL

Filename: mysqli_connect.php

Users: Admin

Description: Connects to the database.

14. Title: Other CSS

Filename: othercss.css

Users: Admin

Description: CSS used for everything other than the landing page.

15. Title: User Registration Form

Filename: register.php

Users: Members

Description: Form used to allow individuals to register for the website. 

16. Title: Style

Filename: style.css

Users: Admin

Description: CSS used specifically for the index page.

17. Title: List of Users (*)

Filename: userlist.php

Users: Members, Admin

Description: Displays list of users and allows a member to add a user.

18. Title: Profile (+)

Filename: 

Users: Member, Admin

Description: Displays the user's profile.

19. Title: Edit Profile (+)

Filename: 

Users: Member, Admin

Description: Allows the user to edit their profile.

// Wireframe //

Will be included in files.

// Team Meeting Schedule //

I am working alone and will work on this as often and frequently as I can.
