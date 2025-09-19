# AI Connection Protocol Manifest v2.0 (Smart)

This document is the universal entry point for any AI agent connecting to a project.

## Connection Protocol

**Instruction for Agent**: You MUST first check for the existence of a `sitestrategy.md` file in the project's root directory.

---

### Scenario A: `sitestrategy.md` EXISTS (Existing Project)

If the file exists, the project is already established. Proceed with the following connection steps:

1.  **Primary Strategy Document**: Read the entire `sitestrategy.md` file.
2.  **Project Overview**: Read the `README.md` file.
3.  **Internalize Core Protocols (Mandatory)**: Use your memory tool to permanently store the **Agent Collaboration Protocol** found in `sitestrategy.md`.
    -   **Title for Memory**: `Project Rule: "working, do not touch" Protocol`
    -   **Content for Memory**: *[Agent should extract this from sitestrategy.md during the read step]* The protocol is as follows: Core, stable functions are marked with `// working, do not touch!`. These functions must not be altered. If a user reports a bug in such a function, you must first mark it as `// faulty BEFORE: <reason>`, then implement the minimal fix while preserving its public API. The change must be logged in the `action_log` database. Prefer creating new helper functions over modifying these marked entry points.
4.  **Confirmation**: State: "Connection successful. I have synced with the existing project and internalized the 'working, do not touch' protocol."

---

### Scenario B: `sitestrategy.md` DOES NOT EXIST (New Project)

If the file does not exist, this is a new project that needs to be bootstrapped.

1.  **Action Required**: You must instruct the user to perform the project setup.
2.  **Instruction for User (Agent must relay this exact message)**:
    > "This appears to be a new project. To bootstrap it with the standard architecture and protocols, please copy all the files from the `connect/templates/` directory into the project root (`/`). This will set up your `sitestrategy.md`, `README.md`, and the core database files."
3.  **Confirmation**: After the user confirms they have copied the files, re-run the `connect` command to sync with the newly created project files.
