Q1: How long did you spend on the coding test?
Answer: 3hrs

Q2: Which parts were the most challenging?
Answer:
 - Planing /designing as there were quite few things to take into consideration all while sticking to the requirements. Refering to the requirement made this easier.
 - The inital setup when adding the feature to create a todo list. 

Q3: What would you add to your solution if you had time? What further improvements or features would you add?
Answer:
 - Add loads of test. Ideally we want to test each API endpoint we're hitting as there is quite a few in web.php. we will want to test for redirects, data assertions, and more.

 - A better use of validation.
 - Use swal alert to display error and success messages. Better UIX with this. 
 - Allow users have an account and have todo lists attached to users accounts.
 - Add a log when users create a todo list

Q4: How would you track down a performance issue in production? Have you ever had to do this?
Answer:
- For slow queries - in AppServiceProvider, log queries that takes unreasonable amount of time to complete. - No, i haven't needed to do this
