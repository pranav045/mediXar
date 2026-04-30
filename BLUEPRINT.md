# MedixAR — Complete Project Blueprint

> **Version:** 1.0  
> **Stack:** Laravel 11 + Blade + Tailwind CSS (via Vite) + SQLite  
> **Purpose:** A premium medical education web app with interactive 3D anatomy exploration, quizzes, and user progress tracking.

---

## Table of Contents

1. [Project Overview](#1-project-overview)
2. [Tech Stack](#2-tech-stack)
3. [Directory Structure](#3-directory-structure)
4. [Database Schema](#4-database-schema)
5. [Models & Relationships](#5-models--relationships)
6. [Routes](#6-routes)
7. [Controllers](#7-controllers)
8. [Views / Pages](#8-views--pages)
9. [3D Anatomy System](#9-3d-anatomy-system)
10. [Authentication System](#10-authentication-system)
11. [Quiz System](#11-quiz-system)
12. [Static Assets](#12-static-assets)
13. [Seeder Data](#13-seeder-data)
14. [Known Limitations & Future Work](#14-known-limitations--future-work)

---

## 1. Project Overview

MedixAR is an interactive 3D medical education platform targeting medical students, healthcare professionals, and anatomy enthusiasts. It allows users to:

- Explore real 3D human anatomical models in the browser (no AR headset required)
- Track their learning progress across multiple body systems
- Take quizzes on cranial nerves, cardiovascular anatomy, and more
- Manage a personal profile with avatar, specialization, and plan tier

The platform is built as a monolithic Laravel application with server-side rendered Blade templates, Tailwind CSS for styling, and the Google `<model-viewer>` web component for 3D model rendering.

---

## 2. Tech Stack

| Layer         | Technology                          |
|---------------|-------------------------------------|
| Backend       | Laravel 11 (PHP 8.2+)               |
| Database      | SQLite (`medixar_db`)               |
| Frontend CSS  | Tailwind CSS v3 (compiled via Vite) |
| Frontend JS   | Vanilla JS + model-viewer web component |
| 3D Renderer   | Google `<model-viewer>` v3.4.0      |
| Asset Build   | Vite 5                              |
| Auth          | Custom session-based (no Laravel Breeze) |
| Email         | Laravel Mailable (SMTP / log driver) |
| Dev Server    | `php artisan serve` (localhost:8000) |

---

## 3. Directory Structure

```
p:\mediaXar\app\
│
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php          # Login, Register, Logout, Password Reset
│   │   ├── DashboardController.php     # User dashboard with recent activity
│   │   ├── AnatomyController.php       # 3D model explorer + deep-link to specific model
│   │   ├── QuizController.php          # Quiz listing, show, submit & score
│   │   ├── ProfileController.php       # Profile edit, avatar upload, password change
│   │   └── ContactController.php       # Contact form show & submit (email dispatch)
│   │
│   └── Models/
│       ├── User.php                    # users table — auth + profile + plan
│       ├── AnatomyModel.php            # anatomy_models table — 3D model metadata
│       ├── Hotspot.php                 # hotspots table — annotation points on models
│       ├── Quiz.php                    # quizzes table
│       ├── Question.php                # questions table (belongs to Quiz)
│       ├── QuizAttempt.php             # quiz_attempts table (User score records)
│       └── ContactMessage.php          # contact_messages table
│
├── database/
│   ├── migrations/                     # 10 migration files (see Section 4)
│   └── seeders/
│       └── DatabaseSeeder.php          # Seeds 11 anatomy models + quizzes + test user
│
├── resources/
│   ├── css/app.css                     # Tailwind directives entry point
│   ├── js/app.js                       # JS entry point
│   └── img/
│       ├── anatomy_hero_bg.png         # Background image used across all pages (via Vite)
│       └── image.png                   # Contact page background image (via Vite)
│
├── public/
│   ├── img/
│   │   ├── gomit.png                   # Gomit Saha profile photo (About page)
│   │   ├── anurag.jpg                  # Anurag Yadav profile photo (About page)
│   │   └── pranav.png                  # Pranav Gaira profile photo (About page)
│   └── build/                          # Vite compiled CSS/JS output
│
├── storage/app/public/
│   └── models/                         # Real GLB anatomy model files (11 total)
│       ├── nerves.glb                  # Nervous System
│       ├── Skull.glb                   # Human Skull (Skeletal)
│       ├── heart.glb                   # Human Heart (Cardiovascular)
│       ├── skeleton.glb                # Full Skeleton
│       ├── blood.glb                   # Blood Vessels (Cardiovascular)
│       ├── muscle.glb                  # Muscular System
│       ├── kidney.glb                  # Left Kidney (Urinary)
│       ├── lung.glb                    # Human Lungs (Respiratory)
│       ├── stomach.glb                 # Stomach (Digestive)
│       ├── liver.glb                   # Liver (Digestive)
│       └── organs.glb                  # Internal Organs (General Anatomy)
│
├── routes/web.php                      # All application routes
├── vite.config.js                      # Vite config (CSS + JS entry points)
├── medixar_db                          # SQLite database file
└── BLUEPRINT.md                        # This file
```

---

## 4. Database Schema

### `users`
| Column           | Type       | Notes                          |
|------------------|------------|--------------------------------|
| id               | bigint PK  |                                |
| name             | string     |                                |
| email            | string     | Unique                         |
| password         | string     | Hashed (bcrypt)                |
| specialization   | string     | nullable — e.g. "General Medicine" |
| learning_streak  | integer    | default 0, days in a row       |
| avatar           | string     | nullable — path to uploaded avatar |
| preferences      | json       | nullable — user settings       |
| plan_type        | string     | 'Free' or 'Premium'            |
| remember_token   | string     | nullable                       |
| created_at / updated_at | timestamps |                         |

### `anatomy_models`
| Column      | Type      | Notes                                |
|-------------|-----------|--------------------------------------|
| id          | bigint PK |                                      |
| title       | string    | Display name (e.g. "Human Heart")    |
| description | text      | Short anatomical description         |
| file_path   | string    | Relative path: `models/heart.glb`    |
| category    | string    | e.g. "Cardiovascular", "Nervous System" |
| thumbnail   | string    | nullable — path to preview image     |
| is_premium  | boolean   | default false                        |
| created_at / updated_at | timestamps |                          |

### `anatomy_model_user` (pivot)
| Column         | Type      | Notes                          |
|----------------|-----------|--------------------------------|
| anatomy_model_id | bigint  |                                |
| user_id        | bigint    |                                |
| last_viewed_at | timestamp | Updated on every model view    |

### `hotspots`
| Column          | Type      | Notes                              |
|-----------------|-----------|-------------------------------------|
| id              | bigint PK |                                     |
| anatomy_model_id| bigint FK | belongs to anatomy_models           |
| label           | string    | Short label shown on model          |
| description     | text      | Detail shown when hotspot clicked   |
| position        | string    | 3D coordinates e.g. "0 1.2 0.5"   |
| created_at / updated_at | timestamps |                           |

### `quizzes`
| Column      | Type      | Notes                            |
|-------------|-----------|----------------------------------|
| id          | bigint PK |                                  |
| title       | string    | e.g. "Cranial Nerves Basics"     |
| category    | string    | e.g. "Nervous System"            |
| difficulty  | string    | 'Easy', 'Medium', 'Hard'         |
| description | text      |                                  |
| created_at / updated_at | timestamps |                      |

### `questions`
| Column         | Type      | Notes                                     |
|----------------|-----------|-------------------------------------------|
| id             | bigint PK |                                           |
| quiz_id        | bigint FK | belongs to quizzes                        |
| question_text  | text      |                                           |
| options        | json      | Array of 4 answer choices                 |
| correct_answer | string    | Must match one of the options exactly     |
| created_at / updated_at | timestamps |                                 |

### `quiz_attempts`
| Column          | Type      | Notes                            |
|-----------------|-----------|----------------------------------|
| id              | bigint PK |                                  |
| user_id         | bigint FK | belongs to users                 |
| quiz_id         | bigint FK | belongs to quizzes               |
| score           | integer   | Number of correct answers        |
| total_questions | integer   | Total questions in quiz          |
| created_at / updated_at | timestamps |                      |

### `contact_messages`
| Column     | Type      | Notes                |
|------------|-----------|----------------------|
| id         | bigint PK |                      |
| name       | string    |                      |
| email      | string    |                      |
| subject    | string    |                      |
| message    | text      |                      |
| created_at / updated_at | timestamps |       |

---

## 5. Models & Relationships

```
User
 ├── hasMany     → QuizAttempt
 └── belongsToMany → AnatomyModel  (via anatomy_model_user pivot, ordered by last_viewed_at)

AnatomyModel
 ├── hasMany     → Hotspot
 └── belongsToMany → User

Quiz
 ├── hasMany     → Question
 └── hasMany     → QuizAttempt

QuizAttempt
 ├── belongsTo   → User
 └── belongsTo   → Quiz

Question
 └── belongsTo   → Quiz

Hotspot
 └── belongsTo   → AnatomyModel
```

---

## 6. Routes

### Public Routes (no auth required)
| Method | URI           | Controller                    | Name           |
|--------|---------------|-------------------------------|----------------|
| GET    | /             | Closure → welcome view        | home           |
| GET    | /about        | Closure → about view          | about          |
| GET    | /contact      | ContactController@show        | contact.show   |
| POST   | /contact      | ContactController@submit      | contact.submit |

### Guest-only Routes (redirect if already logged in)
| Method | URI                | Controller                       | Name             |
|--------|--------------------|----------------------------------|------------------|
| GET    | /login             | AuthController@showLogin         | login            |
| POST   | /login             | AuthController@login             | login.submit     |
| GET    | /register          | AuthController@showRegister      | register         |
| POST   | /register          | AuthController@register          | register.submit  |
| GET    | /forgot-password   | AuthController@showForgotPassword| password.request |
| POST   | /forgot-password   | AuthController@forgotPassword    | password.email   |
| GET    | /reset-password    | AuthController@showResetPassword | password.reset   |
| POST   | /reset-password    | AuthController@resetPassword     | password.update  |

### Authenticated Routes (requires login)
| Method | URI                        | Controller                    | Name              |
|--------|----------------------------|-------------------------------|-------------------|
| POST   | /logout                    | AuthController@logout         | logout            |
| GET    | /dashboard                 | DashboardController@index     | dashboard         |
| GET    | /profile                   | ProfileController@edit        | profile           |
| POST   | /profile                   | ProfileController@update      | profile.update    |
| POST   | /profile/avatar            | ProfileController@uploadAvatar| profile.avatar    |
| POST   | /profile/password          | ProfileController@updatePassword| profile.password |
| GET    | /anatomy                   | AnatomyController@index       | anatomy           |
| GET    | /anatomy/{id}              | AnatomyController@show        | anatomy.show      |
| POST   | /anatomy/{id}/track-view   | AnatomyController@trackView   | anatomy.track     |
| GET    | /quiz                      | QuizController@index          | quiz              |
| GET    | /quiz/{id}                 | QuizController@show           | quiz.show         |
| POST   | /quiz/{id}/submit          | QuizController@submit         | quiz.submit       |

---

## 7. Controllers

### AuthController
- `showLogin()` → renders `auth/login.blade.php`
- `showRegister()` → renders `auth/register.blade.php`
- `register(Request)` → validates name/email/password, creates User, logs in, redirects to dashboard
- `login(Request)` → validates credentials, attempts auth, redirects to intended page
- `logout(Request)` → invalidates session, redirects to `/`
- `showForgotPassword()` → renders `auth/forgot-password.blade.php`
- `forgotPassword(Request)` → validates email exists, redirects to reset page (⚠️ no token/email sent — simplified flow)
- `showResetPassword(Request)` → renders `auth/reset-password.blade.php` with email from query string
- `resetPassword(Request)` → validates, updates password directly by email lookup

### DashboardController
- `index()` → fetches `viewedModels` (last 3) and `recentQuizzes` (last 5) for logged-in user, passes to `dashboard` view

### AnatomyController
- `index()` → fetches all `AnatomyModel` records, renders `anatomy.blade.php`
- `show($id)` → fetches all models + sets `$selectedModelId`, renders `anatomy.blade.php` (deep-links to specific model in JS)
- `trackView($id)` → AJAX POST — syncs pivot table `anatomy_model_user.last_viewed_at = now()`

### QuizController
- `index()` → fetches all `Quiz` records, renders `quiz.blade.php`
- `show($id)` → fetches Quiz with Questions, renders `quiz/show.blade.php`
- `submit(Request, $id)` → scores quiz by comparing submitted answers to `correct_answer`, saves `QuizAttempt`, redirects back to quiz list with score flash

### ProfileController
- `edit()` → renders profile page with auth user data
- `update(Request)` → updates name, email, specialization, preferences
- `uploadAvatar(Request)` → stores uploaded image to `storage/app/public/avatars/`, saves path to `users.avatar`
- `updatePassword(Request)` → validates current + new password, updates hash

### ContactController
- `show()` → renders contact form
- `submit(Request)` → validates + saves `ContactMessage`, dispatches Laravel Mailable to `ishikaishika1603@gmail.com`

---

## 8. Views / Pages

### Public Pages
| View                   | Route  | Description                                                    |
|------------------------|--------|----------------------------------------------------------------|
| `welcome.blade.php`    | /      | Landing page — hero, features, CTA                             |
| `about.blade.php`      | /about | Team page — Gomit Saha (Lead), Anurag Yadav, Pranav Gaira      |
| `contact.blade.php`    | /contact| Contact form with email dispatch                              |

### Auth Pages (in `views/auth/`)
| View                        | Route             |
|-----------------------------|-------------------|
| `login.blade.php`           | /login            |
| `register.blade.php`        | /register         |
| `forgot-password.blade.php` | /forgot-password  |
| `reset-password.blade.php`  | /reset-password   |

### Authenticated Pages
| View                   | Route         | Description                                                       |
|------------------------|---------------|-------------------------------------------------------------------|
| `dashboard.blade.php`  | /dashboard    | Welcome greeting, "Continue in 3D" card, Recommended models, Recent Quizzes |
| `anatomy.blade.php`    | /anatomy      | Full-screen 3D explorer — sidebar module list + model-viewer      |
| `quiz.blade.php`       | /quiz         | Quiz catalog with cards per quiz                                  |
| `quiz/show.blade.php`  | /quiz/{id}    | Individual quiz with radio-button questions                       |
| `profile.blade.php`    | /profile      | Profile editor — avatar, name, email, specialization, password    |

---

## 9. 3D Anatomy System

### How It Works
1. On page load, `anatomy.blade.php` encodes all `AnatomyModel` records into a JavaScript array via `{!! json_encode($models) !!}`
2. A JS function `selectModule(id, force)` updates the `<model-viewer>` `src` attribute to `/storage/models/<filename>.glb`
3. The sidebar renders clickable buttons for each model. Active model gets a teal highlight + pulse dot
4. On every model selection, an AJAX POST to `/anatomy/{id}/track-view` updates `anatomy_model_user.last_viewed_at`
5. When accessed via `/anatomy/{id}` (from dashboard "Continue in 3D"), the blade passes `$selectedModelId` to JS, which pre-selects that model automatically

### File Path Convention
- GLB files live in: `storage/app/public/models/`
- Public URL: `http://localhost:8000/storage/models/<file.glb>`
- Database stores relative path: `models/<file.glb>`
- JS prepends `/storage/` to build the full URL

### Model Catalog (11 Real GLB Models)

| Title             | File           | Category         | Premium |
|-------------------|----------------|------------------|---------|
| Nervous System    | nerves.glb     | Nervous System   | No      |
| Human Skull       | Skull.glb      | Skeletal System  | No      |
| Human Heart       | heart.glb      | Cardiovascular   | Yes     |
| Full Skeleton     | skeleton.glb   | Skeletal System  | No      |
| Blood Vessels     | blood.glb      | Cardiovascular   | No      |
| Muscular System   | muscle.glb     | Muscular System  | Yes     |
| Left Kidney       | kidney.glb     | Urinary System   | No      |
| Human Lungs       | lung.glb       | Respiratory System| Yes    |
| Stomach           | stomach.glb    | Digestive System | No      |
| Liver             | liver.glb      | Digestive System | No      |
| Internal Organs   | organs.glb     | General Anatomy  | No      |

---

## 10. Authentication System

- **Session-based** — uses Laravel's built-in `Auth` facade with `web` guard
- **No email verification** — users are immediately active after registration
- **Password reset** — simplified: no token/email sent; user provides email → redirected to reset form directly (production would need `Password::sendResetLink()`)
- **Guest middleware** — login/register routes redirect authenticated users away
- **Auth middleware** — dashboard, anatomy, quiz, profile routes require login

### Plan Types
- `Free` — default on registration
- `Premium` — set manually (no payment gateway implemented)
- `is_premium` flag on `AnatomyModel` marks models that could be gated (enforcement not yet implemented in views)

---

## 11. Quiz System

### Structure
- A **Quiz** has many **Questions**
- Each Question has 4 `options` (stored as JSON array) and one `correct_answer`
- On submit, the controller scores by string-matching each submitted answer against `correct_answer`
- Score is saved to `quiz_attempts` with `score` and `total_questions`

### Seeded Quizzes
| Quiz Title                  | Category          | Difficulty | Questions |
|-----------------------------|-------------------|------------|-----------|
| Cranial Nerves Basics       | Nervous System    | Medium     | 3         |
| Cardiovascular Essentials   | Cardiovascular    | Easy       | 3         |
| Skeletal System Overview    | Skeletal System   | Hard       | 4         |

---

## 12. Static Assets

### Vite-managed (in `resources/img/`)
| File                  | Used In                                              |
|-----------------------|------------------------------------------------------|
| `anatomy_hero_bg.png` | Background overlay on every authenticated page + auth pages |
| `image.png`           | Contact page background                              |

### Public-served (in `public/img/`)
| File         | Used In              | Note                          |
|--------------|----------------------|-------------------------------|
| `gomit.png`  | `about.blade.php`    | Gomit Saha — cache-busted with `?v={{ time() }}` |
| `anurag.jpg` | `about.blade.php`    | Anurag Yadav                  |
| `pranav.png` | `about.blade.php`    | Pranav Gaira                  |

### Storage-served (via symlink `public/storage → storage/app/public`)
| Path                         | Content                   |
|------------------------------|---------------------------|
| `storage/app/public/models/` | 11 real `.glb` anatomy models |
| `storage/app/public/avatars/`| User-uploaded profile avatars |

---

## 13. Seeder Data

File: `database/seeders/DatabaseSeeder.php`

**Test User**
```
Name:           Admin User
Email:          . (placeholder — update before use)
Password:       password
Specialization: General Medicine
Plan:           Free
```

**11 Anatomy Models** — mapped directly to real `.glb` files (see Section 9)

**3 Quizzes with 10 total questions** — covering Nervous System, Cardiovascular, Skeletal System

### Re-seeding
```bash
php artisan migrate:fresh --seed
php artisan optimize:clear
```

---

## 14. Known Limitations & Future Work

### Current Limitations
| Area | Issue |
|------|-------|
| Password Reset | No actual email token sent — simplified redirect only |
| Premium Gating | `is_premium` flag exists but no enforcement in UI |
| Hotspots | Table + model exist but no UI to add/display hotspot annotations |
| Learning Streak | `learning_streak` column exists but never auto-incremented |
| Quiz Feedback | No per-question correct/incorrect feedback shown after submission |
| File Upload | Avatar upload works but no image resize/validation |
| Search | No search or filter on anatomy models or quizzes |
| Pagination | All models/quizzes fetched at once — no pagination |

### Suggested Next Features
1. **Hotspot annotations** — click on a body part in the 3D viewer to see labels
2. **Premium gating** — lock `is_premium` models behind a subscription paywall
3. **Daily streak tracking** — auto-increment `learning_streak` on daily login
4. **Model search & category filter** — filter anatomy explorer by body system
5. **Quiz detailed results** — show per-question correct/wrong after submit
6. **Real password reset emails** — integrate `Password::sendResetLink()` with SMTP
7. **Admin panel** — CRUD for models, quizzes, questions via web interface
8. **AR Mode** — integrate WebXR for supported devices using model-viewer's `ar` attribute
9. **Progress tracking** — percentage completion per body system
10. **Mobile sidebar** — the anatomy explorer sidebar collapses on mobile

---

*Last updated: 2026-04-30 | MedixAR Dev Team — Gomit Saha, Anurag Yadav, Pranav Gaira*
