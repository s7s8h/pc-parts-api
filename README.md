# PC Parts Hub – REST API

PC Parts Hub is a RESTful backend API developed as part of the Web-Based Systems course at King Faisal University.

The API was built using Laravel and MySQL to manage PC component data and provide authentication and CRUD functionality for a separate front-end client.

## Features

- User registration and login
- Token-based authentication using Laravel Sanctum
- Retrieve all PC parts
- Retrieve PC parts by category
- Retrieve individual PC parts by ID
- Add new PC parts
- Update existing PC parts
- Delete PC parts
- Protected routes for create, update, and delete operations
- Request validation
- JSON API responses

## Technologies

- Laravel
- PHP
- MySQL
- Laravel Sanctum
- REST API

## API Endpoints

### Authentication

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/api/register` | Register a new user |
| POST | `/api/login` | Log in and generate an authentication token |
| GET | `/api/user` | Retrieve the authenticated user |

### PC Parts

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/parts` | Retrieve all PC parts |
| GET | `/api/parts/category/{category}` | Retrieve parts by category |
| GET | `/api/parts/{id}` | Retrieve a specific part |
| POST | `/api/parts/add` | Add a new part (authentication required) |
| PUT | `/api/parts/{id}` | Update a part (authentication required) |
| DELETE | `/api/parts/{id}` | Delete a part (authentication required) |

## PC Part Data

The API manages information such as:

- Name
- Category
- Brand
- Price
- Specifications
- Stock
- Image URL

## Front-End

A separate front-end client communicates with this API to display and manage PC parts.

The interface includes product categories, search and sorting functionality, and authenticated management features.

## Deployment

The backend API and MySQL database were deployed and tested using Railway during development.

The hosted Railway service is currently inactive.

## Academic Project

Developed as part of the **Web-Based Systems** course at **King Faisal University**.
