<a name="readme-top"></a>

<br/>
<br/>

<div align="center">
  <a href="https://github.com/zyx-0314/">
    <img src="./assets/img/nyebe_white.png" alt="Nyebe" width="130" height="100">
  </a>
<!-- * Title Section -->
  <h3 align="center">AD- Streetline Supply</h3>
</div>

<!-- * Description Section -->
<div align="center">
Streetline Supply is a street clothing and skate shop inspired by the underground culture of the city. We blend urban fashion and skateboarding lifestyle into one platform — offering gear, apparel, and accessories that match the energy of the streets.

</div>

<br/>

![](https://visit-counter.vercel.app/counter.png?page=zyx-0314/ci4-template)

<!-- ! Make sure it was similar to your github -->

---

<br/>
<br/>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rules-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

This project serves as a **CodeIgniter 4-based web application** for *AD - Streetline Supply Store*, a streetwear and skate shop inspired by the underground culture of the city.

It provides a foundation for building a full-featured e-commerce platform — combining a clean structure, authentication system, and product management tools.



* **Purpose**: a modern CodeIgniter 4 e-commerce starter app.
* **Audience**: developers who want to create scalable shop systems using CI4.

### Key Components


**Streetline Supply** blends urban fashion with the skateboarding lifestyle — offering premium gear, apparel, and accessories that capture the energy and attitude of the streets.

This project aims to bring that same vibe online through a dynamic, responsive web app for streetwear enthusiasts:

| Component                 | Purpose                                                             | Notes                                                   |
| ------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------- |
**User Authentication**        | Login/logout with buyer roles (admin, customer).                                             | 🧩 In progress |
| **Buyer Module**               | Buyers can register, update profiles, and manage their account.                             | 🧩 Planned |
| **Add to Cart (CRUD)**         | Shoppers can add, update, or remove products from their cart.                                | 🧩 Planned |
| **Product Management (CRUD)**  |  Admins can create, edit, or delete products (gear, apparel, accessories).                    | ✅ Working |
| **Promo Scheduler**            | Schedule promotions or sales events with date/time triggers.                                 | 🧩 Planned |
| **Checkout & Order History**   | Buyers can review cart, finalize purchases, and view past orders.                            | 🧩 Planned |

 <!-- ! Start simple. Use these modules as **learning samples**; extend or replace them based on your project’s needs. -->

### Technology

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge\&logo=html5\&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge\&logo=css3\&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge\&logo=javascript\&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)

#### Framework/Library

![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge\&logo=tailwindcss\&logoColor=white)


#### Databases

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=for-the-badge\&logo=codeigniter\&logoColor=white)




<!-- ! Keep only the used technology -->

---

## Quick Start (Docker)

Run the development stack and the app (rebuild if needed):

```cmd
docker compose up --watch
```

Common utility commands (run inside the project root):

- Run migrations:
```cmd
docker compose exec php composer migrate
```
- Run seeders:
```cmd
docker compose exec php composer seed
```
- Run tests:
```cmd
docker compose exec php composer test
```

- Create a migration (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:migration CreateUsersTabel
```

- Create a model (using CodeIgniter's spark tool):

```cmd
docker compose exec php php spark make:model UsemModel
```

- Create an entity (value object for a single record) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:entity Uzer
```

- Create a controller (add --resource to scaffold resourceful methods if you like) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:controller Usars
```

- Create a seeder (for test/dev data) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:seeder UserzSeeder
```

If you prefer, you can include `-f "compose.yaml"` explicitly; the shorter commands above work when running from the repo root.

## Ports & Database

Defaults used in this project (host mapping):

| Service     | Host port |
|-------------|-----------:|
| nginx (app) | 8090      |
| phpMyAdmin  | 8091      |
| MySQL       | 3390      |

Database credentials used in examples and CI:

- Host: localhost
- Port: 3390
- Database: app
- User: root
- Password: root

Be careful: seeding and truncating are destructive operations — run only on local/dev environments unless you know what you're doing.

## Rules, Practices and Principles

<!-- ! Dont Revise this -->

1. Always prefix project titles with `AD-`.
2. Place files in their **respective CI4 folders** (`Controllers/`, `Services/`, `Repositories/`, `Views/`).
3. Naming conventions:

   | Type             | Case        | Example                   |
   | ---------------- | ----------- | ------------------------- |
   | Classes          | PascalCase  | `UserService.php`         |
   | Interfaces       | PascalCase  | `UserRepositoryInterface` |
   | DB tables/fields | snake\_case | `users`, `created_at`     |
   | Docs             | kebab-case  | `dev-manual.md`           |

4. Git commits use: `feat`, `fix`, `docs`, `refactor`.
5. Use **Controller → Service → Repository** pattern.
6. Assets (CSS/JS/img) live under `public/`.
7. Docker configs are at the repo root (`docker-compose.yml`, `nginx.conf`).
8. Docs are maintained in `/docs` (dev, technical, sop, commit, principles, copilot).

Example structure:

```
AD-ProjectName/
├─ backend/ci4/
│  ├─ app/Controllers/
│  ├─ app/Services/
│  ├─ app/Repositories/
│  ├─ app/Views/
│  ├─ public/
│  ├─ writable/
│  ├─ .env
│  └─ composer.json
├─ docker/               # Docker configs at root
├─ docs/                 # Manuals and project docs
├─ .gitignore
└─ readme.md
```

<!-- ! Dont Revise this -->

---

## Resources

| Title                   | Purpose                                                               | Link                                                                       |
| ----------------------- | --------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| ChatGPT                 | General AI assistance for planning application architecture and docs. | [https://chat.openai.com](https://chat.openai.com)                         |

| YouTube “UI/UX Design”  | Video tutorials on modern web interface layouts and patterns.         | [https://www.youtube.com](https://www.youtube.com)                         |
| Pinterest Design Boards | Inspiration for color schemes, typography, and component layouts.     | [https://www.pinterest.com](https://www.pinterest.com)                     |                                       |



<!-- ! Add what tools aided you -->