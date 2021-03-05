# PHP EMPLOYEE MANAGEMENT V2

### Project overview 📋

This project is an approach to an employees management application that could be used in a comany to keep records of their employees. It is developed using an MVC architecture and object-oriented programming, and is a refractor of a previous project developed with procedural programming, where we updted the whole structure and added some new functionalities.

### Application functionalities

1. Session login and logout
2. Login as user or admin
3. Admin has rights to create new users
4. Controlled user session set to 10 minutes
5. Show data from database in JSGrid (both for employee records on "dashboard" page, and user records on "users" page)
6. Pagination of the data configured by the grid
7. Employees and Users CRUD (Create Read Delete and Update) synchronized with database
8. Employees and Users CRUD managed with both PHP and JS ajax
9. Employee page with employee detail and the ability to update its data
10. User page with user detail and the ability to update its data
11. Connection with external api to get avatars and set them as employees profile image on the "employee" page

### File structure

The project's file structure is the following:

- **Assets**: contains css, js & images
- **Assets/js:** contains ajax crud methods and JSGrid configuration
- **Config:** contains a config.php file with the definition of the URL path and DB constants ( ignored by .gitignore, needs to be configured locally)
- **Controllers:** contains controllers for dashboard, errors, login and users
- **Libs:** contains controller, database, model and view base classes, as well as the app class (this is the entr point of the application) and the connection to the avatars API
- **Models:** contains models for login, dashboard and users
- **Resources:** contains a sql file with the DB configuration
- **Views:** contains all application views

### Built with 🛠️
You will need to npm install the following dependencies in order the project to work properly:

- [Bootstrap](https://getbootstrap.com/)
- [Bootstrap icons](https://icons.getbootstrap.com/)
- [JSGrid](http://js-grid.com/)
- [JQuery](http://jquery.com/)

### Images Web Service for the extra feature

As we explained in the pdf document of this project we will use [this images api](https://uifaces.co/)

This web service in the version free that is which we are going to use has limitations. Five request per minute or thirty in an hour.  
So if you want to develop this extra feature it would be cool to have a mocked response to develop at ease. So for this purpose we left in `resources/` folder a file called images_mock which can be used to the implementation of the extra feature once you have your code running well you need to remove this mock and to connect directly with the web service.

[Read the doc!](https://uifaces.co/api-docs)

### Contributing 🖇️
For contributions, please fork the project, change whatever you want and create a pull request with the new content.

### Authors ✒️
- **Verónica Velázquez** - [vvelazquezc](https://github.com/vvelazquezc)
- **Irati Arrieta** - [iarrieta90](https://github.com/iarrieta90)

### License 📄
This project is under GNU license

---

⌨️ with ❤️ Verónica Velázquez and Irati Arrieta, based on the employee Management v1 project by Anna Troyan and Froilán Olesti
