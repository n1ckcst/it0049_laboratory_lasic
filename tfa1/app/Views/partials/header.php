<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Prevent search engine indexing -->
    <meta name="robots" content="noindex, nofollow">

    <title><?= $title; ?> | POS System</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <aside class="sidebar">

        <a href="<?= base_url('/'); ?>" class="sidebar-logo">
            POS SYSTEM
        </a>

        <nav class="sidebar-links">
            <a href="<?= base_url('/'); ?>">
                <img src="public/images/icons/home.svg" alt="">
                </svg>

                <span>Home</span>
            </a>
            <a href="<?= base_url('users'); ?>">
                <img src="public/images/icons/users.svg" alt="">
                <span>Users</span>
            </a>
            <a href="<?= base_url('customers'); ?>">
                <img src="public/images/icons/customers.svg" alt="">
                <span>Customers</span>
            </a>
            <a href="<?= base_url('about'); ?>">
                <img src="public/images/icons/about.svg" alt="">
                <span>About</span>
            </a>
        </nav>

    </aside>

    <main class="main-content">