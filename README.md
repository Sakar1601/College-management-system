<h1 align="center"><img src="docs/images/banner.svg" alt="College Management System: PHP and MySQL college management web app."></h1>

> PHP and MySQL web app for managing college students, faculty, attendance and posts.

![License](https://img.shields.io/badge/license-unspecified-lightgrey) ![Status](https://img.shields.io/badge/status-archived-lightgrey)

## Overview

A multi-role college management system with separate admin, faculty and student areas. It is a legacy academic project kept for reference.

## Features

- Role-based areas: `admin/`, `faculty/`, `student/`
- Student and faculty records, including photos
- Attendance entry, including CSV/Excel import
- Posts/announcements and electives
- Password reset flow

## Tech stack

| Area     | Tools             |
| -------- | ----------------- |
| Backend  | PHP (mysqli)      |
| Database | MySQL             |
| Frontend | HTML, CSS         |

## Getting started

### Prerequisites

- PHP 7.4+ with the `mysqli` extension, MySQL/MariaDB, and Apache (XAMPP/MAMP works)

### Installation

1. Clone the repo and place `Collage_managment_system-master/` in your web root (e.g. `htdocs/`).
2. Create a MySQL database and import the schema/data you have for it (no schema file is included).
3. Update the database host, user, password and name where `mysqli_connect(...)` is called.
4. Open `http://localhost/Collage_managment_system-master/`.

## Project structure

```
Collage_managment_system-master/
  admin/ faculty/ student/   Role-specific pages
  forgotpassword/ post/      Auth recovery and announcements
  css/ images/               Assets
  index.php                  Login entry point
```

## Status

Legacy / archived-in-spirit: kept for reference, not under active development. No CI is configured and dependencies are not updated; do not deploy as-is.

## Security

See [SECURITY.md](SECURITY.md). Database credentials are hard-coded in the legacy code; do not deploy this publicly as-is.

## License

No license has been specified yet; the project origin is unclear, so no license is granted by default.
