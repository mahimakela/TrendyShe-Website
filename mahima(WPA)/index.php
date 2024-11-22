<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <script src="java.js"></script>





    <title>TrendyShe</title>
</head>
<body>
   
<header>
    <nav class="navbar">
        <div class="logo"><h1>TrendyShe</h1></div>
        <ul class="menu">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#newArrival" class="newArrival">New arrivals</a></li>
            <li><a href="#Fashion" class="Fashion">Fashion</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="card.php" class="fas fa-shopping-cart"><span class="cart-count"></span></a></li>

        </ul>


        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>

<section class="content">
    <h3>New Arrivals for Women</h3>
    <h1>Get The Best Women Fashion Arrivals</h1><br>
    <h3>Because you deserve to shine, inside and out.</h3><br>
    </section>
    


<h1 class="pheading">Our Latest Products</h1>
    
    <section class="sec" id="newArrival">
        <div class="products">
            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product3.png" alt="Lady TOP"></div>
                <div class="title">Lady TOP</div>
                <h3>OFF white solid top</h3>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'OFF white solid top', price: 50.00, description: 'Product Description'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->
     

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product5.png" alt="Co-ord set"></div>
                <div class="title">Co-ord set</div>
                <h3>Brown trendy Co-ord set</h3>
                <div class="box">
                    <div class="price">$90</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Co-ord set', price: 90.00, description: 'Brown trendy Co-ord set'})"> Add to Cart</button>
            
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product6.png" alt="Shirt"></div>
                <div class="title">Shirt</div>
                <h3>Royalica Women and girl multicolor print fancy Women regular fit shirt</h3>
                <div class="box">
                    <div class="price">$200</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Shirt', price: 100.00, description: 'Royalica Women and girl multicolor print fancy Women regular fit shirt'})"> Add to Cart</button>


                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product7.png" alt="White dress"></div>
                <div class="title">White dress</div>
                <h3>Saniya Women A-line White Dress</h3>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'White dress', price: 50.00, description: 'Saniya Women A-line White Dress'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product8.png" alt="Jumpsuit"></div>
                <div class="title">Jumpsuit</div>
                <h3>High-waisted jumpsuit</h3>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Jumpsuit', price: 50.00, description: 'High-waisted jumpsuit'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product9.png" alt="Generic"></div>
                <div class="title">Generic</div>
                <h3>Women's rayon printed top</h3>
                <div class="box">
                    <div class="price">$150</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Jumpsuit', price: 50.00, description: 'High-waisted jumpsuit'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product10.png" alt="London Hills"></div>
                <div class="title">London Hills</div>
                <h3>London Hills Women Printed Round Neck Oversized T-Shirt | Loose Fit Drop Shoulder T-Shirt Pack of 3</h3>
                <div class="box">
                    <div class="price">$250</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'London Hills', price: 50.00, description: 'London Hills Women Printed Round Neck Oversized T-Shirt Loose Fit Drop Shoulder T-Shirt Pack of 3'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product13.png" alt="Istyle Can"></div>
                <div class="title">Istyle Can</div>
                <h3>Istyle Can Women's & Girls' Solid Mock Neck Ribbed/Knitted Yellow Sleeveless Stretchable Slim Fit Crop Tank Top</h3>
                <div class="box">
                    <div class="price">$520</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Istyle Can', price: 50.00, description: 'Istyle Can Womens & Girls Solid Mock Neck Ribbed/Knitted Yellow Sleeveless Stretchable Slim Fit Crop Tank Top'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->


             <!-- card start -->
            <div class="card">
                <div class="img"><img src="product14.png" alt="Istyle Can"></div>
                <div class="title">Burkley 3 Piece Set</div>
                <h3>Women's Embroidered Kurta Set with Organza Dupatta</h3>
                <div class="box">
                    <div class="price">$90</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Burkley 3 Piece Set', price: 50.00, description: 'Womens Embroidered Kurta Set with Organza Dupatta'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->


            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product15.png" alt="Istyle Can"></div>
                <div class="title">Short Kurti</div>
                <h3>Women's Cotton Regular Fit Short Kurti</h3>
                <div class="box">
                    <div class="price">$760</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Short Kurti', price: 50.00, description: 'Womens Cotton Regular Fit Short Kurti'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->



            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product16.png" alt="Istyle Can"></div>
                <div class="title">Women's Crepe </div>
                <h3>Women's Crepe Fit and Flare One Piece Midi Length Dress</h3>
                <div class="box">
                    <div class="price">$220</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'womens Crepe ', price: 50.00, description: 'Womens Crepe Fit and Flare One Piece Midi Length Dress'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product17.png" alt="Istyle Can"></div>
                <div class="title">Eden & Ivy</div>
                <h3>Women's Georgette Fit & Flare One Piece Midi Length Tiered</h3>
                <div class="box">
                    <div class="price">$540</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Eden & Ivy', price: 540.00, description: 'Womens Georgette Fit & Flare One Piece Midi Length Tiered'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product18.png" alt="Istyle Can"></div>
                <div class="title">Myx</div>
                <h3>Women's Rayon Knee-Length A-Line Dress</h3>
                <div class="box">
                    <div class="price">$800</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Myx', price: 800.00, description: 'Womens Rayon Knee-Length A-Line Dress'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product19.png" alt="Istyle Can"></div>
                <div class="title">INKAST</div>
                <h3>Women's Denim A-Line One Piece Knee-Length Babydoll</h3>
                <div class="box">
                    <div class="price">$450</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'INKAST', price: 450.00, description: 'Womens Denim A-Line One Piece Knee-Length Babydoll'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

          
            <!-- card start -->
            <div class="card">
                <div class="img"><img src="product20.png" alt="Istyle Can"></div>
                <div class="title">Symbol Womens</div>
                <h3>Symbol Women's Cotton Stretch Bodycon One Piece Midi Length Dress</h3>
                <div class="box">
                    <div class="price">$530</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Symbol Womens', price: 530.00, description: 'Symbol Womens Cotton Stretch Bodycon One Piece Midi Length Dress'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->



             <!-- card start -->
             <div class="card">
                <div class="img"><img src="product21.png" alt="Istyle Can"></div>
                <div class="title">Aahwan</div>
                <h3>Aahwan Solid Summer Beach Square Neck Puff Sleeve Cut Out Waist Mini Dress For Women's & Girls</h3>
                <div class="box">
                    <div class="price">$90</div>
                    <button class="btn">Buy Now</button>
                    <button class="btn" onclick="addProduct({name: 'Aahwan', price: 90.00, description: 'Aahwan Solid Summer Beach Square Neck Puff Sleeve Cut Out Waist Mini Dress For Womens & Girls'})"> Add to Cart</button>
                </div>
            </div>
            <!-- card end -->

        </div>
    </section>
    

