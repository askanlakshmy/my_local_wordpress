### Rewrite Rules Added by CyberPanel Rewrite Rule Generator

RewriteEngine On
RewriteCond %{HTTPS}  !=on
RewriteRule ^/?(.*) https://%{SERVER_NAME}/$1 [R,L]

### End CyberPanel Generated Rules.

# BEGIN WordPress
# The directives (lines) between "BEGIN WordPress" and "END WordPress" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

# END WordPress

RedirectPermanent http://globalhearing.in/chiynpjq419051 https://www.globalhearing.in/ [END,R=301]
# END WordPress


# Backup Migration END

