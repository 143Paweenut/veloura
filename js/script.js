/* =========================================
   VELOURA PERFUMES - SCRIPT.JS
========================================= */


/* =========================================
   CART STORAGE
========================================= */

const CART_KEY = "velouraCart";


/* =========================================
   GET CART
========================================= */

function getCart() {

    try {

        const cart =
            JSON.parse(
                localStorage.getItem(CART_KEY)
            );

        return Array.isArray(cart)
            ? cart
            : [];

    } catch (error) {

        return [];

    }

}


/* =========================================
   SAVE CART
========================================= */

function saveCart(cart) {

    localStorage.setItem(
        CART_KEY,
        JSON.stringify(cart)
    );

}


/* =========================================
   CART COUNT
========================================= */

function updateCartCount() {

    const cart = getCart();

    let count = 0;

    cart.forEach(item => {

        count += Number(
            item.quantity || 0
        );

    });


    document
        .querySelectorAll(".cart-count")
        .forEach(element => {

            element.textContent = count;

        });

}


/* =========================================
   ADD TO CART
========================================= */

function addToCart(product) {

    const cart = getCart();


    const existingProduct =
        cart.find(
            item =>
                String(item.id) ===
                String(product.id)
        );


    if (existingProduct) {

        existingProduct.quantity += 1;

    } else {

        cart.push({

            id: product.id,

            name: product.name,

            price: Number(product.price),

            image: product.image || "",

            quantity: 1

        });

    }


    saveCart(cart);

    updateCartCount();

}


/* =========================================
   REMOVE FROM CART
========================================= */

function removeFromCart(id) {

    let cart = getCart();

    cart = cart.filter(
        item =>
            String(item.id) !==
            String(id)
    );

    saveCart(cart);

    updateCartCount();

}


/* =========================================
   CHANGE QUANTITY
========================================= */

function changeCartQuantity(
    id,
    change
) {

    const cart = getCart();


    const item =
        cart.find(
            product =>
                String(product.id) ===
                String(id)
        );


    if (!item) {

        return;

    }


    item.quantity += change;


    if (item.quantity <= 0) {

        removeFromCart(id);

        return;

    }


    saveCart(cart);

    updateCartCount();

}


/* =========================================
   CLEAR CART
========================================= */

function clearCart() {

    localStorage.removeItem(
        CART_KEY
    );

    updateCartCount();

}


/* =========================================
   FORMAT PRICE
========================================= */

function formatPrice(price) {

    return Number(price || 0)
        .toLocaleString(
            "th-TH",
            {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }
        );

}


/* =========================================
   PRODUCT QUICK ADD
========================================= */

document.addEventListener(
    "DOMContentLoaded",
    function() {

        updateCartCount();


        document
            .querySelectorAll(".quick-add")
            .forEach(button => {

                button.addEventListener(
                    "click",
                    function(event) {

                        event.preventDefault();


                        const product = {

                            id:
                                this.dataset.id,

                            name:
                                this.dataset.name,

                            price:
                                Number(
                                    this.dataset.price
                                ),

                            image:
                                this.dataset.image

                        };


                        addToCart(product);


                        /*
                        =====================================
                        เพิ่มสินค้าแล้วไปหน้ารถเข็น
                        =====================================
                        */

                        window.location.href =
                            "cart.html";

                    }
                );

            });

    }
);


/* =========================================
   CART PAGE
========================================= */

