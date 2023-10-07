<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" href="./style.css">
    <title>letest & product | abhi arts and gifts</title>
</head>

<body>



    <section class="head-lable">
        <?php
    
             include "header.php";

             ?>

        <div class="heading-text side-padding">
            <h1><span> Letest Products</span></h1>
            <hr>
        </div>


    </section>


    <section class="product-info side-padding">


        <div class="product-view">
            <div class="main-image">
                <img id="mainImage" src="./img/big-image.png" alt="Main Image">
            </div>
            <div class="small-images">
                <img class="small-image" src="./img/small-image-2.png" alt="Small Image 1">
                <img class="small-image" src="./img/small-image-3.png" alt="Small Image 2">
                <img class="small-image" src="./img/small-image-4.png" alt="Small Image 3">
                <img class="small-image" src="./img/small-image-5.png" alt="Small Image 4">
                <img class="small-image" src="./img/small-image.png" alt="Small Image 5">
            </div>
        </div>
        <div class="right-product-details">
            <h1>Product Name </h1>
            <img src="./img/starrrrr.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean facilisis aliquet odio, sit amet rutrum
                magna. Duis cursus leo in condimentum cursus. Etiam vitae interdum ex, suscipit aliquam erat.</p>

            <li>α9 Gen5 AI Processor with AI Picture Pro & AI 4K Upscaling</li>
            <li>Pixel Dimming, Perfect Black, 100% Color Fidelity & Color Volume</li>
            <li>Hands-free Voice Control, Always Ready</li>
            <li>Dolby Vision IQ with Precision Detail, Dolby Atmos, Filmmaker Mode</li>
            <li class="last-li">Eye Comfort Display: Low-Blue Light, Flicker-Free</li>


            <div class="accounting-box">
                <div class="price-quantity">

                    <div class="price-p">
                        <h6>USD(incl. of all taxes)</h6>
                        <div class="disc-price">
                            <span class="discounted-price"> $600.72</span>
                            <del>$800.00</del>
                        </div>

                    </div>
                    <div class="quantity-box">
                        <div class="quantity">
                            <button class="decrement"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_65_1097)">
                                        <path d="M5 12H19" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_65_1097">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></button>
                            <input id="quantityInput" type="number" value="1" min="1" max="1000">
                            <button class="increment"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_65_1100)">
                                        <path d="M12 5V19" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M5 12H19" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_65_1100">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></button>
                        </div>





                    </div>




                </div>

                <div class="buy-and-add">

                    <a href="#">Buy Now <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            viewBox="0 0 22 22" fill="none">
                            <path
                                d="M11.0001 17.4167C10.8181 17.4178 10.6398 17.3646 10.4881 17.2639C10.3363 17.1633 10.218 17.0197 10.1482 16.8516C10.0784 16.6834 10.0602 16.4983 10.096 16.3197C10.1318 16.1412 10.22 15.9774 10.3493 15.8492L15.2076 11L10.3493 6.15086C10.1991 5.9755 10.1206 5.74993 10.1296 5.51923C10.1385 5.28852 10.2341 5.06968 10.3974 4.90643C10.5606 4.74317 10.7795 4.64753 11.0102 4.63862C11.2409 4.62971 11.4664 4.70818 11.6418 4.85836L17.1418 10.3584C17.3125 10.5301 17.4083 10.7624 17.4083 11.0046C17.4083 11.2468 17.3125 11.4791 17.1418 11.6509L11.6418 17.1509C11.4711 17.3202 11.2406 17.4157 11.0001 17.4167Z"
                                fill="white" />
                            <path
                                d="M5.50012 17.4167C5.31805 17.4177 5.13979 17.3645 4.98806 17.2639C4.83633 17.1632 4.71802 17.0197 4.6482 16.8515C4.57838 16.6834 4.56022 16.4982 4.59603 16.3197C4.63185 16.1412 4.72001 15.9774 4.84929 15.8492L9.70762 11L4.84929 6.15084C4.67668 5.97823 4.57971 5.74412 4.57971 5.50001C4.57971 5.2559 4.67668 5.02179 4.84929 4.84917C5.0219 4.67656 5.25601 4.57959 5.50012 4.57959C5.74423 4.57959 5.97834 4.67656 6.15096 4.84917L11.651 10.3492C11.8217 10.5209 11.9175 10.7533 11.9175 10.9954C11.9175 11.2376 11.8217 11.4699 11.651 11.6417L6.15096 17.1417C6.06606 17.2283 5.96482 17.2972 5.8531 17.3444C5.74138 17.3916 5.6214 17.4162 5.50012 17.4167Z"
                                fill="white" />
                        </svg></a>

                    <button class="add-to-cart">
                        Add To Cart
                    </button>
                </div>


            </div>



        </div>


















    </section>


    <section class="related-products side-padding">
        <div class="gifting-lable">


            <h1>Related Products</h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper facilisis lacus, ut lacinia sem
                fermentum <br> vitae. ut lacinia sem fermentum vitae.</p>



        </div>

        <div class="gifting-products">


            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>










            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>
            <div class="product-box-card">
                <img src="./img/product-img.png" alt="">

                <a href="./gifting-product-2.php">
                    <div class="layers">

                    </div>
                </a>
                <div class="p-content">
                    <p>Diary,Pen,Visiting Card, Keychain Combo Sets</p>
                    <div class="social-icons">
                        <img src="./img/heart.png" alt="">
                        <img src="./img/wh.png" alt="">

                    </div>





                </div>



            </div>







        </div>
        <div class="load-more-btn">
            <a href="#">Load More <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                    fill="none">
                    <path
                        d="M11.0001 17.4167C10.8181 17.4178 10.6398 17.3646 10.4881 17.2639C10.3363 17.1633 10.218 17.0197 10.1482 16.8516C10.0784 16.6834 10.0602 16.4983 10.096 16.3197C10.1318 16.1412 10.22 15.9774 10.3493 15.8492L15.2076 11L10.3493 6.15086C10.1991 5.9755 10.1206 5.74993 10.1296 5.51923C10.1385 5.28852 10.2341 5.06968 10.3974 4.90643C10.5606 4.74317 10.7795 4.64753 11.0102 4.63862C11.2409 4.62971 11.4664 4.70818 11.6418 4.85836L17.1418 10.3584C17.3125 10.5301 17.4083 10.7624 17.4083 11.0046C17.4083 11.2468 17.3125 11.4791 17.1418 11.6509L11.6418 17.1509C11.4711 17.3202 11.2406 17.4157 11.0001 17.4167Z"
                        fill="#B98A34" />
                    <path
                        d="M5.50012 17.4167C5.31805 17.4177 5.13979 17.3645 4.98806 17.2639C4.83633 17.1632 4.71802 17.0197 4.6482 16.8515C4.57838 16.6834 4.56022 16.4982 4.59603 16.3197C4.63185 16.1412 4.72001 15.9774 4.84929 15.8492L9.70762 11L4.84929 6.15084C4.67668 5.97823 4.57971 5.74412 4.57971 5.50001C4.57971 5.2559 4.67668 5.02179 4.84929 4.84917C5.0219 4.67656 5.25601 4.57959 5.50012 4.57959C5.74423 4.57959 5.97834 4.67656 6.15096 4.84917L11.651 10.3492C11.8217 10.5209 11.9175 10.7533 11.9175 10.9954C11.9175 11.2376 11.8217 11.4699 11.651 11.6417L6.15096 17.1417C6.06606 17.2283 5.96482 17.2972 5.8531 17.3444C5.74138 17.3916 5.6214 17.4162 5.50012 17.4167Z"
                        fill="#B98A34" />
                </svg></a>
        </div>









    </section>
    <?php
    
    include "contact-section.php";

    ?>


    <?php
    
    include "footer.php";

    ?>

    <script>
        // script.js
        document.addEventListener("DOMContentLoaded", function () {
            const mainImage = document.getElementById("mainImage");
            const smallImages = document.querySelectorAll(".small-image");

            // Add click event listeners to each small image
            smallImages.forEach(function (smallImage) {
                smallImage.addEventListener("click", function () {
                    // Replace the main image with the clicked small image
                    mainImage.src = smallImage.src;

                    // Remove the 'active' class from all small images
                    smallImages.forEach(function (image) {
                        image.classList.remove("active");
                    });

                    // Add the 'active' class to the clicked small image
                    smallImage.classList.add("active");
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function () {
            const decrementButton = document.querySelector(".decrement");
            const incrementButton = document.querySelector(".increment");
            const quantityInput = document.querySelector("#quantityInput");

            decrementButton.addEventListener("click", function () {
                const currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            incrementButton.addEventListener("click", function () {
                const currentValue = parseInt(quantityInput.value);
                if (currentValue < 10) {
                    quantityInput.value = currentValue + 1;
                }
            });
        });










    </script>
</body>

</html>