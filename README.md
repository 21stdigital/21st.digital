<h1 align="center">
  <br>
  <a href="https://21st.digital">
    <img src="resources/svg/21st-digital-logo.svg#gh-light-mode-only" alt="21st digital" width="250">
  </a>
</h1>

<h4 align="center">We love to create digital products</h4>

<p align="center">
  <a href="https://github.com/21stdigital/21st.digital/releases">
    <img src="https://img.shields.io/github/v/release/21stdigital/21st.digital?include_prereleases" alt="Latest Release">
  </a>
  <a href="https://github.com/21stdigital/21st.digital/issues">
    <img src="https://img.shields.io/github/issues/21stdigital/21st.digital" alt="Issues">
  </a>
</p>

## About 21st digital

21st digital is your partner for developing innovative digital products. We are more than just software developers – we are your allies in navigating the journey of digital transformation. We challenge the status quo, optimize processes, and implement the right strategies to ensure not only the success of digital products but also the transformation of entire business models.

## Project Overview

This repository contains the source code for the 21st digital company website. The site is powered by [Statamic CMS](https://statamic.com/), a flat-file content management system that provides a flexible, user-friendly interface for managing website content.

## Features

- **Statamic CMS**: Utilizes a modern, flat-file CMS that doesn't rely on databases, offering speed and security.
- **Custom Design**: Features a tailored design that reflects our brand's identity and values.
- **Responsive Layout**: Optimized for all devices, ensuring a seamless experience across desktops, tablets, and smartphones.
- **SEO Optimized**: Built with best practices in mind to achieve high search engine rankings.

## Requirements

To run this project, ensure your local environment meets the following requirements:

- **PHP**: Version 8.3 or higher, for compatibility with the latest features and security updates.
- **Composer**: Version 2.0 or higher, to manage PHP dependencies effectively.
- **Node.js** and **NPM**: Latest stable versions, to handle frontend dependencies and build processes.
- **Git LFS**: [Git Large File Storage](https://git-lfs.github.com/) must be installed to handle large media and asset files efficiently.

Make sure all dependencies are installed and properly configured before proceeding with the setup. This ensures a smooth development and deployment process.

## Getting Started

Before setting up the project, ensure you have all the necessary requirements listed in the [Requirements](#requirements) section. Follow these steps to set up the project locally:

To set up the project locally, follow these steps:

1. **Clone the repository:**

   Use the following command to clone the repository to your local machine:

```bash
 git clone https://github.com/21stdigital/21st.digital.git
 cd 21st.digital
```

2. **Install Dependencies:**

   Make sure PHP, NPM, and Composer are installed. Then, install the required dependencies by running:

```bash
  composer install
  npm install
```

3. **Set Up Environment Variables:**

   Copy the example environment file to a new .env file and modify it according to your local setup:

```bash
 cp .env.example .env
```

4. **Run Local Server:**

   Start the Statamic local development server using the command below:

```bash
php please serve
```

Visit http://localhost:8000 in your browser to view the website.

## Environment Configuration

The `.env` file is crucial for configuring the environment settings for your application. Below are tables describing each environment setting, grouped by category to help you configure your setup accurately.

### Application Settings

| **Setting**           | **Description**                                             | **Possible Values / Examples**              |
| --------------------- | ----------------------------------------------------------- | ------------------------------------------- |
| `APP_NAME`            | The name of your application.                               | `21st.digital`                              |
| `APP_ENV`             | The environment the application is running in.              | `local`, `production`, `staging`, `testing` |
| `APP_KEY`             | A 32-character base64 string used for encryption.           | `base64:your_generated_key_here`            |
| `APP_DEBUG`           | Enables or disables debug mode.                             | `true`, `false`                             |
| `APP_TIMEZONE`        | The timezone for your application.                          | `Europe/Berlin`                             |
| `APP_URL`             | The base URL of the application.                            | `http://localhost`                          |
| `APP_LOCALE`          | The default language locale of the application.             | `en`, `de`, `fr`                            |
| `APP_FALLBACK_LOCALE` | The locale to use when the current locale is not available. | `en`, `de`                                  |
| `APP_FAKER_LOCALE`    | The locale used by Faker for generating fake data.          | `en_US`, `de_DE`                            |

### Maintenance Mode Settings

| **Setting**              | **Description**                                 | **Possible Values / Examples** |
| ------------------------ | ----------------------------------------------- | ------------------------------ |
| `APP_MAINTENANCE_DRIVER` | The driver used for maintenance mode.           | `file`, `redis`                |
| `APP_MAINTENANCE_STORE`  | The store where maintenance mode data is saved. | `file`, `redis`                |

### Security Settings

| **Setting**     | **Description**                                          | **Possible Values / Examples** |
| --------------- | -------------------------------------------------------- | ------------------------------ |
| `BCRYPT_ROUNDS` | The number of rounds to use for Bcrypt password hashing. | `10`, `12`                     |

### Logging Configuration

| **Setting**                | **Description**                       | **Possible Values / Examples**                                                  |
| -------------------------- | ------------------------------------- | ------------------------------------------------------------------------------- |
| `LOG_CHANNEL`              | The logging channel to use.           | `stack`, `single`, `daily`                                                      |
| `LOG_STACK`                | The type of stack driver for logging. | `single`, `daily`                                                               |
| `LOG_DEPRECATIONS_CHANNEL` | Where to log deprecation warnings.    | `null`, `log`                                                                   |
| `LOG_LEVEL`                | The log level threshold.              | `debug`, `info`, `notice`, `warning`, `error`, `critical`, `alert`, `emergency` |

### Session Configuration

| **Setting**        | **Description**                                                     | **Possible Values / Examples**        |
| ------------------ | ------------------------------------------------------------------- | ------------------------------------- |
| `SESSION_DRIVER`   | The session driver to use.                                          | `file`, `cookie`, `database`, `redis` |
| `SESSION_LIFETIME` | The number of minutes the session should be active before expiring. | `120`, `240`                          |
| `SESSION_ENCRYPT`  | Enables or disables session encryption.                             | `true`, `false`                       |
| `SESSION_PATH`     | The path for which the session is available.                        | `/`, `/app`                           |
| `SESSION_DOMAIN`   | The domain that the session cookie is available to.                 | `null`, `.example.com`                |

### Cache and Queue Configuration

| **Setting**            | **Description**                     | **Possible Values / Examples** |
| ---------------------- | ----------------------------------- | ------------------------------ |
| `BROADCAST_CONNECTION` | The broadcast connection to use.    | `log`, `pusher`, `redis`       |
| `FILESYSTEM_DISK`      | The default filesystem disk to use. | `local`, `public`, `s3`        |
| `QUEUE_CONNECTION`     | The queue connection to use.        | `sync`, `database`, `redis`    |
| `CACHE_STORE`          | The cache store to use.             | `file`, `redis`                |
| `CACHE_PREFIX`         | The prefix to use for cache keys.   | `your_prefix_`                 |

### Redis Configuration

| **Setting**      | **Description**                        | **Possible Values / Examples** |
| ---------------- | -------------------------------------- | ------------------------------ |
| `MEMCACHED_HOST` | The host for the Memcached connection. | `127.0.0.1`                    |
| `REDIS_CLIENT`   | The Redis client to use.               | `phpredis`, `predis`           |
| `REDIS_HOST`     | The Redis server hostname.             | `127.0.0.1`                    |
| `REDIS_PASSWORD` | The password for the Redis connection. | `null`, `your_password`        |
| `REDIS_PORT`     | The port number for the Redis server.  | `6379`                         |

### Mail Configuration

| **Setting**         | **Description**                                   | **Possible Values / Examples**              |
| ------------------- | ------------------------------------------------- | ------------------------------------------- |
| `MAIL_MAILER`       | The mailer to use for sending emails.             | `smtp`, `sendmail`, `mailgun`, `ses`, `log` |
| `MAIL_HOST`         | The host for the SMTP server.                     | `127.0.0.1`, `smtp.mailtrap.io`             |
| `MAIL_PORT`         | The SMTP server port.                             | `2525`, `587`                               |
| `MAIL_USERNAME`     | The username for the SMTP server.                 | `null`, `your_username`                     |
| `MAIL_PASSWORD`     | The password for the SMTP server.                 | `null`, `your_password`                     |
| `MAIL_ENCRYPTION`   | The encryption protocol for the SMTP connection.  | `tls`, `ssl`, `null`                        |
| `MAIL_FROM_ADDRESS` | The email address to use for sending emails.      | `"hello@example.com"`                       |
| `MAIL_FROM_NAME`    | The name to use for the `From` address in emails. | `"21st.digital"`                            |

### Additional Settings

| **Setting**     | **Description**                                | **Possible Values / Examples** |
| --------------- | ---------------------------------------------- | ------------------------------ |
| `VITE_APP_NAME` | The name of the application for use with Vite. | `"21st.digital"`               |

### Statamic Specific Settings

| **Setting**                        | **Description**                                                 | **Possible Values / Examples** |
| ---------------------------------- | --------------------------------------------------------------- | ------------------------------ |
| `STATAMIC_LICENSE_KEY`             | Your Statamic license key.                                      | `your_statamic_license_key`    |
| `STATAMIC_PRO_ENABLED`             | Enables or disables Statamic Pro features.                      | `true`, `false`                |
| `STATAMIC_STACHE_WATCHER`          | Enables or disables the Stache watcher for auto-updates.        | `true`, `false`                |
| `STATAMIC_STATIC_CACHING_STRATEGY` | The caching strategy to use.                                    | `null`, `full`, `partial`      |
| `STATAMIC_REVISIONS_ENABLED`       | Enables or disables content revisions.                          | `true`, `false`                |
| `STATAMIC_GRAPHQL_ENABLED`         | Enables or disables GraphQL API.                                | `true`, `false`                |
| `STATAMIC_API_ENABLED`             | Enables or disables REST API.                                   | `true`, `false`                |
| `STATAMIC_GIT_ENABLED`             | Enables or disables automatic Git integration.                  | `true`, `false`                |
| `STATAMIC_GIT_AUTOMATIC`           | Enables or disables automatic Git commits for content changes.  | `true`, `false`                |
| `STATAMIC_GIT_PUSH`                | Determines if the system should push Git commits automatically. | `true`, `false`                |
| `STATAMIC_GIT_USER_NAME`           | The Git user name for automated commits.                        | `your_git_username`            |
| `STATAMIC_GIT_USER_EMAIL`          | The Git user email for automated commits.                       | `your_git_email@example.com`   |
| `STATAMIC_OAUTH_ENABLED`           | Enables or disables OAuth for authentication.                   | `true`, `false`                |
| `STATAMIC_EMAIL_LOGIN_ENABLED`     | Enables or disables email login for authentication.             | `true`, `false`                |

### Google OAuth Configuration

| **Setting**            | **Description**                                 | **Possible Values / Examples**          |
| ---------------------- | ----------------------------------------------- | --------------------------------------- |
| `GOOGLE_CLIENT_ID`     | The Client ID provided by Google for OAuth.     | `your_google_client_id`                 |
| `GOOGLE_CLIENT_SECRET` | The Client Secret provided by Google for OAuth. | `your_google_client_secret`             |
| `GOOGLE_REDIRECT_URI`  | The redirect URI after Google authentication.   | `http://localhost/auth/google/callback` |

## Conventional Commits

We follow the [Conventional Commits](https://www.conventionalcommits.org/) specification for our commit messages. This standard helps maintain a readable commit history and generates change logs automatically.

### Commit Message Format

Each commit message should have the following format:

`[optional scope]: [optional body] [optional footer(s)]`

#### Types

The following types are allowed:

- **feat**: A new feature for the user.
- **fix**: A bug fix for the user.
- **docs**: Documentation changes or additions.
- **style**: Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc.).
- **refactor**: A code change that neither fixes a bug nor adds a feature.
- **perf**: A code change that improves performance.
- **test**: Adding or updating tests.
- **build**: Changes that affect the build system or external dependencies (example: `npm`, `composer`).
- **ci**: Changes to our CI configuration files and scripts.
- **chore**: Other changes that don’t modify `src` or `test` files.
- **revert**: Reverts a previous commit.

#### Example Commit Messages

- `feat(auth): add OAuth support for Google and GitHub`
- `fix(api): handle 500 errors gracefully in user endpoint`
- `docs(readme): update installation instructions`

By following these conventions, we ensure that our commit history is easy to understand and navigate. This also helps in automating the release process and generating changelogs.

## Contact

For any inquiries, please contact us at hello@21st.digital.

Thank you for visiting our repository! We hope you find our work inspiring and useful.
