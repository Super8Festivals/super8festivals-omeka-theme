<?php echo head(array(
    'title' => 'Home'
)); ?>

<?php
$isPluginActive = plugin_is_active("SuperEightFestivals");
?>

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
        let sections = $('section');
        let prevSection = sections.first().attr('previous');
        let currentSection = "#" + sections.first().attr('id');
        let nextSection = sections.first().attr('next');
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
        // capture keystrokes
        let shiftPressed = false;

        $(document).keyup((e) => {
            switch (e.which) {
                default:
                    return;
                case 16:
                    shiftPressed = false;
                    return;
            }
        });
        $(document).keydown(function (e) {
            switch (e.which) {
                case 16:
                    shiftPressed = true;
                    break;
                case 32:
                    if (shiftPressed) onScrollUp(); else onScrollDown();
                    break;
                case 33: // page up
                case 38: // up
                    onScrollUp();
                    break;
                case 34: // page down
                case 40: // down
                    onScrollDown();
                    break;
                default:
                    return;
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });
        onScrollUp = () => {
            setCurrentSection(prevSection);
        };
        onScrollDown = () => {
            setCurrentSection(nextSection);
        };
        // capture anchor click
        // $('a.section-jump').click((event) => {
        //     changeSection();
        // });
        setCurrentSection = (elemID) => {
            scrollIntoView(elemID);
            update(elemID);
        };
        update = (sectionElementID) => {
            if (sectionElementID === undefined || sectionElementID === "") return;
            const elem = $(sectionElementID);
            prevSection = elem.attr('previous');
            currentSection = "#" + elem.attr('id');
            nextSection = elem.attr('next');
        };
        scrollIntoView = (elemID, duration = 10) => {
            if ($(elemID) === undefined || $(elemID).offset() === undefined) return;
            $([document.documentElement, document.body]).animate({
                scrollTop: $(elemID).offset().top,
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
