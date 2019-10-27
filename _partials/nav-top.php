<div class="nav-top">
    <div class="container headers">
        <!-- Row 1 -->
        <div class="row">
            <!-- Title -->
            <div class="col vertical-align">
                <h1 class="nav-brand">
                    <img src="<?php echo src('logo.png', 'images/'); ?>" class="logo" alt="Super 8 Festivals">
                </h1>
            </div>
            <!-- Search -->
            <div class="col vertical-align">
                <div class="input-group search">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="la la-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid links">
        <!-- Row 1 -->
        <div class="row">
            <!-- Title -->
            <div class="col">
                <ul class="nav">
                    <?php foreach ($items as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $item['active'] ? "active" : "" ?>" href="<?php echo $item['href'] ?>"><?php echo $item['title']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>