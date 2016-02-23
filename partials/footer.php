<?php get_partial('analytics'); ?>

<!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php if ( get('site.scripts') ): ?>
    <?php foreach ( get('site.scripts') as $script ): ?>
        <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<?php if ( get('page.scripts') ): ?>
    <?php foreach ( get('page.scripts') as $script ): ?>
        <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<script>document.addEventListener("DOMContentLoaded",function(){cookieChoices.showCookieConsentBar("<?php echo get('site.company'); ?> uses cookies to give you the best experience.","OK","Learn more","http://www.allaboutcookies.org")});</script>

</body>
</html>
