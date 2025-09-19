# [Project Name] - Site Strategy

This living document captures the core product goals, architecture, key calculations, UI settings, and workflow for [Project Name]. Use it to keep features aligned.

## Goals

- [Goal 1: Describe the primary objective of this project.]
- [Goal 2: Describe a secondary objective.]

## Architecture Overview

- **Frontend**: [e.g., HTML, CSS, JavaScript with p5.js]
- **Backend**: [e.g., PHP for file handling]
- **Database**: [e.g., MySQL]
- **Key Libraries**: [e.g., p5.js, Bootstrap]

---

## My Works Styleguide Settings
*(This section is a placeholder for project-specific UI/UX styleguide rules.)*

- [e.g., No rounded buttons.]
- [e.g., Primary color is #007bff.]
- [e.g., All user-facing text must be in Dutch.]

---

## Standard Reusable Architecture: PHP & MySQL Project Foundation
*(This section is boilerplate from the AI Project Starter Kit. It describes the standard `db_config.php`, `db_init.php`, and `db_helper.php` files.)*

The core of this architecture consists of three PHP files, each with a distinct responsibility: `db_config.php`, `db_init.php`, and `db_helper.php`. This pattern should be used to ensure projects are robust, scalable, and faster to develop.

---

## Agent Collaboration Protocol — “working, do not touch”
*(This is a mandatory protocol for all agents working on this project.)*

**Purpose**: Ensure stability and speed by protecting proven entry points while still allowing iterative improvement elsewhere.

### Code marker: `// working, do not touch!`
- This exact tag must be placed immediately above a function declaration that is considered stable and critical.
- Agents must treat this as a protected marker.

### Change Protocol
1.  **Do not change `// working, do not touch!` functions directly.**
2.  If a user reports a bug that requires a change, you must follow this flow:
    -   Add a new comment above the marker: `// faulty BEFORE: <reason>`.
    -   Implement the **minimal possible fix** inside the function.
    -   **Preserve the public contract**: The function's name, arguments, and return value must not change.
    -   Log the change in the `action_log` database.
3.  **Prefer creating new helper functions** over modifying these core entry points.
