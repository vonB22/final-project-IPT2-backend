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

### Books
POST http://127.0.0.1:8000/api/books

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
-- **This section of the API documentation outlines how to use the POST method at the endpoint http://127.0.0.1:8000/api/books to add a new book record. When a request is successfully processed, the server responds with a confirmation message and details about the newly created book. These details include the book's ID, title, author, genre, publication year, availability status, and the date and time it was added to the system.** - 
