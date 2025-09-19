# AI Project Starter Kit - Help Guide

This guide explains how to use the AI Project Starter Kit to bootstrap new projects with a standardized architecture and a universal protocol for AI agent collaboration.

## What is this Kit?

This repository contains a set of templates and a protocol manifest (`AICONNECT.md`). When you add this kit to a new project, it gives any AI agent a "one-word" command (`connect`) to instantly understand the project's rules, architecture, and core files. It provides a robust foundation for any new PHP/MySQL project, saving setup time and ensuring consistency.

## How to Use the Starter Kit

### For a Brand New Project

1.  **Download or Clone**: Download the contents of this repository and place them in the root directory of your new project. Your project should now have a `connect` folder.

2.  **Run the "connect" Command**: Start your conversation with your AI agent and simply say the word `connect`.

3.  **Follow Agent Instructions**: The agent will detect that this is a new project and will give you a clear instruction:
    > "This appears to be a new project. To bootstrap it with the standard architecture and protocols, please copy all the files from the `connect/templates/` directory into the project root (`/`)."

4.  **Copy the Template Files**: Copy the files from `connect/templates/` into your main project folder. You will now have:
    *   `sitestrategy.md`
    *   `README.md`
    *   `db_config.php`
    *   `db_init.php`
    *   `db_helper.php`

5.  **Configure the Database**:
    *   Open `db_config.php` and enter your local database credentials (specifically, the `DB_NAME`).
    *   Create an empty database with that name in your MySQL admin tool (e.g., HeidiSQL, phpMyAdmin).
    *   Visit `db_init.php` in your browser **once** to create the necessary tables.

6.  **Run `connect` Again**: Tell your agent `connect` one more time. It will now recognize the project as "existing" and will read your new `sitestrategy.md` to learn the rules.

Your new project is now fully set up and your AI agent is fully synced.

## What's Inside the Kit?

-   **`AICONNECT.md`**: The master "manifest" file. This is the only file the AI agent needs to read to understand how to proceed with either a new or existing project.

-   **`templates/`**: This folder contains the boilerplate files for a new project.
    -   **`sitestrategy.template.md`**: The project's "brain." This is where you will define goals, architecture, and your own specific rules. It comes pre-filled with the mandatory **Agent Collaboration Protocol**.
    -   **`README.template.md`**: A standard README file for you to fill out.
    -   **`db_config.php`**: A secure, environment-aware file for your database credentials.
    -   **`db_init.php`**: A one-time script to create your database tables.
    -   **`db_helper.php`**: A centralized library for all your database functions.
