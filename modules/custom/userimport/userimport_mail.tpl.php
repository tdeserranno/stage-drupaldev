<html>
  <head>
    <title><?php print $site_name ?> | <?php print t('Account imported') ?></title>
  </head>
  <body>
    <h3><?php print t('Your account was imported into the %site site.', array('%site' => $site_name)) ?></h3>
    <p><?php print t('Below you will find your new login credentials.') ?></p>
    <p><?php print t('username') ?>: <?php print $username ?></p>
    <p><?php print t('password') ?>: <?php print $password ?></p>
  </body>
</html>