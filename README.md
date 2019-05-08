# BookAPI
1. http://localhost/book-api/public/api/books (GET) returns  a list of all books.
2. http://localhost/book-api/public/api/books/{book} (GET) returns a specified book.
3. http://localhost/book-api/public/api/books (POST)  creates a new book.
    - application/json
    - body: {
        "title" : "New Title",
        "author" : "New Author",
        "summary" : "New Summary"
      }
      
4. http://localhost/book-api/public/api/books/{book} (PUT) updates an existing book.
    - application/json
    - body: {
        "title" : "Updated Title",
        "author" : "Updated Author",
        "summary" : "Updated Summary"
      }
      
5. http://localhost/book-api/public/api/books/{book} (DELETE) deletes an existing book.
