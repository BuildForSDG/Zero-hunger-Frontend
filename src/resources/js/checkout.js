function addDeliveryAddress(){
	let component='add-delivery-address';
	let target=document.getElementById('Add-new-delivery-Address')
    getComponent(component,target);
}

function payMentStep(){
	let component='checkout-payment-step';
	let target=document.getElementById('checkout-step')
    getComponent(component,target);
}

function shippingStep(){
	let component='checkout-shipping-delivery-step';
	let target=document.getElementById('checkout-step')
    getComponent(component,target);
}