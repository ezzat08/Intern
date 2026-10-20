# Git Branch Workflow

## Shared Branches

- **`main`** — Contains the stable, complete system.
- **`development`** — Contains ongoing development work and integrated changes for testing.

## Individual Branches

Each team member has a dedicated branch for their assigned area:

- **`architecture-alia`** — Alia: Architecture design.
- **`theme-icam`** — Icam: Theme design and development.
- **`backend-zat`** — Ezzat: Backend development.

## Workflow

1. **Work on individual branches.** Each team member makes changes within their assigned branch.
2. **Push changes to GitHub.** Once ready, push the commits to the corresponding individual branch.
3. **Review the changes.** Check that the changes work correctly and do not introduce issues.
4. **Create a Pull Request (PR).** When the changes are ready, create a PR targeting the `development` branch.
5. **Merge into development.** After review and approval, merge the PR into `development` for integration and testing.
6. **Release to main.** Once the integrated system has been tested and is stable, merge `development` into `main`.

## Branch Flow

```text
architecture-alia ──┐
theme-icam ─────────┼──> development ──> main
backend-zat ────────┘
```

## Important Notes

- Do not commit unfinished or untested changes directly to `main`.
- Keep individual branches focused on their assigned responsibilities.
- Pull the latest changes from `development` regularly to reduce integration conflicts.
- A successful push only uploads changes to GitHub; it does not merge them into `development`.
- Use Pull Requests to review and integrate changes before merging.
