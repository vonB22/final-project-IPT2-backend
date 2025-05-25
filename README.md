<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Contributors

### Backend (Laravel REST API)

- **Balana, Von Lloyd J.** - Setup Laravel project
- **Guran, John Reyvel G.** - Create database models and migrations
- **Gaton, Rochelle G.** - Wrote API documentation
- **Carungcong, Agatha Nicole V.** - Defined API routes
- **Estayan, Janna G.** - Tested API

## API Documentation

# Books
POST `http://127.0.0.1:8000/api/books`

```
{
    "message": "Book Created Successfully",
    "data": {
        "id": 1,
        "title": "The Pain of Onkai",
        "author": "N.K Edo",
        "category": "Fiction",
        "published": "2022",
        "status": "Available",
        "created_at": "2025-05-18T23:56:54:000000Z"
    }
}
```
## This section of the API documentation outlines how to use the POST method at the endpoint http://127.0.0.1:8000/api/books to add a new book record. When a request is successfully processed, the server responds with a confirmation message and details about the newly created book. These details include the book's ID, title, author, genre, publication year, availability status, and the date and time it was added to the system.

GET `http://127.0.0.1:8000/api/books/1`

```
{
    "data": {
        "id": 1,
        "title": "The Pain of Onkai",
        "author": "N.K Edo",
        "category": "Fcition",
        "published": "2022",
        "status": "Available",
        "created_at": "2025-05-18T23:56:54:000000Z"
    }
}
```
## This endpoint retrieves the details of a specific book using its unique ID. By sending a GET request to http://127.0.0.1:8000/api/books/1, the API responds with a JSON object containing the book's information, including its ID, title, author, category, publication year, status, and the date it was created in the system.

PUT `http://127.0.0.1:8000/api/books/1`

```
{
    "message": "Book Updated Successfully",
    "data": {
        "id": 1,
        "title": "Eloquent JavaScript",
        "author": "Marijn Haverbeke",
        "category": "Programming",
        "published": "2024",
        "status": "Available",
        "created_at": "2025-05-18T23:56:54:000000Z"
    }
}
```
## This endpoint updates the information of an existing book identified by its ID. It requires a JSON body with the new book details.

DELETE `http://127.0.0.1:8000/api/books/1`

```
{
    "message": "Book Deleted Successfully"
}
```
## This API call sends a DELETE request to the server at http://127.0.0.1:8000, specifically targeting the resource with the ID 1 in the books collection. The purpose of this request is to delete the book with ID 1 from the system.

# Register
POST `http://127.0.0.1:8000/api/register`

```
{
    "message": "User registered successfully",
    "token": "1|RUW0cNeEVKvCONB7qIwOn475uQCqIRzCEAaPUy3I60f50012",
    "user": {
        "name": "Car Doe",
        "email": "cardo@gmail.com",
        "updated_at": "2025-05-21T00:39:27:000000Z",
        "created_at": "2025-05-21T00:39:27:000000Z",
        "id": 1
    }
}
```
## This endpoint is used to register a new user. Upon successful registration, it returns a success message, a personal access token, and the user's information.

# Login
POST `http://127.0.0.1:8000/api/login`

```
{
    "message": "Login successfully",
    "token": "2|M1phIAl38ypGtibE3YNzxEA70jA0h4TMN0kvxJVQ9ebae8c4",
    "user": {
        "id": 1,
        "name": "Car Doe",
        "email": "cardo@gmail.com",
        "email_verified_at": null,
        "updated_at": "2025-05-21T00:39:27:000000Z",
        "created_at": "2025-05-21T00:39:27:000000Z",
    }
}
```
## This endpoint allows existing users to log into the system. On successful login, it returns a confirmation message, an access token for authenticated requests, and user details.

# Log out
POST `http://127.0.0.1:8000/api/logout

```
{
    "message": "Logged out"
}
```
## This endpoint logs out the currently authenticated user by invalidating their session or token. It is typically used to terminate the user's access and ensure security after their session ends.
