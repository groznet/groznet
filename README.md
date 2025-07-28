# Project Title: GrozNet
GrozNet is a professional website focused on the design and development of websites and applications for clients across various industries.
This platform serves as a portfolio to showcase a range of skills and completed projects, aimed at attracting prospective clients.
In addition to web development services, GrozNet offers support in managing websites and online presence by creating and overseeing social media accounts, ensuring that clients effectively engage with their audience and enhance their brand visibility in the digital space.

## Table of Contents
- [Style and Preferences](#style-and-preferences)
- [Services](#services)
- [Features](#features)
- [Menu](#menu)
- [Technologies Used](#technologies-used)
- [API Documentation](#api-documentation)
- [Contact](#contact)
- [Models](#models)
- [Controllers](#controllers)
- [Database Schema](#database-schema)

## Style and Preferences
### Styling Approach
In this project, I utilize a combination of default browser styles and customizations to achieve a clean, efficient design:
- **Typography**: I generally retain the browser's default sizing and spacing for elements like headings and paragraphs. 
- **Custom styles**: are applied as needed to meet specific project requirements, ensuring a balance between simplicity and functionality.
- **Layouts**: For layout and spacing, I prefer to use naming conventions similar to TailwindCSS utility classes.

By blending browser defaults with targeted custom styles and the utility-first approach of TailwindCSS, I ensure the design remains clean, consistent, and easily adjustable.

## Services
- Разработка Веб-Сайта
- Создание Веб-Дизайна
- SEO продвижение сайта
- Введение и поддержка сайта
- Создание сайта на CMS
- Разработка приложения
- Управление Социальными Сетями
- Брендирование и Дизайн

## Features
- User Authentication
- User Management
- Post Management
- Review Management
- Search and Filter

## Menu
- Главная
- Услуги
- Портфолио
- Отзывы
- Контакты
- По сотрудничеству
- Политика конфиденциальности


## Technologies Used
- **Front-End**: HTML, CSS, JavaScript. 
- **Back-End**: PHP.
- **Database**: MySQL.
- **Tools**: VSCode with AI Tools, Git


## Contact
- **Email**: info@groznet.com
- **Phone**: +7 (929) 888-33-27
- **Telegram**: @groznet
- **Instagram**: @groznet
- **Facebook**: @groznet
- **WhatsApp**: wa.me/+79298883327
- **Address**: Чеченская Республика, г. Грозный, ул. Шейха Али Митаева, 3

## Models
### User
- **Attributes:**
  - `id`: Unique identifier for each user.
  - `username`: Username of the user.
  - `email`: User's email address.
  - `password`: Hashed password for authentication.
  - `date_created`: Date and time when the user was created.
  - `date_updated`: Date and time when the user was last updated.
  - `last_login`: Date and time when the user was last logged in.
  - `role`: Role of the user (admin, user).
  - `status`: Status of the user (active, inactive).

- **Relationships:**
  - One-to-many relationship with `Post` (a user can post multiple posts).
  - One-to-many relationship with `Review` (a user can post multiple reviews).

### Post
- **Attributes:**
  - `id`: Unique identifier for each post.
  - `title`: Title of the post.
  - `description`: Detailed description of the post.
  - `user_id`: Identifier for the user posting the post.
  - `date_created`: Date and time when the post was created.
  - `date_updated`: Date and time when the post was last updated.
  - `status`: Status of the post (active, inactive).
- **Relationships:**
  - Belongs to `User` (each post is posted by a user).

- **Relationships:**
  - Post has many `Review` (a post can have multiple reviews).
  - Post has many `Comment` (a post can have multiple comments).
  - Post has many `Like` (a post can have multiple likes).
  - Post has many `Tag` (a post can have multiple tags).
  - Post has many `Category` (a post can have multiple categories).

### Review
- **Attributes:**
  - `id`: Unique identifier for each review.
  - `user_id`: Identifier for the user who posted the review.
  - `company_id`: Identifier for the company being reviewed.
  - `rating`: Rating given by the user.
  - `review`: Review text.
  - `date_created`: Date and time when the review was created.
  - `status`: Status of the review (active, inactive).

- **Relationships:**
  - Belongs to `User` (each review is posted by a user).
  - Belongs to `Company` (each review is for a company).

## Controllers
### UserController
- **Responsibilities:**
  - Handle user registration and authentication.
  - Manage user profiles and settings.

### PostController
- **Responsibilities:**
  - Manage post listings (create, read, update, delete).
  - Handle post search and filtering functionalities.

### ReviewController
- **Responsibilities:**
  - Manage reviews (create, read, update, delete).
  - Handle review search and filtering functionalities.

## Database Schema
### Tables <!-- id, created_at, updated_at already included -->
- **users**
  - `username`: String, user’s name.
  - `email`: String, unique email address.
  - `password`: String, hashed password.
  - `role`: String, role of the user (admin, user).
  - `status`: String, status of the user (active, inactive).
  - `last_login`: DateTime, timestamp of last login.

- **posts**
  - `title`: String, post title.
  - `description`: Text, post details.
  - `user_id`: Integer, foreign key linking to the `users` table.
  - `status`: String, status of the post (active, inactive).

- **reviews**
  - `user_id`: Integer, foreign key linking to the `users` table.
  - `company_id`: Integer, foreign key linking to the `companies` table.
  - `rating`: Integer, rating given by the user.
  - `review`: Text, review text.
  - `status`: String, status of the review (active, inactive).

## Currently working on
Adopting a naming convention like in TailwindCSS to make my CSS more readable, maintainable, and scalable. Offer me best practices and tips to follow when renaming my CSS classes to match this approach:
Since TailwindCSS classes use / to separate the utility and the variant, I will use - instead of / to separate the utility and the variant.