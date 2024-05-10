"use strict";                        
let cart = [];
let cartTotal = 0;
const cartDom = document.querySelector(".cart");
const addtocartbtnDom = document.querySelectorAll('[data-action="add-to-cart"]');

addtocartbtnDom.forEach(addtocartbtnDom => {
  addtocartbtnDom.addEventListener("click", () => {
    const productDom = addtocartbtnDom.parentNode.parentNode;
    const product = {
     
      name: productDom.querySelector(".product-name").innerText,
      price: productDom.querySelector(".product-price").innerText,
      quantity: 1
   };

   const IsinCart = cart.filter(cartItem => cartItem.name === product.name).length > 0;
if (IsinCart === false) {
  cartDom.insertAdjacentHTML("beforeend",`
  <div class="card cart-items ">
  <div class="flex flex-col bg-black w-[95%] rounded-lg mx-2 mt-7 ">
        <p class="text-white text-[18px] mx-3 mt-2 cart_item_name ">${product.name}</p>
        <p class="text-white text-[14px] mx-3 my-1 cart_item_price">${product.price}</p>
        <div class="flex flex-row">

    <div class="mx-2 my-1">
    <button class="bg-white px-1 rounded-md" type="button" data-action="decrease-item">&minus;
</div>
    <div>
      <p class="text-white text-[14px] mx-1 my-1 mb-4 cart_item_quantity" > ${product.quantity}</p>  
    </div>
        <div class="mx-2 my-1">
        <button class=" bg-white px-1 rounded-md z-10" type="button" data-action="increase-item">&plus;
    </div>

    <div class="mx-2 my-1">
        <button class="bg-[#E61700] px-1 rounded-md" type="button" data-action="remove-item">&times;
    </div>
</div>
 </div>
    </div>
  `);

  if(document.querySelector('.cart-footer') === null){
    cartDom.insertAdjacentHTML("afterend",  `
    <div class="flex flex-row  card cart-footer mt-2 mb-3 ">
        <div class="p-2">
          <button class="bg-[#E61700] px-2 py-1 rounded-md text-white" type="button" data-action="clear-cart">Clear Cart
        </div>
        <div class="p-2 ">
          <button class="bg-green-400 px-2 py-1 rounded-md text-white" type="button" data-action="check-out">Pay  
            &#10137;
        </div>
      </div>
      
      <div class="flex flex-col bg-black w-[95%] rounded-lg mx-2 mt-7 card cart-footer">
            <p class="text-white text-[18px] mx-3 mt-2 " data-action="check-out">Subtotal : <span class="pay"></span></p>
            <p class="text-white text-[18px] mx-3 mt-2 ">Pay :
              <input type="text" name="" id="source" class=" bg-black border-b-2  mx-3 mt-2 ">
              </p>
            <p class="text-white text-[18px] mx-3 mt-2 mb-4 ">Change :
              <span id="result" class="text-white"></span>
              </p>
            <hr>
            <p class="text-white text-[18px] mx-3 my-3 " ></p>
            
    
        </div>
      `); }


      addtocartbtnDom.innerText = "In cart";
    addtocartbtnDom.disabled = true;
    cart.push(product);

    const cartItemsDom = cartDom.querySelectorAll(".cart-items");
    cartItemsDom.forEach(cartItemDom => {

    if (cartItemDom.querySelector(".cart_item_name").innerText === product.name) {

      cartTotal += parseInt(cartItemDom.querySelector(".cart_item_quantity").innerText) 
      * parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
      document.querySelector('.pay').innerText =  cartTotal;


      const source = document.getElementById('source');
      const result = document.getElementById('result');

const inputHandler = function() {

            const inputValue = parseFloat(source.value) || 0;

            const calculationResult = inputValue - cartTotal;

            result.innerText = `Rp: ${calculationResult}`;
        }
        source.addEventListener('input', inputHandler);

        source.addEventListener('change', inputHandler);


      // increase item in cart
      cartItemDom.querySelector('[data-action="increase-item"]').addEventListener("click", () => {
        cart.forEach(cartItem => {
          if (cartItem.name === product.name) {
            cartItemDom.querySelector(".cart_item_quantity").innerText = ++cartItem.quantity;
            cartItemDom.querySelector(".cart_item_price").innerText =  parseInt(cartItem.quantity) *
            parseInt(cartItem.price) ;
            cartTotal += parseInt(cartItem.price)
            document.querySelector('.pay').innerText = cartTotal ;
          }
        });
      });

      // decrease item in cart
      cartItemDom.querySelector('[data-action="decrease-item"]').addEventListener("click", () => {
        cart.forEach(cartItem => {
          if (cartItem.name === product.name) {
            if (cartItem.quantity > 1) {
              cartItemDom.querySelector(".cart_item_quantity").innerText = --cartItem.quantity;
              cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
              parseInt(cartItem.price) ;
              cartTotal -= parseInt(cartItem.price)
              document.querySelector('.pay').innerText = cartTotal ;
            }
          }
        });
      });

      //remove item from cart
      cartItemDom.querySelector('[data-action="remove-item"]').addEventListener("click", () => {
        cart.forEach(cartItem => {
          if (cartItem.name === product.name) {
              cartTotal -= parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
              document.querySelector('.pay').innerText = cartTotal ;
              cartItemDom.remove();
              cart = cart.filter(cartItem => cartItem.name !== product.name);
              addtocartbtnDom.innerText = "Add to cart";
              addtocartbtnDom.disabled = false;
          }
          if(cart.length < 1){
            document.querySelector('.cart-footer').remove();
          }
        });
      });

      //clear cart
      document.querySelector('[data-action="clear-cart"]').addEventListener("click" , () => {
        cartItemDom.remove();
        cart = [];
        cartTotal = 0;
        if(document.querySelector('.cart-footer') !== null){
          document.querySelector('.cart-footer').remove();
        }
        addtocartbtnDom.innerText = "Add to cart";
        addtocartbtnDom.disabled = false;
      });

      document.querySelector('[data-action="check-out"]').addEventListener("click" , () => {
        if(document.getElementById('pay-form') === null){
          checkOut();
        }
      });
    }
  });
}
});
});


function checkOut() {
  let payHTMLForm = `
  <form id="pay-form" action="" method="post" >
    <input type="hidden" name="id_transaction" value="">

    <input type="hidden" name="transaction_date" value="">
  `;
   
  cart.forEach((cartItem,index) => {
   ++index;
   payHTMLForm += ` <input type="hidden" name="nama_item" value="${cartItem.name}">
    <input type="hidden" name="jumlah_pembelian" value="${cartItem.quantity}">
    <input type="hidden" name="harga_satuan" value="${cartItem.price.replace("Rp.","")}">
    <input type="hidden" name="total_harga" value="${cartTotal}">`;


  // Using jQuery AJAX
  $.ajax({
      type: 'POST',
      url: 'process_menu.php',
      data: { 
      namaitem: cartItem.name ,
      jumlahpembelian: cartItem.quantity,
      hargasatuan: cartItem.price,
      totalharga: cartTotal
      },
      success: function(response) {
          console.log(response);
      }
  });
  });
   
  payHTMLForm += `<input type="button" value="Pay" class="pay">
  </form><div class="overlay">Please wait...</div>`;
  document.querySelector('body').insertAdjacentHTML("beforeend", payHTMLForm);
  document.getElementById("pay-form").submit();
}
