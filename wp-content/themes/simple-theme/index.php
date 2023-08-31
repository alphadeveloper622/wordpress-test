<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php echo get_bloginfo('name'); ?></title>
</head>
<body>
    <header class="common header">
    </header>

    <main>
        <section class="hero">
            <div style="width: 50%;">
                <img class="girl" src="<?php echo get_template_directory_uri(); ?>/assets/photo.jpg" alt="Girls">
            </div>
            <div class="" style="width: 50%;flex-direction: column;width: 50%; display: flex;justify-content: center;padding: 0 101px;">
                <div class="headTitle">Need assistance settling in Canada?</div>
                <div class="middleText">CCS is a non-profit that empowers immigrants and refugees of all religions, ethnicities, countries of origin, immigration status, sexual orientation, or political affiliation to succeed in Canada.</div>
                <div class="button">Learn more<svg class="svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Icon" d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                    </svg></div>
            </div>
        </section>
        <section class="common" style="height:500px;">
            
        </section>
    </main>

    <footer class="vertical" style="height:100px">
        <p style="margin:0 auto">&copy; 2023 My Test Web Page. All rights reserved.</p>
    </footer>
</body>
</html>
