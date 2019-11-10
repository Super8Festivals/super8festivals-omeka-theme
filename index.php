<?php echo head(array(
    'title' => 'Home'
)); ?>

<?php
$isPluginActive = plugin_is_active("SuperEightFestivals");
?>

<!--Navbar-->
<?php echo $this->partial('_partials/nav-top.php'); ?>

<!--Box-->
<?= $this->partial('_partials/home/box.php'); ?>

<!--World (Map)-->
<?= $this->partial('_partials/home/world.php'); ?>

<!--Federation-->
<?= $this->partial('_partials/home/federation.php'); ?>

<!--Filmmakers-->
<?= $this->partial('_partials/home/filmmakers.php'); ?>


<script>
    $(document).ready(() => {
        window.scrollTo(0, 0);
        let prevSection = $('section').first().attr('previous');
        let currentSection = "#" + $('section').first().attr('id');
        let nextSection = $('section').first().attr('next');
        // console.log(`Prev: ${prevSection} | Current: ${currentSection} | Next: ${nextSection}`);
        // capture mouse scroll
        $('body').on('mousewheel DOMMouseScroll', function (e) {
            if (typeof e.originalEvent.detail == 'number' && e.originalEvent.detail !== 0) {
                if (e.originalEvent.detail > 0) {
                    onScrollDown();
                } else if (e.originalEvent.detail < 0) {
                    onScrollUp();
                }
            } else if (typeof e.originalEvent.wheelDelta == 'number') {
                if (e.originalEvent.wheelDelta < 0) {
                    onScrollDown();
                } else if (e.originalEvent.wheelDelta > 0) {
                    onScrollUp();
                }
            }
        });
        // capture anchor click
        $('a.previous').click((event) => {
            event.preventDefault();
            const {target} = event;
            if (target === undefined) return;
            const parent = $(target).closest("section");
            if (parent === undefined) return;
            changeSection(parent.attr('previous'));
        });
        $('a.next').click((event) => {
            event.preventDefault();
            const {target} = event;
            if (target === undefined) return;
            const parent = $(target).closest("section");
            if (parent === undefined) return;
            changeSection(parent.attr('next'));
        });
        changeSection = (elemID) => {
            if (elemID === undefined) return;
            scrollIntoView(elemID);
            update(elemID);
        };
        update = (setionElementID) => {
            prevSection = $(setionElementID).attr('previous');
            currentSection = "#" + $(setionElementID).attr('id');
            nextSection = $(setionElementID).attr('next');
        };
        onScrollUp = () => {
            if (prevSection === undefined) return;
            changeSection(prevSection);
        };
        onScrollDown = () => {
            if (nextSection === undefined) return;
            changeSection(nextSection);
        };
        scrollIntoView = (elemID, duration = 10) => {
            $([document.documentElement, document.body]).animate({
                scrollTop: $(elemID).offset().top
            }, duration);
        }
    });
</script>

<script>
    $(document).ready(() => {
        $(document).scroll(() => {
            let elementTarget = document.getElementById("box");
            let nav = $('.simple-nav-top');
            if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight) - 50) {
                if (!nav.hasClass('sticky')) nav.addClass('sticky');
            } else {
                if (nav.hasClass('sticky')) nav.removeClass('sticky');
            }
        });
    });
</script>

<?php echo foot(); ?>
