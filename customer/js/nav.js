const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="nav">
            <img src="img/Buy as you like.jpg" class="brand-logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">search</button>
                </div>
                <a href="#"><img src="img/user.png" alt=""></a>
                <a href="Cart/checkout/cart.html"><img src="img/cart.png" alt=""></a>
                <a href="Cart/checkout/cart.html"><img src="img/logout.png" alt=""></a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="#" class="link">home</a></li>
            <li class="link-item"><a href="#" class="link">women</a></li>
            <li class="link-item"><a href="#" class="link">men</a></li>
            <li class="link-item"><a href="#" class="link">kids</a></li>
            <li class="link-item"><a href="#" class="link">accessories</a></li>
            <li class="link-item"><a href="#" class="link">profile</a></li>
            <li class="link-item"><a href="#" class="link">all products</a></li>
            <li class="link-item"><a href="#" class="link">Place order</a></li>
        </ul>
    `;
}

createNav();