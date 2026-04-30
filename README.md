<div align="center">

<!-- Logo / Brand -->
<h1>
  <img src="https://img.icons8.com/fluency/96/caduceus.png" width="60" alt="MedixAR Logo" /><br/>
  MedixAR
</h1>

<p><strong>Immersive 3D Medical Education — Explore the Human Body Like Never Before</strong></p>

<p>
  <a href="#-features"><img src="https://img.shields.io/badge/Features-11%20Systems-0d9488?style=for-the-badge&logo=databricks&logoColor=white" alt="Features"/></a>
  <a href="#-tech-stack"><img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"/></a>
  <a href="#-tech-stack"><img src="https://img.shields.io/badge/Tailwind_CSS-v3-38BDF8?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="TailwindCSS"/></a>
  <a href="#-tech-stack"><img src="https://img.shields.io/badge/SQLite-Database-003B57?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite"/></a>
  <img src="https://img.shields.io/badge/License-MIT-22c55e?style=for-the-badge" alt="MIT License"/>
</p>

<br/>

> **MedixAR** is a premium web application that brings human anatomy to life through interactive 3D models, adaptive quizzes, and personalized learning dashboards — all running directly in the browser with no AR headset required.

<br/>

---

</div>

## 📖 Table of Contents

- [✨ Features](#-features)
- [🖼️ Preview](#️-preview)
- [⚙️ Tech Stack](#️-tech-stack)
- [🚀 Getting Started](#-getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Database Setup](#database-setup)
  - [Running the App](#running-the-app)
- [📂 Project Structure](#-project-structure)
- [🧠 3D Anatomy Explorer](#-3d-anatomy-explorer)
- [🗂️ Database Overview](#️-database-overview)
- [🌐 Routes Reference](#-routes-reference)
- [👤 Default Test User](#-default-test-user)
- [🤝 Meet the Team](#-meet-the-team)
- [🗺️ Roadmap](#️-roadmap)
- [📄 License](#-license)

---

## ✨ Features

<table>
<tr>
<td width="50%">

**🫀 3D Anatomy Explorer**
- 11 real anatomical GLB models covering every major body system
- Google `<model-viewer>` — rotate, zoom, and pan in real-time
- Deep-link from dashboard directly to any model
- Automatic "Continue where you left off" tracking

</td>
<td width="50%">

**🧩 Adaptive Quiz Engine**
- 3 built-in quizzes — Nervous, Cardiovascular, Skeletal
- Multiple choice with instant scoring
- Quiz attempt history on personal dashboard
- Pass/fail threshold with percentage display

</td>
</tr>
<tr>
<td width="50%">

**📊 Personal Dashboard**
- Personalized welcome with learning streak counter
- "Pick up where you left off" — last viewed 3D model
- Recommended models and recent quiz results
- Activity timeline across all systems

</td>
<td width="50%">

**🔐 Full Auth System**
- Secure registration & login (session-based)
- Profile management — name, email, specialization
- Custom avatar upload with storage
- Password change and forgot-password flow

</td>
</tr>
<tr>
<td width="50%">

**💬 Contact System**
- Contact form with email dispatch (Laravel Mailable)
- Messages persisted to database
- Beautiful glassmorphism form UI

</td>
<td width="50%">

**🎨 Premium Design System**
- Dark-mode glassmorphism aesthetic throughout
- Smooth micro-animations & hover effects
- Tailwind CSS v3 — fully responsive
- Consistent design language across all pages

</td>
</tr>
</table>

---

## 🖼️ Preview

| Page | Description |
|------|-------------|
| **Landing Page** | Hero section with animated 3D background, feature highlights, and CTAs |
| **3D Explorer** | Split-layout — sidebar module list + full-screen interactive model viewer |
| **Dashboard** | Personalized greeting, recent activity, streak counter |
| **Quiz Page** | Clean question cards with radio answers and live scoring |
| **About Page** | Team profile cards with real photos and LinkedIn links |
| **Profile** | Avatar upload, account settings, password management |

---

## ⚙️ Tech Stack

| Layer | Technology |
|-------|-----------|
| **Backend Framework** | [Laravel 11](https://laravel.com/) (PHP 8.2+) |
| **Database** | SQLite (file: `medixar_db`) |
| **Frontend CSS** | [Tailwind CSS v3](https://tailwindcss.com/) via [Vite 5](https://vitejs.dev/) |
| **Frontend JS** | Vanilla JavaScript |
| **3D Rendering** | [Google Model Viewer](https://modelviewer.dev/) v3.4.0 |
| **Auth** | Custom session-based (Laravel `Auth` facade) |
| **Email** | Laravel Mailable (SMTP / log driver) |
| **Font** | [Outfit](https://fonts.google.com/specimen/Outfit) (Google Fonts) |

---

## 🚀 Getting Started

### Prerequisites

Make sure you have the following installed on your machine:

- **PHP** ≥ 8.2
- **Composer** ≥ 2.x
- **Node.js** ≥ 18.x + **npm**
- **Git**

### Installation

**1. Clone the repository**

```bash
git clone https://github.com/Gomit-Dev/mediXar.git
cd mediXar/app
```

**2. Install PHP dependencies**

```bash
composer install
```

**3. Install Node dependencies**

```bash
npm install
```

**4. Set up environment**

```bash
cp .env.example .env
php artisan key:generate
```

**5. Configure your `.env` file**

```env
APP_NAME=MedixAR
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=sqlite
# Leave DB_DATABASE blank to use the default medixar_db file

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_FROM_ADDRESS=your@gmail.com
MAIL_FROM_NAME="MedixAR"
```

### Database Setup

**Run migrations and seed sample data:**

```bash
php artisan migrate:fresh --seed
```

This will create all tables and seed:
- ✅ 1 test admin user
- ✅ 11 anatomy models (mapped to real `.glb` files)
- ✅ 3 quizzes with 10 total questions

**Create the storage symlink** (for serving uploaded avatars and GLB models):

```bash
php artisan storage:link
```

**Add your 3D model files** to:
```
storage/app/public/models/
```

The following files are expected:
```
nerves.glb    heart.glb    skeleton.glb    blood.glb
muscle.glb    kidney.glb   lung.glb        stomach.glb
liver.glb     organs.glb   Skull.glb
```

### Running the App

**In two separate terminals:**

```bash
# Terminal 1 — Laravel dev server
php artisan serve

# Terminal 2 — Vite asset compiler (watch mode)
npm run dev
```

Then open **[http://127.0.0.1:8000](http://127.0.0.1:8000)** in your browser.

---

## 📂 Project Structure

```
medixar/app/
│
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php          # Auth — register, login, logout, password reset
│   │   ├── DashboardController.php     # Dashboard — recent models & quiz attempts
│   │   ├── AnatomyController.php       # 3D Explorer — index, deep-link show, track view
│   │   ├── QuizController.php          # Quiz — list, show, submit & score
│   │   ├── ProfileController.php       # Profile — edit, avatar upload, password change
│   │   └── ContactController.php       # Contact form — show & email dispatch
│   │
│   └── Models/
│       ├── User.php                    # Users — auth + profile + plan type
│       ├── AnatomyModel.php            # 3D model metadata
│       ├── Hotspot.php                 # Annotation points on models
│       ├── Quiz.php                    # Quiz definitions
│       ├── Question.php                # Quiz questions (JSON options)
│       ├── QuizAttempt.php             # User quiz score records
│       └── ContactMessage.php          # Contact form submissions
│
├── resources/
│   ├── css/app.css                     # Tailwind CSS entry point
│   ├── js/app.js                       # JavaScript entry point
│   └── img/
│       ├── anatomy_hero_bg.png         # Hero background (Vite-managed)
│       └── image.png                   # Contact page background
│
├── public/
│   └── img/                            # Team photos (directly served)
│       ├── gomit.png
│       ├── anurag.jpg
│       └── pranav.png
│
├── storage/app/public/
│   ├── models/                         # Real .glb anatomy files (11 total)
│   └── avatars/                        # User-uploaded profile avatars
│
├── database/
│   ├── migrations/                     # 10 migration files
│   └── seeders/DatabaseSeeder.php      # Seeds models, quizzes, test user
│
├── routes/web.php                      # All application routes
├── BLUEPRINT.md                        # Full technical architecture document
└── README.md                           # This file
```

---

## 🧠 3D Anatomy Explorer

MedixAR uses **Google's `<model-viewer>`** web component to render real `.glb` 3D anatomy files directly in the browser with zero plugins required.

### How It Works

```
User clicks model in sidebar
        ↓
selectModule(id) called in JS
        ↓
<model-viewer src="/storage/models/<file>.glb"> updated
        ↓
AJAX POST → /anatomy/{id}/track-view
        ↓
Pivot table (anatomy_model_user) updated with last_viewed_at = NOW()
        ↓
Dashboard shows "Continue in 3D →" linking to /anatomy/{id}
```

### Supported Body Systems

| System | Model | Size |
|--------|-------|------|
| Nervous System | `nerves.glb` | ~87 MB |
| Skeletal System | `Skull.glb` | ~13 MB |
| Skeletal System | `skeleton.glb` | ~51 MB |
| Cardiovascular | `heart.glb` | ~7.5 MB |
| Cardiovascular | `blood.glb` | ~119 MB |
| Muscular System | `muscle.glb` | ~161 MB |
| Urinary System | `kidney.glb` | ~8 MB |
| Respiratory System | `lung.glb` | ~17 MB |
| Digestive System | `stomach.glb` | ~23 MB |
| Digestive System | `liver.glb` | ~12.5 MB |
| General Anatomy | `organs.glb` | ~38.5 MB |

---

## 🗂️ Database Overview

```
users ──────────────────────── anatomy_model_user (pivot)
  │  id, name, email            │  user_id, anatomy_model_id
  │  password, specialization   │  last_viewed_at
  │  learning_streak, avatar    │
  │  plan_type                  ▼
  │                        anatomy_models
  │                          id, title, description
  │                          file_path, category
  │                          thumbnail, is_premium
  │                               │
  │                               └──→ hotspots
  │                                     id, label, description
  │                                     position (3D coords)
  │
  └──→ quiz_attempts
        id, user_id, quiz_id
        score, total_questions
              │
              ▼
           quizzes
             id, title, category
             difficulty, description
                   │
                   └──→ questions
                         id, quiz_id
                         question_text
                         options (JSON)
                         correct_answer
```

---

## 🌐 Routes Reference

### Public

| Method | URI | Description |
|--------|-----|-------------|
| `GET` | `/` | Landing page |
| `GET` | `/about` | Meet the team |
| `GET` | `/contact` | Contact form |
| `POST` | `/contact` | Submit contact form |

### Guest Only

| Method | URI | Description |
|--------|-----|-------------|
| `GET` | `/login` | Login page |
| `POST` | `/login` | Submit login |
| `GET` | `/register` | Register page |
| `POST` | `/register` | Submit registration |
| `GET` | `/forgot-password` | Forgot password |
| `GET` | `/reset-password` | Reset password form |

### Authenticated

| Method | URI | Description |
|--------|-----|-------------|
| `GET` | `/dashboard` | Personal dashboard |
| `GET` | `/anatomy` | 3D anatomy explorer |
| `GET` | `/anatomy/{id}` | Explorer — pre-selects model |
| `POST` | `/anatomy/{id}/track-view` | AJAX — record view timestamp |
| `GET` | `/quiz` | Quiz catalog |
| `GET` | `/quiz/{id}` | Take a quiz |
| `POST` | `/quiz/{id}/submit` | Submit quiz answers |
| `GET` | `/profile` | Profile settings |
| `POST` | `/profile` | Update profile |
| `POST` | `/profile/avatar` | Upload avatar |
| `POST` | `/profile/password` | Change password |
| `POST` | `/logout` | Logout |

---

## 👤 Default Test User

After running `php artisan migrate:fresh --seed`, a test user is created:

> ⚠️ Update the email in `DatabaseSeeder.php` before production use.

```
Email:     (set in DatabaseSeeder.php → $user['email'])
Password:  password
Plan:      Free
```

---

## 🤝 Meet the Team

<table>
<tr>
<td align="center" width="33%">
  <strong>Gomit Saha</strong><br/>
  <em>Lead Developer & Visionary</em><br/>
  <a href="https://www.linkedin.com/in/gomit-saha">LinkedIn</a> · <a href="https://github.com/Gomit-Dev">GitHub</a>
</td>
<td align="center" width="33%">
  <strong>Anurag Yadav</strong><br/>
  <em>Core Developer</em><br/>
  <a href="https://www.linkedin.com/in/anurag-yv/">LinkedIn</a>
</td>
<td align="center" width="33%">
  <strong>Pranav Gaira</strong><br/>
  <em>Core Developer</em><br/>
  <a href="https://www.linkedin.com/in/pranav-gaira">LinkedIn</a>
</td>
</tr>
</table>

---

## 🗺️ Roadmap

- [ ] 🔵 **Hotspot annotations** — clickable 3D labels on model surfaces
- [ ] 🟡 **Premium gating** — lock models behind subscription paywall
- [ ] 🟡 **Daily streak auto-increment** — reward consecutive login days
- [ ] 🟡 **Category filter** — filter anatomy explorer by body system
- [ ] 🟡 **Quiz result breakdown** — per-question correct/incorrect feedback
- [ ] 🔴 **Real password reset emails** — SMTP token-based reset flow
- [ ] 🔴 **Admin panel** — web interface for managing models, quizzes, users
- [ ] 🔵 **WebXR / AR Mode** — view models in augmented reality on supported devices
- [ ] 🔵 **Progress tracking** — % completion per body system
- [ ] 🔵 **Mobile-responsive sidebar** — collapsible anatomy explorer on small screens

> 🔵 Planned &nbsp;|&nbsp; 🟡 In Progress &nbsp;|&nbsp; 🔴 High Priority

---

## 📄 License

This project is licensed under the **MIT License** — see the [LICENSE](LICENSE) file for full details.

---

<div align="center">

<br/>

**Built with ❤️ by the MedixAR Team**

*Gomit Saha · Anurag Yadav · Pranav Gaira*

<br/>

<sub>© 2026 MedixAR EdTech. All rights reserved.</sub>

</div>
