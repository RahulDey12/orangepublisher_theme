            <footer>
                <div class="orange-footer">
                    <img class="footer-shape" src="<?php echo get_template_directory_uri() ?>/assets/src/images/footer_shape.png">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-6 col-md">
                                <?php dynamic_sidebar( 'footer-widget-1' ) ?>
                            </div>
                            <div class="col-12 col-sm-6 col-md">
                                <?php dynamic_sidebar( 'footer-widget-2' ) ?>
                            </div>
                            <div class="col-12 col-sm-6 col-md">
                                <?php dynamic_sidebar( 'footer-widget-3' ) ?>
                            </div>
                            <div class="col-12 col-sm-6 col-md">
                                <?php dynamic_sidebar( 'footer-widget-4' ) ?>
                            </div>
                            <div class="col-12 col-sm-6 col-md">
                                <?php dynamic_sidebar( 'footer-widget-5' ) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
        <script src="http://localhost:8080/dist/js/app.js"></script>
    </body>
</html>