function renderCart() {

    const cart = getCart();

    const cartContainer =
        document.getElementById(
            "cartItems"
        );


    if (!cartContainer) {

        return;

    }


    cartContainer.innerHTML = "";


    if (cart.length === 0) {

        cartContainer.innerHTML = `

            <div class="empty-cart">

                <h2>ตะกร้าสินค้าว่าง</h2>

                <p>
                    ยังไม่มีสินค้าในรถเข็น
                </p>

                <a
                    href="products.html"
                    class="btn"
                >
                    เลือกซื้อสินค้า
                </a>

            </div>

        `;


        updateCartSummary();

        return;

    }


    cart.forEach(item => {

        const total =
            Number(item.price) *
            Number(item.quantity);


        const image =
            item.image || "images/ve.jpg";


        const cartItem =
            document.createElement("div");


        cartItem.className =
            "cart-item";


        cartItem.innerHTML = `

            <div class="cart-product">

                <img
                    src="${image}"
                    alt="${item.name}"
                >

                <div>

                    <h3>
                        ${item.name}
                    </h3>

                    <p>
                        ฿${formatPrice(item.price)}
                    </p>

                </div>

            </div>


            <div class="cart-quantity">

                <button
                    type="button"
                    onclick="changeCartQuantity('${item.id}', -1)"
                >
                    −
                </button>


                <span>
                    ${item.quantity}
                </span>


                <button
                    type="button"
                    onclick="changeCartQuantity('${item.id}', 1)"
                >
                    +
                </button>

            </div>


            <div class="cart-item-total">

                ฿${formatPrice(total)}

            </div>


            <button
                type="button"
                class="remove-item"
                onclick="removeFromCart('${item.id}')"
            >
                ลบ
            </button>

        `;


        cartContainer.appendChild(
            cartItem
        );

    });


    updateCartSummary();

}


/* =========================================
   CART SUMMARY
========================================= */

function updateCartSummary() {

    const cart = getCart();


    let subtotal = 0;

    let quantity = 0;


    cart.forEach(item => {

        subtotal +=
            Number(item.price) *
            Number(item.quantity);

        quantity +=
            Number(item.quantity);

    });


    const subtotalElement =
        document.getElementById(
            "cartSubtotal"
        );


    const totalElement =
        document.getElementById(
            "cartTotal"
        );


    const quantityElement =
        document.getElementById(
            "cartQuantity"
        );


    if (subtotalElement) {

        subtotalElement.textContent =
            "฿" + formatPrice(subtotal);

    }


    if (totalElement) {

        totalElement.textContent =
            "฿" + formatPrice(subtotal);

    }


    if (quantityElement) {

        quantityElement.textContent =
            quantity;

    }

}


/* =========================================
   CLEAR CART BUTTON
========================================= */

document.addEventListener(
    "DOMContentLoaded",
    function() {

        const clearButton =
            document.getElementById(
                "clearCart"
            );


        if (clearButton) {

            clearButton.addEventListener(
                "click",
                function() {

                    if (
                        confirm(
                            "ต้องการล้างสินค้าในรถเข็นทั้งหมดหรือไม่?"
                        )
                    ) {

                        clearCart();

                        renderCart();

                    }

                }
            );

        }

    }
);


/* =========================================
   LOGIN FORM
========================================= */

document.addEventListener(
    "DOMContentLoaded",
    function() {

        const loginForm =
            document.getElementById(
                "loginForm"
            );


        if (!loginForm) {

            return;

        }


        loginForm.addEventListener(
            "submit",
            function(event) {

                /*
                =====================================
                ตอนนี้เป็น Frontend เท่านั้น
                =====================================

                หากต้องการตรวจสอบ MySQL จริง
                ต้องส่งข้อมูลไปยัง login.php
                หรือ API Backend
                */

                const username =
                    document
                        .getElementById(
                            "username"
                        )
                        ?.value
                        .trim();


                const password =
                    document
                        .getElementById(
                            "password"
                        )
                        ?.value;


                const errorMessage =
                    document.getElementById(
                        "errorMessage"
                    );


                if (
                    username === "" ||
                    password === ""
                ) {

                    event.preventDefault();


                    if (errorMessage) {

                        errorMessage.textContent =
                            "กรุณากรอก Username และ Password";

                        errorMessage.style.display =
                            "block";

                    }

                }

            }
        );

    }
);


/* =========================================
   UPDATE CART WHEN STORAGE CHANGES
========================================= */

window.addEventListener(
    "storage",
    function(event) {

        if (
            event.key === CART_KEY
        ) {

            updateCartCount();

            renderCart();

        }

    }
);


/* =========================================
   INITIALIZE CART PAGE
========================================= */

document.addEventListener(
    "DOMContentLoaded",
    function() {

        renderCart();

    }
);
