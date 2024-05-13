
# Netflix Clone

Netflix Clone is a web application developed using the Laravel framework, following the Model View Controller (MVC) design pattern. It replicates the functionality of the popular streaming service Netflix, allowing users to browse movies, watch movies, and manage their watch history.



## **Features**

-   **User Authentication:** Three levels of secure user authentication are implemented:
    -   Guest: Can view movies but cannot watch them. No login required.
    -   Registered User: Can register/login and perform CRUD operations on their profile.
    -   Admin User: Can perform extra operations such as creating, editing, and deleting movies. Has access to a dashboard to manage users.
-   **CRUD Operations:** Admins can perform full CRUD (Create, Read, Update, Delete) operations on movies. Theya also have additional CRUD capabilities for managing users.
-   **Database Design:** Utilizes a relational database with multiple tables. Implements one-to-many relationships between movies and watch history, and many-to-many relationships between genres and movies.
-   **Front-end Styling:** Custom CSS stylesheets, including Tailwind CSS, are used to design the front-end layout, ensuring a user-friendly and visually appealing experience.
-   **Form Validation:** Client-side validation is implemented to validate user input and provide meaningful feedback in case of errors.
-   **Search and Filtering:** Users can search and filter movies based on various criteria, enhancing the browsing experience.

## Screenshot

<img width="1470" alt="Screenshot 2024-05-13 at 8 28 36 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/3d0c789c-b551-4d20-8ba4-e46e173902cb">


<img width="1470" alt="Screenshot 2024-05-13 at 8 28 46 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/c18cb9fc-c70f-41a5-8822-1f0385972910">


<img width="1470" alt="Screenshot 2024-05-13 at 8 28 53 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/77fa115b-4fb0-496d-9900-e07a49089b69">
<img width="1470" alt="Screenshot 2024-05-13 at 8 29 01 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/301dffd4-f5da-4840-a116-52cede959d7f">
<img width="1470" alt="Screenshot 2024-05-13 at 8 29 13 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/774d19a8-bd0c-4693-8e16-68129f2a2883">
<img width="1470" alt="Screenshot 2024-05-13 at 8 29 58 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/0a166500-4f7f-42bb-b00f-40cc6a4f2cb3">
<img width="1470" alt="Screenshot 2024-05-13 at 8 30 30 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/dd952a6b-4555-4e00-ac5e-2230d7f55c7c">
<img width="1470" alt="Screenshot 2024-05-13 at 8 30 47 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/c6e1cd28-8db4-4aaa-8b38-32a073871683">
<img width="1470" alt="Screenshot 2024-05-13 at 8 30 56 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/fcf8a15c-8894-4c8e-98f2-632ea14a3e48">
<img width="1470" alt="Screenshot 2024-05-13 at 8 31 12 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/6001fe0a-ea4c-4377-9105-1e542e35792c">
<img width="1470" alt="Screenshot 2024-05-13 at 8 32 52 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/e5f53e20-6106-4d63-8241-d9315dae84f6">
<img width="1470" alt="Screenshot 2024-05-13 at 8 32 59 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/e132680f-5063-4943-b0b0-cb2b32afe125">
<img width="1470" alt="Screenshot 2024-05-13 at 8 33 13 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/39f5ef93-a11b-4c24-8bf3-4b99dd8fdb6e">
<img width="1470" alt="Screenshot 2024-05-13 at 8 33 20 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/ffea7f6b-8b7f-4507-94b0-612b1cf26ed6">
<img width="1470" alt="Screenshot 2024-05-13 at 8 33 29 AM" src="https://github.com/Harjappan-Singh/book-review/assets/105536922/6c76a171-89f1-41a3-8b58-5ef1f539579a">


## Technologies Used

-   Laravel
-   Tailwind CSS
-   PHP
- Alpine.js


## Getting Started

To get started with Task List, follow these steps:

1.  Clone the repository:
`git clone https://github.com/frogosorap/Netflix_Clone.git` 

2.  Install dependencies:
`composer install`
`npm install` 

3.  Set up environment variables:
`cp .env.example .env`
`php artisan key:generate` 

4.  Run migrations and seed the database:
`php artisan migrate --seed` 

5.  Start the development server:
`php artisan serve` 

6.  Visit your localhost in your web browser to access Netflix clone.

### Setup your database credentials in the .env file
`
DB_CONNECTION=mysql`
`DB_HOST=127.0.0.1`
 `DB_PORT=3306`
 ` DB_DATABASE=netflix`
  ` DB_USERNAME={USERNAME}`
   ` DB_PASSWORD={PASSWORD}`
   
## **Credits**

-   Laravel Framework: [laravel.com](https://laravel.com/)
-   Tailwind CSS: [tailwindcss.com](https://tailwindcss.com/)
-   Netflix: [netflix.com](https://www.netflix.com/)
## Contributing

Contributions are welcome! If you'd like to contribute to Netflix Clone, please fork the repository and submit a pull request with your changes.

## License

Task List is open-source software licensed under the MIT License.