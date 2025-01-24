# AdsAdmin

AdsAdmin is a PHP-based application designed to streamline and optimize your Google Ads management. It provides advanced tools to compare metrics across your campaigns and offers an intuitive interface for updating keywords, links, and other critical components. With AdsAdmin, managing your Google Ads becomes more efficient and data-driven.

---

## Features

- **Metrics Comparison**: Analyze and compare key performance indicators (KPIs) across multiple Google Ads campaigns.
- **Keyword Optimization**: Simplify the process of updating keywords with performance insights.
- **Link Management**: Easily update and monitor links for ads based on real-time data.
- **Customizable Dashboard**: View your campaign metrics in a user-friendly, customizable interface.
- **Export Options**: Export data insights in formats like CSV or Excel for further analysis.
- **Integration**: Connect directly to your Google Ads account via the Google Ads API.

---

## Installation

Follow these steps to set up AdsAdmin:

### Prerequisites

- PHP 7.4 or later
- MySQL database
- Composer (PHP dependency manager)
- Web server (Apache or Nginx)
- Access to Google Ads API credentials

### Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/adsadmin.git
   ```

2. Navigate to the project directory:
   ```bash
   cd adsadmin
   ```

3. Install dependencies using Composer:
   ```bash
   composer install
   ```

4. Configure the environment variables:
   - Rename `.env.example` to `.env`.
   - Open the `.env` file and add your database details, Google Ads API credentials, and other configurations.

5. Run database migrations to set up tables:
   ```bash
   php artisan migrate
   ```

6. Start the local development server:
   ```bash
   php artisan serve
   ```
   The application will be accessible at `http://localhost:8000`.

---

## Usage

1. Log in to your AdsAdmin account using the credentials created during setup.
2. Connect your Google Ads account using your API credentials.
3. Access the dashboard to view metrics for your campaigns.
4. Use the comparison tools to identify underperforming keywords or ads.
5. Update keywords and links directly through the interface.
6. Export your performance data for detailed analysis.

---

## Technologies Used

- **Backend**: PHP (Laravel Framework)
- **Frontend**: HTML5, CSS3, JavaScript (with optional Vue.js for dynamic components)
- **Database**: MySQL
- **API Integration**: Google Ads API
- **Package Management**: Composer
- **Deployment**: Apache/Nginx with PHP-FPM

---

## Security

- OAuth 2.0 authentication for secure access to Google Ads accounts.
- Sanitized inputs to prevent SQL injection and other vulnerabilities.
- Regular updates to ensure compatibility with the latest Google Ads API versions.

---

## Contributing

We welcome contributions! Here's how you can help:

1. Fork the repository.
2. Create a new branch for your feature or fix:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Make your changes and commit them:
   ```bash
   git commit -m "Add your message here"
   ```
4. Push to your branch:
   ```bash
   git push origin feature/your-feature-name
   ```
5. Open a Pull Request on GitHub.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Contact

For support or inquiries, reach out to us at [support@adsadmin.com](mailto:support@adsadmin.com).

---

### Disclaimer

AdsAdmin is not affiliated with or endorsed by Google. Always verify data accuracy through the Google Ads platform before making critical decisions.
