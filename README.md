# Smart Job Portal & Applicant Tracking System (ATS)

A full-stack **Smart Job Portal & Applicant Tracking System** built with a modern decoupled architecture. The backend is a robust RESTful API powered by **Laravel** and **MySQL**, while the independent frontend client is built using pure **HTML**, **JavaScript**, and **Tailwind CSS v4**. 



This application allows **Employers** to post jobs, **Candidates** to apply for jobs, and **Admins** to manage the entire platform efficiently.

## 🚀 Folder Structure
This project uses a separated architecture:
* `/backend` - Contains the core Laravel API, authentication, and database logic.
* `/frontend` - Contains the HTML client, Tailwind configuration, and vanilla JavaScript for fetching API data.

## ✨ Features

### Authentication & Authorization
- Secure login & registration system via API tokens
- Role-based access control (Admin, Employer, Candidate)
- Laravel API middleware & policies

### Employer Panel
- Create, edit, and delete job postings
- View job applications
- Shortlist or reject candidates
- Download candidate CVs
- Manage posted jobs

### Candidate Panel
- Create and update profile
- Upload CV / Resume
- Browse and search jobs
- Apply for jobs
- Track application status

### Admin Panel
- Manage users (Employers & Candidates)
- Approve or block employer accounts
- Manage job categories
- Monitor job postings and applications

### Job Management
- Job listing with filters (category, location, type)
- Search functionality
- Application status tracking

### Notifications
- Email notifications for job applications
- Status update alerts (optional)

## 💻 Tech Stack

| Technology | Usage |
|----------|------|
| **Laravel** | Backend REST API framework |
| **MySQL** | Relational Database |
| **HTML5** | Frontend Markup |
| **Tailwind CSS v4** | Utility-first UI Styling |
| **Vanilla JavaScript**| Client-side logic & Fetch API |

## 🧠 Learning Outcomes
* Transitioning from monolithic MVC to Decoupled API Architecture
* Building and documenting RESTful APIs in Laravel
* Implementing Laravel API authentication & middleware
* Role-based access control
* Database relationships and ORM management
* Clean separation of concerns between client and server

