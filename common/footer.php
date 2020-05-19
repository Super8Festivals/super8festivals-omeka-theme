</main><!-- end wrap -->

<footer class="container pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="<?php echo src('logo.png', 'images'); ?>" alt="" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2019-<?= date("Y") ?></small>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="federation">Federation</a></li>
                <li><a class="text-muted" href="federation#history">History</a></li>
                <li><a class="text-muted" href="filmmakers">Filmmakers</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Contact</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="submit">Submit Content</a></li>
                <li><a class="text-muted" href="contact">Email Us</a></li>
            </ul>
        </div>
    </div>
    <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
</footer>

</body>
</html>
