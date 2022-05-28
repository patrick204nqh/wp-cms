# WP-CMS

#### Notes:
- Fix file permissions on wp-content
```
# inside container
chown -R www-data:www-data [dirname]

# outside container
sudo chown -R $USER [dirname]
```
- Composer install local packages
```
composer require tombenner/wp-mvc:*
composer require patrick204nqh/wpcms-custom-theme:*
composer require patrick204nqh/wpcms-custom-plugin:*

# composer.json
"repositories": [
  {
      "type": "path",
      "url": "$PWD/packages/*",
      "options": {
          "symlink": true
      }
  }
]
```

### WP-CLI commands
```
wp plugin activate [plugin-name]
wp plugin deactivate [plugin-name]
```
