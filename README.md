# Mini Project 02: Company Profile Website using Laravel MVC 

## 1. Introduction

### What is a Company Profile Website?

A company profile website is an overview of the business. It is used to introduce the business to potential clients  

### Why businesses need one?

Bussinesses need a company website profile as it serves as curated introduction of the business. It establishes brand awareness by communicating a company's name, mission, and offerings to a wider audience, which strengthens the recognition within the industry. It also builds credibility and trust, positioning the business as legitimate and professionally established rather than informal or unproven. It also works as a marketing tool to attract potential clients, partners, and investors. It is an important business asset that support brand recognition, credibility, and partnership. 

### Purpose of the Project

The purpose of this project is to build a multi-page company profile website Laravel framework, with separate routes, controllers, and Blade templates structured for project organization and reusable design practices. It also aims to showcase the understanding of the key Laravel concepts, including the Model-View-Controller (MVC) architecture, URL routing, controllers, reusable layouts, and template rendering.

---

## 2. Objectives

- Create multiple application routes 
- Build reusable Blade layouts
- Connect routes to controllers
- Understand separation of concerns using MVC
- Publish a professional GitHub repository
- Understand Laravel's Request Lifecycle

---

## 3. MVC Architecture

### What is MVC? 

MVC or Model-View-Controller is an architectural pattern that separates 3 core components of the system, the Model, View, and Controller. Each component is design to handle specific development of the system.  The **Controller** acts as the intermediary between the View and the Model, it receives user input and coordinate responses. On the other hand, **View** handles the UI and displays the information of users. While the **Model** manages the application's data and business logic, performing CRUD operations and enforcing rules, then supplying the requested data back to the Controller.

### Why Laravel uses MVC? 

Laravel uses MVC architecture because it makes apps easier to build and maintain by separating the model, view, and controller. It also saves time as developers can reuse models and controller in various parts of the system. This separation makes the code more organized and easier to understand. It also allows developers to update one part of the application without greatly affecting the other parts.

### Advantages of MVC in Software Development

MVC offers several benefits for web development. It makes applications more organized because the code is divided into three parts: Model, View, and Controller. This makes it easier for developers to find, modify, and maintain the code. It also allows different developers to work on different parts of the application at the same time, which can make development faster. Since the parts are separated, changes in one part are less likely to affect the others. MVC also supports reusable views and components, which reduces duplicate code and helps keep the user interface consistent. It is especially useful for larger applications because it provides a clear structure that makes the system easier to maintain, test, and expand.

## MVC Flow

The following diagram shows how a user's request is processed in this Laravel application:

![Architecture Diagram](documentation/architecture-diagram.png)

---

## 4. Laravel Routing

### What is Routing?

Routing is the process of connecting a URL to a specific page or action in a Laravel application. It tells Laravel what to do when a user visits a particular URL.

### Named Routes 

Named Routes give a specific name to a route so it can be easily referenced throughout the application. This makes it easier to create links and redirects without repeatedly writing the actual URL.

### GET Requests 

GET requests are used to request or display information from the application. In Laravel, they are commonly used for pages such as Home, About, Services, and Contact.

### Route Definitions 

Route definitions specify the URL, request method, and action that Laravel should handle. They allow the application to determine which page or function should be executed when a user accesses a specific URL.

## 6. Controllers 

### Purpose of Controllers 

Controllers are used to organize and handle the logic of an application by grouping related request-handling logic into a single class. They receive requests from routes and determine what should happen, such as retrieving data or returning a view.

### Benefits of Controllers 

Controllers help keep the application organized and easier to maintain by separating the application logic from the routes and views. They also allow related functions to be grouped together, making the code easier to understand and reuse.

### Controller Methods 

Controller methods are functions inside a controller that perform specific tasks. A method can return a view, process user input, retrieve data, or handle other actions required by the application. For example, an index() method is commonly used to display a page, while a store() method may be used to save submitted data.

## 7. Blade Templating Engine 

### Blade Layouts 

A Blade layout is a reusable template that defines the common structure of multiple pages. It can contain elements such as the navigation bar, footer, CSS, JavaScript, and the main page structure.

Instead of creating the same HTML structure for every page, individual pages can reuse the same layout.

resources/views/layouts/app.blade.php

<html>
<head>
    <title>Heurisk Solutions</title>
</head>
<body>

    <nav>
        Navigation Bar
    </nav>

    @yield('content')

    <footer>
        Footer
    </footer>

</body>
</html>

### Blade Components 

Blade components are reusable interface elements that can be used throughout an application. Common examples include buttons, alerts, cards, form inputs, and other UI elements.

Components can be created as class-based components or anonymous components. Anonymous components are stored in the resources/views/components directory.

Example:

resources/views/components/button.blade.php

The component can then be used with:

<x-button>
    Submit
</x-button>

Blade component tags use the x- prefix followed by the component name.

### @extends

The @extends directive allows a Blade view to inherit the structure of another Blade layout. It is commonly used when multiple pages share the same overall design.

