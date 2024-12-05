
# Headless WooCommerce Theme  

A minimal WordPress theme designed for headless WooCommerce applications. This theme serves as a backend-only solution, providing API support without rendering traditional WordPress frontend pages.  

---

## Features  
- Disables default WooCommerce styles and scripts to optimize performance.  
- Supports WooCommerce backend features.  
- Provides REST API access with optional CORS headers.  
- Prevents WordPress from generating frontend templates.  
- Removes unnecessary WordPress metadata for a cleaner and faster backend.  

---

## Installation  

1. Clone or download the repository to your WordPress themes directory:  
   ```bash
   git clone https://github.com/your-username/headless-woocommerce-theme.git wp-content/themes/headless-theme
   ```  

2. Activate the theme in your WordPress admin panel under **Appearance > Themes**.  

3. Configure your front-end application (e.g., React, Next.js, Vue.js) to connect with the WordPress REST API or GraphQL endpoint.  

---

## Configuration  

### REST API Access  
Ensure your WordPress installation allows REST API requests.  
- CORS headers are included by default in this theme.  
- You can customize these headers in the `functions.php` file:  
  ```php
  add_action('rest_api_init', function() {
      header("Access-Control-Allow-Origin: *");
      header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
      header("Access-Control-Allow-Headers: Authorization, Content-Type");
  }, 15);
  ```  

### WooCommerce Integration  
WooCommerce support is enabled automatically by this theme. Make sure WooCommerce is installed and activated on your WordPress site.  

---

## Development  

### File Structure  
```
headless-theme/
├── functions.php       # Contains core theme functionality
├── index.php           # Minimal template file
├── style.css           # Theme metadata and styles
```  

### Customization  
Feel free to modify the `functions.php` file to add or remove features as needed.  

---

## License  
This project is licensed under the MIT License. You are free to use, modify, and distribute it.  

## Contributing  
Pull requests are welcome! For major changes, please open an issue to discuss your ideas first.  

---

## Author  
Created by [Krzysztof Pietryga](https://krzysztof.pietryga.com.pl).  
