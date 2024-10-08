# Wise Publishing Frontend Challenge 👨‍💻

This challenge is meant to measure your capabilities as a **senior frontend developer** and assess your approach to solving complex frontend problems. We value clean architecture, attention to performance, and good user experience.

We appreciate adherence to **SOLID**, **KISS**, and **DRY** principles and encourage a focus on performance, **Core Web Vitals (CWV)**, and UI/UX skills.

We expect that an MVP (Minimum Viable Product) of this challenge will take roughly 3-4 hours. However you will have 2 business days to complete the task.

## Project Name: **WiseJobs** 🦉

### Requirements ⚙️

This project will use **Laravel** (as a backend framework) and **Alpine.js**, **vanilla JS**, **HTML**, **CSS**, and **Blade templating** for the frontend.

You are tasked with creating a responsive, performant, and user-friendly job board application called WiseJobs.

### Users 👥

**Users should be able to:**
- Scroll through the list of the latest published jobs.
- Filter jobs based on: position type (remote or in-person), salary, company, and location.
- View more details for each individual job.
- **Performance Consideration:** Ensure smooth scrolling, fast page loading, and efficient job filtering.
- **UI/UX Consideration:** The list should be easy to navigate, with clear, user-friendly job cards, and filters should be intuitive and accessible.

### Admin Users 🗣️

**Admin users should be able to:**
- Create companies.
- View all companies and the number of postings for each company.
- View a single company.
- Update a company.
- Delete a company and all of its postings.
- Create job postings for a selected company.
- View a single job posting.
- Update a job posting.
- Delete a job posting.
  
### Frontend Expectations 🤘

1. **Performance:**
   - **Optimize for Core Web Vitals (CWV):** Ensure the app scores well on metrics like First Contentful Paint (FCP), Largest Contentful Paint (LCP), and Cumulative Layout Shift (CLS).
   - **Lazy Loading:** Implement lazy loading of job postings and images to improve initial load time.
   - **Minification and Compression:** Minimize and compress assets (CSS, JS) for better performance.

2. **UI/UX:**
   - **Responsive Design:** Ensure the application is fully responsive across all devices (mobile, tablet, desktop).
   - **User-friendly Filters:** Implement an intuitive filtering UI with clear feedback when users apply filters.
   - **Microinteractions:** Add subtle animations or transitions to improve the user experience without impacting performance.
   - **Accessibility:** Ensure the site is accessible for all users (e.g., keyboard navigation, screen reader support).

3. **Frontend Architecture:**
   - **Reusable Components:** Build reusable components for job cards, filter options, and forms using Blade and Alpine.js.
   - **Separation of Concerns:** Ensure a clean separation between data fetching and UI rendering for scalability.
   - **CSS Architecture:** Use a CSS methodology such as BEM or utility-first CSS for maintainable and scalable styles.

4. **Extras (Optional but appreciated):**
   - **Dark Mode Toggle**: Provide a dark mode toggle for the job board.
   - **Hosting**: Deploy the application for extra points.

### Submission 📬

Please make sure to fork this repository and commit your code. We would like to see your commit history with clear, frequent commit messages. When you are completed with the challenge, feel free to share the repository link with us, along with a readme for getting started with the project. Ensure at least one commit is pushed at the 2-hour mark.


### DebugBar for Laravel

**Installation**
Require this package with composer. It is recommended to only require the package for development.

```shell
composer require barryvdh/laravel-debugbar --dev
```

[github link to DebugBar for Laravel](https://github.com/barryvdh/laravel-debugbar)

### ... ###

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
