<div class="red-line">
    <h5>Same Day Gift Delivery Available at Surat</h5>
</div>

<header class="side-padding page-width">
    <?php
function isCurrentPage($pageName)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage === $pageName;
}
?>
    <div id="brand"><a href="./index.php"><img src="./img/navlogo.png" alt=""></a></div>
    <nav>
        <ul>
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php" > Home</a>
            </li>
            <li><a <?php if (isCurrentPage('about.php')) echo 'class="active-nav"' ; ?> href="./about.php" >About</a>
            </li>
            <li><a <?php if (isCurrentPage('gifting-product.php')) echo 'class="active-nav"' ; ?>
                    href="./gifting-product.php" >
                    Gifting Products</a></li>
            <li><a <?php if (isCurrentPage('letest-product.php')) echo 'class="active-nav"' ; ?>
                    href="./letest-product.php" >
                    Letest Products</a></li>

            <li><a <?php if (isCurrentPage('blog.php')) echo 'class="active-nav"' ; ?> href="./blog.php" >
                    Blog</a></li>

            <li><a <?php if (isCurrentPage('contact.php')) echo 'class="active-nav"' ; ?> href="./contact.php" >
                    Contact Us</a></li>



        </ul>
    </nav>


    <a class="contact-btn" href="./contact.php">Contact Now <svg xmlns="http://www.w3.org/2000/svg" width="22"
            height="22" viewBox="0 0 22 22" fill="none">
            <path
                d="M11 17.4167C10.8179 17.4177 10.6397 17.3645 10.4879 17.2639C10.3362 17.1632 10.2179 17.0197 10.1481 16.8515C10.0783 16.6834 10.0601 16.4982 10.0959 16.3197C10.1317 16.1412 10.2199 15.9774 10.3492 15.8492L15.2075 11L10.3492 6.15083C10.199 5.97547 10.1205 5.7499 10.1294 5.5192C10.1383 5.28849 10.234 5.06965 10.3972 4.90639C10.5605 4.74314 10.7793 4.6475 11.01 4.63859C11.2407 4.62968 11.4663 4.70815 11.6417 4.85833L17.1417 10.3583C17.3124 10.5301 17.4082 10.7624 17.4082 11.0046C17.4082 11.2467 17.3124 11.4791 17.1417 11.6508L11.6417 17.1508C11.4709 17.3202 11.2405 17.4157 11 17.4167Z"
                fill="white" />
            <path
                d="M5.5 17.4167C5.31793 17.4177 5.13966 17.3645 4.98794 17.2639C4.83621 17.1632 4.7179 17.0197 4.64808 16.8515C4.57826 16.6834 4.5601 16.4982 4.59591 16.3197C4.63173 16.1412 4.71989 15.9774 4.84917 15.8492L9.7075 11L4.84917 6.15084C4.67656 5.97823 4.57958 5.74412 4.57958 5.50001C4.57958 5.2559 4.67656 5.02179 4.84917 4.84917C5.02178 4.67656 5.25589 4.57959 5.5 4.57959C5.74411 4.57959 5.97822 4.67656 6.15083 4.84917L11.6508 10.3492C11.8216 10.5209 11.9174 10.7533 11.9174 10.9954C11.9174 11.2376 11.8216 11.4699 11.6508 11.6417L6.15083 17.1417C6.06594 17.2283 5.9647 17.2972 5.85298 17.3444C5.74126 17.3916 5.62128 17.4162 5.5 17.4167Z"
                fill="white" />
        </svg></a>


    <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php" > Home</a>
            </li>
            <li><a <?php if (isCurrentPage('about.php')) echo 'class="active-nav"' ; ?> href="./about.php" >About</a>
            </li>
            <li><a <?php if (isCurrentPage('gifting-product.php')) echo 'class="active-nav"' ; ?>
                    href="./gifting-product.php" >
                    Gifting Products</a></li>
            <li><a <?php if (isCurrentPage('letest-product.php')) echo 'class="active-nav"' ; ?>
                    href="./letest-product.php" >
                    Letest Products</a></li>

            <li><a <?php if (isCurrentPage('blog.php')) echo 'class="active-nav"' ; ?> href="./blog.php" >
                    Blog</a></li>

            <li><a <?php if (isCurrentPage('contact.php')) echo 'class="active-nav"' ; ?> href="./contact.php" >
                    Contact Us</a></li>

        </ul>
    </div>
</header>
<script>
    function toggleMobileMenu(menu) {
        menu.classList.toggle('open');
    }
</script>