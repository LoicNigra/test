
// Search functie
function search(keyword) {
    $.post('/ajax/search.php', {naam: keyword}).then(function (response) {
        var element = $.parseHTML(response);
        $('.producten').replaceWith(element);
    });
}

function deserialize(data) {
    const json = atob(data);

    return JSON.parse(json);
}


// Artikelen in cart tonen

function cart() {
    return JSON.parse(localStorage.getItem('cart')) || {};
}

// Artikel toevoegen in aan winkelmand

function addToCart(product) {
    product = deserialize(product);
    var carts = cart();

    if (carts[product.ID] === (void 0)) {
        carts[product.ID] = {
            product: product,
            amount: 0
        };
    }

    carts[product.ID].amount++;

    localStorage.setItem('cart', JSON.stringify(carts));
}

// Artikel verwijderen uit winkelmand

function removeFromCart(product) {
    product = deserialize(product);
    var cart = JSON.parse(localStorage.getItem('cart')) || {};

    if (cart[product.ID] === (void 0)) {
        cart[product.ID] = {
            product: product,
            amount: 0
        };
    }

    cart[product.ID].amount--;
    if (cart[product.ID].amount <= 0) {
        delete cart[product.ID];
    }

    localStorage.setItem('cart', JSON.stringify(cart));
}


(function ($) {
    $(function () {

        $('.button-collapse').sideNav();

        $('.search').keypress(function (e) {
            if (e.keyCode === 13) {
                search($('.search').val());
            }
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space






/*
    // Tonen van winkelmand op hover
    $(document).ready(function () {
        $(document).on('mouseenter', '#cardHeader', function () {
            $(this).find(":button").show();
        }).on('mouseleave', '#cardHeader', function () {
            $(this).find(":button").hide();
        });
    });

    */