@extends('layouts.app')

This tells Laravel that the current page should use layouts/app.blade.php as its main layout.

### @section 

The @section directive defines the content that will be placed into a specific area of the layout.

@section('content')

    <h1>Welcome to Our IT Company</h1>
    <p>We provide software and IT solutions.</p>

### @yield 

The @yield directive creates a placeholder in a Blade layout where content from a child view will be displayed.

@yield('content')

For example, if the layout contains @yield('content') and the child page defines @section('content'), Laravel places the section's content at that location.

### @include 
The @include directive allows one Blade view to insert another Blade view. It is useful for reusable sections such as navigation bars, footers, or other partial views.

@include('partials.navbar')

## 8. Laravel Folder Structure 

### app/ 

Contains the main code of the application, such as controllers, models, and other important classes.

### routes/ 

Contains the routes that tell Laravel which page or function to open when a user visits a URL.

### resources/ 
Contains the pages users see, such as Blade views, along with CSS and JavaScript files before they are compiled.

### public/ 

Contains the main entry point of the website (index.php) and files that can be accessed publicly, such as images, CSS, and JavaScript.

### bootstrap/ 

Contains files that help start and initialize the Laravel application, as well as cached framework files.

### config/  

Contains the application's settings and configuration files.

## 9. Screenshots

### Home Page

![Homepage](screenshots/home-page.png)

![Homepage](screenshots/home-page2.png)

![Homepage](screenshots/home-page3.png)

### About Page

![About Page](screenshots/about-page.png)

![About Page](screenshots/about-page1.png)

![About Page](screenshots/about-page2.png)

![About Page](screenshots/about-page3.png)

![About Page](screenshots/about-page4.png)

![About Page](screenshots/about-page5.png)

![About Page](screenshots/about-page6.png)

![About Page](screenshots/about-page7.png)

### Services Page

![Services Page](screenshots/services-page.png)

![Services Page](screenshots/services-page1.png)

![Services Page](screenshots/services-page2.png)

![Services Page](screenshots/services-page3.png)

### Contact Page

![Contact Page](screenshots/contact-page.png)

### Navigation Bar

![Navigation Bar](screenshots/navigation-bar.png)

### Footer

![Footer](screenshots/footer.png)

### Route Definitions

![Route Definitions](screenshots/route-definitions.png)

### Controller

![Controller](screenshots/controller.png)

![Controller](screenshots/controller1.png)

![Controller](screenshots/controller2.png)

![Controller](screenshots/controller3.png)

![Controller](screenshots/controller4.png)

![Controller](screenshots/controller5.png)

### Blade Layout

![Blade Layout](screenshots/blade-layout.png)

## 10. Problems Encountered 

*The base controller is missing, the CompanyController cannot inherit from it.

*The route is not found due to missing letters.

*Some Blade views were not displaying correctly because of incorrect view file references.

## 11. Solutions 

*Restored the standard base and cleared the stale Laravel cache/view files.

*Fixed the route name.

*Corrected the Blade view references to match the actual file names and locations.

## 12. Reflection 

Through this project, I learned that the MVC (Model-View-Controller) architecture is an important feature of the Laravel framework. MVC helps organize the code into different parts, making the application cleaner, more organized, and easier to maintain. Instead of putting all the code in one place, each part of the application has a specific responsibility. This helped me understand why Laravel uses MVC and how it can make the development process more manageable.

I also learned that separation of concerns is important because it keeps different parts of the project organized. Each component focuses on a specific task instead of handling everything at once. This makes the project easier to understand, update, and maintain. If changes are needed in one part of the application, developers can work on that part without unnecessarily affecting the other components. It also makes it easier for developers to work together on a project.

The relationship between routes, controllers, and views is another important thing I learned. Routes determine what should happen when a user visits a specific URL. The route can connect the user's request to a controller method. The controller then handles the request and determines which view should be displayed. The view is responsible for presenting the information to the user through the web page. In this project, I used routes to connect pages such as Home, About, Services, and Contact to the appropriate controller methods and Blade views. This showed me how Laravel processes a request and returns a response to the browser.

I also learned that the MVC architecture can be useful for larger enterprise systems. As an application becomes bigger, having an organized code structure becomes more important because there may be many developers, features, and files involved. MVC makes it easier to manage and maintain these applications by keeping responsibilities separated. Reusable views and Blade components can also save development time and help maintain a consistent user interface.

Overall, this project helped me understand the importance of MVC, separation of concerns, and the relationship between routes, controllers, and views. I learned that a well-organized architecture not only makes code easier to understand but also makes applications easier to maintain, expand, and improve as they become larger.

## 13. References

1. Laravel. (2026). *Laravel Installation Documentation*. https://laravel.com/docs/13.x/installation

2. PHP Documentation. (2026). *PHP Manual*. https://www.php.net/docs.php

3. GeeksforGeeks. (2025, July 23). MVC Framework Introduction. GeeksforGeeks. https://www.geeksforgeeks.org/software-engineering/mvc-framework-introduction/