<!-- Fashion Section -->
<section class="sec" id="Fashion">
    <header class="hero">
        <div class="container">
            <h1 class="hero-title">Discover the New Fashion Collection</h1>
            <p class="hero-subtitle">Elevate your style with the latest trends</p>
            <a href="#shop" class="btn-primary">Shop Now</a>

        </div>
    </header>

    <!-- Featured Products Section -->
    <section class="featured-products" id="shop">
        <div class="container">
            <h2 class="section-title">Featured Styles</h2>
            <div class="products-grid">

                <div class="product-card">
                    <img src="product22.png" alt="Elegant Red Dress">
                    <div class="product-info">
                        <h3 class="product-title">BIBA Women</h3>
                        <p class="product-description">BIBA Women Printed Cotton Suit Set.</p>
                        <span class="product-price">$650</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'BIBA Women', price: 50.00, description: 'BIBA Women Printed Cotton Suit Set.'})"> Add to Cart</button>

                    </div>
                </div>

                <div class="product-card">
                    <img src="product23.png" alt="Chic Women's Suit">
                    <div class="product-info">
                        <h3 class="product-title">Chic Women's Suit</h3>
                        <p class="product-description">Naixa Women's Vichitra Silk Embroidered A-line Kurta with Vichitra Silk Pant and Chinon Embroidered Dupatta Sets</p>
                        <span class="product-price">$450</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'Chic Womens Suit', price: 450.00, description: 'Product DescriptioNaixa Womens Vichitra Silk Embroidered A-line Kurta with Vichitra Silk Pant and Chinon Embroidered Dupatta Setsn'})"> Add to Cart</button>

                    </div>
                </div>

                <div class="product-card">
                    <img src="product24.png" alt="Stylish Leather Jacket">
                    <div class="product-info">
                        <h3 class="product-title">INDO ERA Women's</h3>
                        <p class="product-description">INDO ERA Women's Embroidered Straight Kurta With Pant & Dupatta Set</p>
                        <span class="product-price">$340</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'INDO ERA Womens', price: 340.00, description: 'INDO ERA Womens Embroidered Straight Kurta With Pant & Dupatta Set'})"> Add to Cart</button>

                    </div>
                </div>

                <div class="product-card">
                    <img src="product25.png" alt="Striped Rayon Kurta Set">
                    <div class="product-info">
                        <h3 class="product-title">Aurelia Women's</h3>
                        <p class="product-description">Aurelia Women's Striped Rayon Kurta Set with Culottes</p>
                        <span class="product-price">$250</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'Aurelia Womens', price: 250.00, description: 'Aurelia Womens Striped Rayon Kurta Set with Culottes'})"> Add to Cart</button>

                    </div>
                </div>

                <div class="product-card">
                    <img src="product26.png" alt="Ethnic Motifs Straight Kurta">
                    <div class="product-info">
                        <h3 class="product-title">INDO ERA Women's</h3>
                        <p class="product-description">Cotton Blend Light Green Ethnic Motifs Straight Kurta Pant With Dupatta</p>
                        <span class="product-price">$200</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'INDO ERA Womens', price: 200.00, description: 'Cotton Blend Light Green Ethnic Motifs Straight Kurta Pant With Dupatta'})"> Add to Cart</button>


                    </div>
                </div>

                <div class="product-card">
                    <img src="product27.png" alt="Viscose Embroidered Straight Kurta">
                    <div class="product-info">
                        <h3 class="product-title">Naixa Women's</h3>
                        <p class="product-description">Naixa Women's BSY Viscose Embroidered Straight Kurta with BSY Viscose Pant and Silk Blend Laced Dupatta Sets</p>
                        <span class="product-price">$190</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'Naixa Womens', price: 50.00, description: 'Product Naixa Womens BSY Viscose Embroidered Straight Kurta with BSY Viscose Pant and Silk Blend Laced Dupatta Sets'})"> Add to Cart</button>

                    </div>
                </div>

                <div class="product-card">
                    <img src="product28.png" alt="GoSriKi Women's">
                    <div class="product-info">
                        <h3 class="product-title">NEWWomen's</h3>
                        <p class="product-description"> Georgette Three Piece Set</p>
                        <span class="product-price">$180</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'Georgette Three Piece Set', price: 180.00, description: 'Georgette Three Piece Set'})"> Add to Cart</button>

                    </div>
                </div>

                <div class="product-card">
                    <img src="product29.png" alt="GoSriKi Women's Kurta with Palazzo">
                    <div class="product-info">
                        <h3 class="product-title">Gogari Women's</h3>
                        <p class="product-description">Three Piece Co-ordinate Set</p>
                        <span class="product-price">$170</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'Three Piece Co-ordinate Set', price: 170.00, description: 'Three Piece Co-ordinate Set'})"> Add to Cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="product30.png" alt="GoSriKi Women's Kurta with Palazzo">
                    <div class="product-info">
                        <h3 class="product-title">GoSriKi Women's</h3>
                        <p class="product-description">Georgette Handwork Anarkali Set</p>
                        <span class="product-price">$160</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'GoSriKi Womens', price: 160.00, description: 'Georgette Handwork Anarkali Set'})"> Add to Cart</button>

                    </div>
                </div>

                <div class="product-card">
                    <img src="product31.png" alt="GoSriKi Women's Kurta with Palazzo">
                    <div class="product-info">
                        <h3 class="product-title">GoSriKi Women's</h3>
                        <p class="product-description">GoSriKi Women's Kurta with Palazzo</p>
                        <span class="product-price">$150</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'GoSriKi Womens', price: 150.00, description: 'GoSriKi Womens Kurta with Palazzo'})"> Add to Cart</button>

                    </div>
                </div> 

                <div class="product-card">
                    <img src="product32.png" alt="GoSriKi Women's Kurta with Palazzo">
                    <div class="product-info">
                        <h3 class="product-title">INDO ERA Women's</h3>
                        <p class="product-description">Beige Three Piece Set</p>
                        <span class="product-price">$140</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'INDO ERA Womens', price: 140.00, description: 'Beige Three Piece Set'})"> Add to Cart</button>

                    </div>
                </div> 

                <div class="product-card">
                    <img src="product33.png" alt="Cotton Blend Printed Anarkali Kurta">
                    <div class="product-info">
                        <h3 class="product-title">GoSriKi Women's</h3>
                        <p class="product-description">Cotton Blend Printed Anarkali Kurta with Pant & Dupatta</p>
                        <span class="product-price">$130</span>
                        <button class="btn">Buy Now</button>
                        <button class="btn" onclick="addProduct({name: 'GoSriKi Womens', price: 130.00, description: 'Cotton Blend Printed Anarkali Kurta with Pant & Dupatta'})"> Add to Cart</button>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Call to Action Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Elevate Your Wardrobe?</h2>
            <p>Don't miss out on our latest collection. Shop now and redefine your style!</p>
            <a href="#shop" class="btn-secondary">Explore the Collection</a>
        </div>
    </section>

