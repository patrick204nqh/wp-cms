# WP-CMS

#### Notes:
- Fix file permissions on wp-content
```
# Inside container
chown -R www-data:www-data [dirname]

# outside container
sudo chown -R $USER [dirname]
```
