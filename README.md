# React Vite + Pure PHP Backend

This project is a full-stack application with a frontend built using React and Vite, and a backend built using pure PHP. The backend has the capability to handle CORS errors.

## Project Structure
GitHub Copilot
## Project Structure

```
my-app/
├── client/
│   ├── .gitignore
│   ├── eslint.config.js
│   ├── index.html
│   ├── package.json
│   ├── README.md
│   ├── vite.config.js
│   ├── public/
│   │   └── vite.svg
│   └── src/
│       ├── App.css
│       ├── App.jsx
│       ├── index.css
│       ├── main.jsx
│       └── assets/
│           └── react.svg
└── server/
    ├── adduser.php
    ├── connection.php
    ├── cors.php
    └── showusers.php
```

## Frontend

The frontend is built using React and Vite. It includes a simple form to add users and a link to view registered users.

### Development

To start the development server, navigate to the `client` directory and run:

```sh
npm install
npm run dev
```

## Backend
    The backend is built using pure PHP. It includes scripts to handle user registration and display registered users. It also includes a CORS handler to manage CORS errors.

### CORS Handling
    The cors.php file handles CORS errors by setting the appropriate headers