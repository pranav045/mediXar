<p align="center">
  <img src="resources/img/image.png" alt="MedixAR Logo" width="100">
</p>

<h1 align="center">MedixAR | Master Human Anatomy</h1>

<p align="center">
  <strong>An advanced, interactive EdTech platform for medical students to explore human anatomy in 3D and Augmented Reality.</strong>
</p>

---

## 🚀 Overview

**MedixAR** is a premium educational platform built with Laravel. It bridges the gap between traditional textbook learning and modern interactive visualization by providing high-fidelity 3D anatomical models (like the Human Heart, Brain Stem, and Skull) that can be viewed directly in the browser or experienced in your physical space via AR.

The project features a cutting-edge **glassmorphic design system** styled with Tailwind CSS, offering a futuristic, sleek, and immersive user experience.

## ✨ Key Features

- 🧬 **Interactive 3D Explorer**: Utilize Google's `<model-viewer>` web component to rotate, zoom, and interact with anatomical `.glb` models natively in the browser.
- 📱 **Augmented Reality (AR) Ready**: Mobile users can project 1:1 scale anatomical models directly into their physical environment using WebXR and Scene Viewer.
- 🎯 **Gamified Quizzes**: Built-in interactive assessment modules to test knowledge on specific anatomical systems (Nervous, Cardiovascular, Skeletal, etc.).
- 📊 **Student Dashboard**: A personalized hub to track study streaks, quizzes passed, and recently viewed modules.
- 🎨 **Premium UI/UX**: A dark-mode, glassmorphic interface built entirely with custom Tailwind CSS utility classes.

## 🛠️ Technology Stack

- **Backend Framework:** Laravel 11.x (PHP)
- **Frontend Styling:** Tailwind CSS (via Vite pipeline)
- **3D/AR Engine:** `<model-viewer>` (Google)
- **Architecture:** Blade Templating Engine

## 📂 Project Structure (Frontend Views)

The frontend prototype is fully structured and modularized. The key views can be found in `resources/views/`:

- `welcome.blade.php`: The main landing page featuring multi-section scrolling and a holographic background.
- `anatomy.blade.php`: The core 3D explorer workspace with dynamic JavaScript sidebars for module switching.
- `dashboard.blade.php`: The authenticated user's home hub for tracking progress.
- `profile.blade.php`: User settings interface with interactive tabs for Personal Details, Security, and Preferences.
- `quiz.blade.php`: The interactive assessment UI.
- `contact.blade.php`: A split-layout contact form wired up to a Laravel Mailable.
- `auth/*`: Custom glassmorphic views for Login, Register, and Password Reset.

## ⚙️ Installation & Setup

To run MedixAR locally on your machine, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Gomit-Dev/mediXar.git
   cd mediXar/app
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

3. **Install & Compile Frontend Assets:**
   ```bash
   npm install
   npm run build
   ```

4. **Environment Configuration:**
   Copy the example `.env` file and generate an application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *(Make sure to configure your `DB_*` and `MAIL_*` credentials in the `.env` file).*

5. **Run the Development Server:**
   ```bash
   php artisan serve
   ```
   Navigate to `http://127.0.0.1:8000` in your browser.

## ⚠️ Notes on 3D Assets

By default, the anatomy module uses placeholder `.glb` models for demonstration purposes. To add your own high-fidelity medical models:
1. Download or export your 3D models in the `.glb` format.
2. Place the files in the `public/models/` directory.
3. Update the `anatomyData` array at the bottom of `resources/views/anatomy.blade.php` to point to your new file names.

## 👨‍💻 Developer

Developed by **[Gomit-Dev](https://github.com/Gomit-Dev)**.

*This project is currently in active development. The frontend UI prototype is complete, and backend controller/database logic is currently being implemented.*
