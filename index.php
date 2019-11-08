<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('views');

$twig = new \Twig\Environment($loader);

echo $twig->render('view.html', [
    'title' => 'Niagahoster',

    'info'  => array(
        array( 'link' => 'telp', 'text' => '', 'class' => 'telp link-telp', 'icon' => 'call' ),
        array( 'link' => 'javascript: void(0);', 'text' => 'Live Chat', 'class' => '', 'icon' => 'question_answer', 'onclick' => 'jivo_api.open();' ),
        array( 'link' => '#member', 'text' => 'Member Area', 'class' => '', 'icon' => 'account_circle' ),
    ),

    'banner' => array(
        'Solusi PHP untuk performa query yang lebih cepat.',
        'Konsumsi memori yang lebih rendah.',
        'Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.',
        'Fitur enkripsi IonCube dan Zend Guard Loaders.'
    ),

    'php_features' => array(
        array( 'text' => 'PHP Zen Guard Loader', 'image' => 'assets/svg/icon PHP Hosting_zendguard.svg' ),
        array( 'text' => 'PHP Composer', 'image' => 'assets/svg/icon PHP Hosting_composer.svg' ),
        array( 'text' => 'PHP ionCube Loader', 'image' => 'assets/svg/icon PHP Hosting_ioncube.svg' ),
    ),

    'php_limit_info' => array(
        array(
            array( 'text' => 'max execution time 300s' ),
            array( 'text' => 'max execution time 300s' ),
            array( 'text' => 'php memory limit 1024 MB' )
        ),
        array(
            array( 'text' => 'post max size 128 MB' ),
            array( 'text' => 'upload max filesize 128 MB' ),
            array( 'text' => 'max input vars 2500' )
        ),
    ),

    'hosting_packages' => array(
        array( 'title' => 'PHP Semua Versi', 'description' => 'Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!', 'image' => 'assets/svg/icon PHP Hosting_PHP Semua Versi.svg' ),
        array( 'title' => 'MySQL Versi 5.6', 'description' => 'Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.', 'image' => 'assets/svg/icon PHP Hosting_My SQL.svg' ),
        array( 'title' => 'Panel Hosting cPanel', 'description' => 'Kelola website dengan panel canggih yang familiar di hati Anda.', 'image' => 'assets/svg/icon PHP Hosting_CPanel.svg' ),
        array( 'title' => 'Garansi Uptime 99.9', 'description' => 'Data center yang mendukung kelangsungan website Anda 24/7.', 'image' => 'assets/svg/icon PHP Hosting_garansi uptime.svg' ),
        array( 'title' => 'Database InnoDB Unlimited', 'description' => 'Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.', 'image' => 'assets/svg/icon PHP Hosting_InnoDB.svg' ),
        array( 'title' => 'Wildcard Remote MySQL', 'description' => 'Mendukung s/d 25 max_user_connections dan 100 max_connections.', 'image' => 'assets/svg/icon PHP Hosting_My SQL remote.svg' ),
    ),

    'php_modules' => array(
        array(
            'IcePHP',
            'apc',
            'apcu',
            'apm',
            'ares',
            'bcmath',
            'bcompiler',
            'big_int',
            'bitset',
            'bloomy',
            'bz2_filter',
            'clamav',
            'coin_acceptor',
            'crack',
            'dba',
        ),
        array(
            'http',
            'huffman',
            'idn',
            'igbinary',
            'imagick',
            'imap',
            'inclued',
            'inotify',
            'interbase',
            'intl',
            'ioncube_loader',
            'ioncube_loader_4',
            'jsmin',
            'json',
            'ldap',
        ),
        array(
            'nd_pdo_mysql',
            'oauth',
            'oci8',
            'odbc',
            'opcache',
            'pdf',
            'pdo',
            'pdo_dblib',
            'pdo_firebird',
            'pdo_mysql',
            'pdo_odbc',
            'pdo_pgsql',
            'pdo_sqlite',
            'pgsql',
            'phalcon',
        ),
        array(
            'stats',
            'stem',
            'stomp',
            'suhosin',
            'sybase_ct',
            'sysvmsg',
            'sysvsem',
            'sysvshm',
            'tidy',
            'timezonedb',
            'trader',
            'translit',
            'uploadprogress',
            'uri_template',
            'uuid',
        ),
    ),

    'footer' => array(
        array( 'text' => 'Hubungi Kami', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'info' ),
        array( 'text' => 'Layanan', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'layanan' ),
        array( 'text' => 'Service Hosting', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'service' ),
        array( 'text' => 'Tutorial', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'tutorial' ),
        array( 'text' => 'Tentang Kami', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'tentang' ),
        array( 'text' => 'Kenapa Milih Niagahoster', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'why' ),
        array( 'text' => 'Newsletter', 'class' => 'col-12 col-sm-6 order-sm-2 col-lg-6 order-lg-1 col-xl-3 order-xl-1', 'nama' => 'newsletter' ),
        array( 'text' => 'Sosmed', 'class' => 'col-12 col-sm-12 order-sm-3 col-lg-6 order-lg-3 col-xl-3 order-xl-2', 'nama' => 'social_media' ),
        array( 'text' => 'Pembayaran', 'class' => 'col-12 col-sm-6 order-sm-1 col-lg-6 order-lg-2 col-xl-12 order-xl-3', 'nama' => 'payment' ),
    ),

]);