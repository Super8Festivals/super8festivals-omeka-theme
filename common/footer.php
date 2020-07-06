</main><!-- end wrap -->


<footer class="page-footer font-small bg-light py-2">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-2 mx-auto order-1 order-md-2 ">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="/submit">Submit Content</a></li>
                    <li><a href="/contact">Email Us</a></li>
                </ul>
            </div>
            <div class="col text-center order-2 order-md-1 ">
                <h5 class="font-weight-bold text-uppercase"><img class="mb-2" src="<?php echo src('logo.png', 'images'); ?>" alt="Super8Festivals" height="24"></h5>
                <a href="/admin">Admin Login</a>

                <p class="small my-2">
                    &copy; <?= date("Y"); ?> Copyright
                    <a href="https://super8festivals.org">Super8Festivals.org</a>
                </p>
                <p class="small my-2">Site designed and developed by <a href="https://michaelgatesdev.github.io">Michael Gates</a></p>
                <p class="small my-2">Super8Festivals.org is in no way officially affiliated with the Super 8 Trademark or its representation.</p>
            </div>
            <div class="col-md-2 d-none d-md-block mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/federation">Federation</a></li>
                    <li><a href="/filmmakers">Filmmakers</a></li>
                    <li><a href="/cities">Cities</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php fire_plugin_hook('public_footer', array('view' => $this)); ?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</body>
</html>
