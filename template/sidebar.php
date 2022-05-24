<?php require_once 'core/auth.php'?>
<?php include 'template/header.php'?>

<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
    <div class="d-flex justify-content-between align-items-center py-2 mt-3 nav-brand">
        <div class="d-flex align-items-center">
                    <span class="bg-primary p-2 rounded d-flex justify-content-center align-items-center mr-2">
                        <i class="feather-shopping-bag text-white h4 mb-0"></i>
                    </span>
            <span class="font-weight-bolder h4 mb-0 text-uppercase text-primary">My Shop</span>
        </div>
        <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
            <i class="feather-x text-primary" style="font-size: 2em;"></i>
        </button>
    </div>
    <div class="nav-menu">
        <ul>
            <li class="menu-item">
                <a href="<?php echo $url; ?>/dashboard.php" class="menu-item-link ">
                    <span>
                        <i class="feather-home"></i>
                        Dashboard
                    </span>
                </a>
            </li>

            <li class="menu-title">
                <span>Category</span>
            </li>

            <li class="menu-item">
                <a href="<?php echo $url; ?>/category_add.php" class="menu-item-link">
                    <span>
                        <i class="feather-plus-circle"></i>
                        Add category
                    </span>
                </a>
            </li>

            <li class="menu-spacer"></li>

            <li class="menu-item">
                <a href="<?php echo $url; ?>/logout.php" class="btn btn-outline-danger w-100">
                    <span>
                        <i class="feather-lock"></i>
                        Logout
                    </span>
                </a>
            </li>
<!---->
<!--            <li class="menu-item">-->
<!--                <a href="--><?php //echo $url; ?><!--/category_list.php" class="menu-item-link">-->
<!--                    <span>-->
<!--                        <i class="feather-list"></i>-->
<!--                        Item List-->
<!--                    </span>-->
<!--                    <span class="badge badge-pill bg-white shadow-sm text-primary p-1">12</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="menu-spacer"></li>-->
<!---->
<!--            <li class="menu-title">-->
<!--                <span>Category</span>-->
<!--            </li>-->
<!--            -->
<!--            <li class="menu-item">-->
<!--                <a href="--><?php //echo $url; ?><!--/category_create.php" class="menu-item-link">-->
<!--                    <span>-->
<!--                        <i class="feather-plus-circle"></i>-->
<!--                        Category Create-->
<!--                    </span>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--            <li class="menu-item">-->
<!--                <a href="--><?php //echo $url; ?><!--/category_list.php" class="menu-item-link">-->
<!--                    <span>-->
<!--                        <i class="feather-list"></i>-->
<!--                        Category Lists-->
<!--                    </span>-->
<!--                    <span class="badge badge-pill bg-white shadow-sm text-primary p-1">12</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="menu-spacer"></li>-->




        </ul>

    </div>
</div>

<?php include "template/footer.php" ?>