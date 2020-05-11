# Error404
For our software engineering project we are creating an event and conference management system for mpontu technologies.  

## Software Function
This project is aimed at making the process of event planning and organization easier by creating a web application (an Event Management System) which allows users to create events and conferences, and have others register for those conferences or buy tickets. The high-level functionalities focused on during the implementation phase were:
•	Creating a platform where people interested in attending an event can book an event or purchase tickets for the event. 
•	Creating an admin portal which allows event planners and organizers to create and manage events: This portal should allow users to specify the event details such as the number of tickets or seats available , price of the tickets , an image or flyer for the event , a description of the event and the event’s name. Upon adding an event to the system, the event should be shown on the purchasing and booking platform described in the point above.


## Technology & Justification
	
In order to create and implement the software functions mentioned above, certain technologies were used.
In this section of the report, a description of the various technologies and how they were implemented to perform the software
functions above will be given. The reasons for selecting these technologies will also be given.

•	HyperText Markup Language (HTML): HTML is a markup language used to create the content of web pages.
All texts and images are seen as a result of the HTML technology.
A markup language is  a computer language that  uses tags to create elements in a document. 
HTML was used in creating the different pages in this web application. It was since it is the standard markup language for creating web pages. 

•	Cascading Style Sheet (CSS): CSS is a web language used to style ,design and organize the HTML content of a web page. Colours, 
sizes of HTML elements and page layouts are manipulated by CSS.
In this project CSS was used to improve the look of the web application.

•	PHP HyperText Processor (PHP): PHP is a server-side scripting language. 
It can be used to dictate and manipulate how data from a web application is processed and used. 
In this application we used PHP to store and retrieve data, into and from the database . 
PHP was also used to display data from the database, on the web pages. We used PHP because of its widespread use its popularity. 
In addition to that, the widespread use of Apache by most companies 
which provide web hosting service makes it easier for one to host a PHP web application online ,when compared to other server side scripting languages like Node.js [3]. 

•	Structured Query Language (SQL): SQL is a programming language which allows the manipulation of relational databases (SQL databases) using queries. In this project SQL was used to create, manipulate and store data being used by the web application. 

•	JavaScript: JavaScript is a scripting language which can be used to manipulate HTML elements to make web pages dynamic and interactive. In this project, raw JavaScript code was used together with a JavaScript library, jQuery to manipulate form data before this data reaches the server side of the application.

•	jQuery: jQuery is a JavaScript library which simplifies JavaScript programming. jQuery was used in this project to reduce the amount of JavaScript code that developers had to type.

•	Flutterwave: Flutterwave is an application programming interface (API) which makes it easy to create and integrate a payment system into a web application. In this project it was used to create the payment system with which users can buy their tickets for an event

## Data structures used
In this project, data retrieved from the database was stored in arrays before it was displayed in the HTML document. This is because the runtime of retrieving data from an array is linear. Hence it will quicken up the speed with which data is retrieved and displayed on the web pages.
Arrays were used in the the displayProducts function in the function.php file , in the functions folder
