<?php
function getUrlParts()
{
    $currentURL = current_url();
    return array_filter(explode("/", $currentURL), function ($part) {
        return !empty($part);
    });
}

function constructURLTrail($parts, $part)
{
    $result = "";
    $idxOfPart = array_search($part, $parts);
    foreach ($parts as $index => $value) {
        if ($index <= $idxOfPart) {
            $result .= "/" . $value;
        }
    }
    return $result;
}

?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class='breadcrumb-item'><a href='/'>Home</a></li>
        <?php foreach ($parts = getUrlParts() as $part): ?>
            <li class="breadcrumb-item">
                <?php if ($part == end($parts)): ?>
                    <span class='text-capitalize text-muted'><?= ucwords(urldecode($part)); ?></span>
                <?php else: ?>
                    <a href="<?= constructURLTrail($parts, $part); ?>"><?= ucwords(urldecode($part)); ?></a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</nav>