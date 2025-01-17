if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}
else{
    ready()
}

function ready(){

    var removeCartItemButtons = document.getElementsByClassName('del-btn')

    for(var i=0 ; i <removeCartItemButtons.length; i++ ){
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var addToCartButtons = document.getElementsByClassName('send-button')
    for(var i=0 ; i< addToCartButtons.length ; i++){
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

}

function removeCartItem(event){
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()

}


function addToCartClicked(event){
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('price')[0].innerText
    var imageSrc =shopItem.getElementsByClassName('shop-item-image')[0].src
    console.log(title,price,imageSrc )

    addItemToCart(title,price,imageSrc)
}


function addItemToCart(title, price, imageSrc ){
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-box')
    var cartItems = document.getElementsByClassName('cartbox-container')[0]
    var cartRowContents = `
    
            <div class="image">
                    <img  class="shop-item-image"  src="${imageSrc}">
                </div>

                <div class="content">
                    <h3 class="shop-item-title">${title}</h3>
                    <div class="price">2000,<span>00TL</span></div>
                     <button class="del-btn">remove</button>
 
                </div>
            </div>
            `
            cartRow.innerHTML =cartRowContents
                      
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('del-btn')[0].addEventListener('click',removeCartItem)
    alert("Ürün Sepete Eklendi!")
}