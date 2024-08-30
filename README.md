# 21st.digital

Welcome to the GitHub repository for the 21st digital website! Our aim is to transform our company's online presence with a sleek, modern, and responsive website that reflects our expertise in digital solutions.

## Table of Contents

- [Git LFS](#git-lfs)
- [Git Automation](#git-automation)

## Git LFS

This repository uses Git Large File Storage (LFS) for managing large files in the `public/assets` directory. The `git lfs` extension is required to handle these files properly.

### Installing Git LFS

To install Git LFS, visit [https://git-lfs.com/](https://git-lfs.com/) for detailed instructions. For macOS users, it is recommended to install Git LFS via Homebrew:

```bash
brew install git-lfs
```

### Setting Up Git LFS

After installation, you need to set up Git LFS for your user account:

```bash
git lfs install
```

This setup only needs to be done once per user account.

## Git Automation

It might be necessary to push content changes from a staging or production server back to the Git repository. This mechanism is enabled by Laravel's scheduling system via cron jobs. An appropriate task has already been defined in `routes/console.php`:

```php
Schedule::command('statamic:git:commit')
    ->everyTenMinutes();
```

Additionally some [environment variables](#local-environment) have to be set and a [cron job](#cron-job-setup) to execute the scheduler has to be installed.

### Local Environment

It is important to disable the automatic git commit functionality. The best way for the local environment is to disable the git functionality completely:

| Variable                     | Description                                              |
| ---------------------------- | -------------------------------------------------------- |
| `STATAMIC_GIT_ENABLED=false` | Disable Statamic's git system for the local environment. |

This is also the default value so it might not be necessary to explicitely set this variable locally.

### Server Environment

The following environment variables have to be set on production or staging servers:

| Variable                       | Description                                                                                                           |
| ------------------------------ | --------------------------------------------------------------------------------------------------------------------- |
| `STATAMIC_GIT_ENABLED=true`    | Enable Statamic's git system.                                                                                         |
| `STATAMIC_GIT_AUTOMATIC=false` | Disable the automatic commit functionality. This allows us to consolidate multiple commit messages into a single one. |
| `STATAMIC_GIT_PUSH=true`       | Automatically push changes to the repository after a commit has been made.                                            |

### Cron job setup

A cron job has to be set up on the production/staging server to automatically run the scheduled tasks:

```
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

Further information can be found in [Laravel's Scheduling documentation](https://laravel.com/docs/11.x/scheduling#running-the-scheduler).

### Handle commits from server

The Git setup for production/environment servers collects multiple commits and combines them into a single one. Therefore a generic Git user and email is used (see `config/git.php`). The consolidated commit message from the server starts with the string `chore(cms):`. This can be used in different workflows to enable/disable steps. A common example is the auto deployment feature on services like Laravel Forge:

```
if [[ $FORGE_DEPLOY_MESSAGE =~ ^chore\(cms\): ]]; then
    echo "AUTO-COMMITTED ON PRODUCTION. NOTHING TO DEPLOY."
    exit 0
fi
```

This can also be used in github workflows to skip actions or do specific operations.
