document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 1000,
        once: true,
    });
});

let paypal_input = document.getElementById("paypal_482_item");
paypal_input.addEventListener("click", function () {
    const paypal_btn = document.getElementById("_paypal_btn");
    const debit_btn = document.getElementById("_debit_8327_card");
    if (paypal_btn.classList.contains("_active_9892_paypal")) {
        debit_btn.classList.remove("_active_8678_debit");
    } else {
        paypal_btn.classList.add("_active_9892_paypal");
    }
});

let card_input = document.getElementById("_debit_card_item");
card_input.addEventListener("click", function () {
    const paypal_btn = document.getElementById("_paypal_btn");
    const debit_btn = document.getElementById("_debit_8327_card");
    if (debit_btn.classList.contains("_active_8678_debit")) {
        paypal_btn.classList.remove("_active_9892_paypal");
    } else {
        debit_btn.classList.add("_active_8678_debit");
    }
});
