# Ads Manager Admin Panel

The **Ads Manager Admin Panel** is a streamlined and efficient platform designed to help administrators manage ad campaigns, monitor performance, and oversee ad placements. This system is ideal for small to medium-sized businesses looking for a simple solution to manage advertisements.

---

## Features

### 📢 **Ad Management**
- **Create Ads**: Add new advertisements with details like title, description, media, and target audience.
- **Edit & Delete Ads**: Update ad content or remove outdated ads.
- **Schedule Ads**: Set start and end dates for ad campaigns.

### 📊 **Analytics**
- **View Performance**: Track clicks, impressions, and conversions for each ad.
- **Generate Reports**: Export ad performance data in CSV or PDF format.

### 🗂️ **Categories**
- **Organize Ads**: Group ads into categories for better management.
- **Subcategories Support**: Create nested categories for detailed organization.

### 👥 **User Management**
- **Access Control**: Manage admin roles and permissions.
- **Activity Logs**: Track actions taken by admins in the system.

---

## Installation

### Prerequisites
- PHP 8.2+
- Laravel 11
- MySQL
- Composer

### Steps
1. **Clone the repository**:
    ```bash
    git clone https://github.com/sameededitz/ad-manager.git
    ```
2. **Navigate to the project directory**:
    ```bash
    cd ads-manager
    ```
3. **Install dependencies**:
    ```bash
    composer install
    ```
4. **Set up environment variables**:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5. **Run migrations and seeders**:
    ```bash
    php artisan migrate --seed
    ```
6. **Start the server**:
    ```bash
    php artisan serve
    ```

---

## Usage

### Admin Features
- **Manage Ads**: Add, update, and delete ad campaigns.
- **Analytics Dashboard**: View ad performance metrics like CTR and ROI.
- **Category Management**: Organize ads into categories and subcategories.
- **User Roles**: Assign admin roles with specific permissions.

---

## Technologies Used
- **Backend**: Laravel 11
- **Frontend**: Livewire 3, Bootstrap
- **Database**: MySQL
- **File Handling**: Spatie Media Library

---

## Developer Information
- **Developer**: Sameed
- **Instagram**: [@not_sameed52](https://www.instagram.com/not_sameed52/)
- **Discord**: sameededitz
- **Linktree**: [linktr.ee/sameededitz](https://linktr.ee/sameededitz)
- **Company**: TecClubb
  - **Website**: [https://tecclubx.com/](https://tecclubx.com/)
  - **Contact**: tecclubb@gmail.com

---

## Contributing
Contributions are welcome! Fork the repository, create a new branch, and submit a pull request. Open an issue first for major changes.

---

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Contact
For inquiries or support, reach out via:
- **Email**: tecclubb@gmail.com
- **Website**: [https://tecclubb.com/](https://tecclubb.com/)