</section>











<script>
    let cart2 = [];
      const cartCount = document.querySelector('.cart-count');


      function addProduct(prodDetails){
        if(!cart2.find(e => e.name === prodDetails.name)) {
          cart2.push(prodDetails);
          cartCount.textContent=`(${cart2.length})`; //"(" + cart2.length +")"
          console.log(cart2);

          localStorage.setItem('cart2', JSON.stringify(cart2)); // save cart value (array of object) in a local storage
        }
      }
      window.onload=function(){ //calls on page load
        cart2 = [ ...JSON.parse(localStorage.getItem('cart2'))]; //get cart value from localstorage
        cartCount.textContent=`(${cart2.length})`;
      }

      document.addEventListener("DOMContentLoaded", function () {
    // Toggle the navbar menu visibility on mobile
    document.querySelector(".menu-btn").addEventListener("click", function () {
        document.querySelector(".navbar .menu").classList.toggle("active");
        document.querySelector(".menu-btn i").classList.toggle("active");
    });

    
});

</script>













</body>
</html>






    















<footer>
    <p>Copyright &copy; <a href="#">TrendyShe</a></p>

    <form class="contact-form" action="#" method="post">
        <button type="button" onclick="window.location.href='mailto:info@trendyshe.com'">Email: info@trendyshe.com</button>
        <button type="button" onclick="window.location.href='tel:+1234567890'">Phone: +1 234 567 890</button>
    </form>

    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
    </div>
</footer>








    