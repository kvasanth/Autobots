if (typeof Virtuemart === "undefined")
	Virtuemart = {};

Virtuemart.stopSendtocart = false;

Virtuemart.setproducttype = function(form, id) {
	form.view = null;
	var datas = form.serialize();

	var runs= 0, maxruns = 20;
	var container = form;
	while(!container.hasClass('product-container') && !container.hasClass('productdetails') && !container.hasClass('vm-product-details-container')  && runs<=maxruns){
		container = container.parent();
		runs++;
	}
	if(runs>maxruns){
		console.log('setproducttype: Could not find parent container product-container nor product-field-display');
		return false;
	}

	var prices = container.find(".product-price");
	if (0 == prices.length) {
		prices = jQuery("#productPrice" + id);
	}
	datas = datas.replace("&view=cart", "");

	prices.fadeTo("fast", 0.75);
    jQuery.ajax({
        type: "POST",
        cache: false,
        dataType: "json",
        url: Virtuemart.vmSiteurl + "index.php?&option=com_virtuemart&view=productdetails&task=recalculate&format=json&nosef=1" + Virtuemart.vmLang,
        data: datas
    }).done(
        function (data, textStatus) {
            prices.fadeTo("fast", 1);
            // Remove previous messages generated by this AJAX call:
            jQuery( "#system-message-container #system-message div.vmprices-message").remove();
            // refresh price
            for (var key in data) {
                var value = data[key];
                // console.log('my datas',key,value);
                if ( key=='messages' ) {
                    // Extract the messages from the returned string, add the vmprices-message class (so the next ajax call
                    // can remove them again) and then move the messages to the original message container.
                    // Things are complicated by the fact that no #system-message element exists if no messages were printed so far
                    var newmessages = jQuery( data[key] ).find("div.alert").addClass("vmprices-message");
                    if (!jQuery( "#system-message-container #system-message").length && newmessages.length) {
                        jQuery( "#system-message-container" ).append( "<div id='system-message'></div>" );
                    }
                    newmessages.appendTo( "#system-message-container #system-message");
                } else { // prices
                    if (value!=0) prices.find("span.Price"+key).show().html(value);
                    else prices.find(".Price"+key).html(0).hide();
                }
            }
        }
    );

	return false; // prevent reload
}

Virtuemart.productUpdate = function() {
	// This Event Gets Fired As Soon As The New Product
	// Was Added To The Cart
	// This Way Third Party Developer Can Include Their Own
	// Add To Cart Module And Listen To The Event: "updateVirtueMartCartModule"
	jQuery('body').trigger('updateVirtueMartCartModule');
}

Virtuemart.eventsetproducttype = function (event){
    Virtuemart.setproducttype(event.data.cart,event.data.virtuemart_product_id);
}

Virtuemart.sendtocart = function (form){
	if (Virtuemart.addtocart_popup ==1) {
		Virtuemart.cartEffect(form) ;
	} else {
		form.append('<input type="hidden" name="task" value="add" />');
		form.submit();
	}
}

Virtuemart.cartEffect = function(form) {

	var dat = form.serialize();

	if(usefancy){
		jQuery.fancybox.showActivity();
	}

    jQuery.ajax({
        type: "POST",
        cache: false,
        dataType: "json",
        timeout: "20000",
        url: Virtuemart.vmSiteurl + "index.php?option=com_virtuemart&nosef=1&view=cart&task=addJS&format=json"+Virtuemart.vmLang+window.Itemid,
        data: dat
    }).done(

	function(datas, textStatus) {

		if(datas.stat ==1){
			var txt = datas.msg;
		} else if(datas.stat ==2){
			var txt = datas.msg +"<H4>"+form.find(".pname").val()+"</H4>";
		} else {
			var txt = "<H4>"+vmCartError+"</H4>"+datas.msg;
		}
		if(usefancy){
			jQuery.fancybox({
					"titlePosition" : 	"inside",
					"transitionIn"	:	"fade",
					"transitionOut"	:	"fade",
					"changeFade"    :   "fast",
					"type"			:	"html",
					"autoCenter"    :   true,
					"closeBtn"      :   false,
					"closeClick"    :   false,
					"content"       :   txt
				}
			);
		} else {
			jQuery.facebox( txt , 'my-groovy-style');
		}

        jQuery('body').trigger('updateVirtueMartCartModule');
	});

}

Virtuemart.incrQuantity = (function(event) {
    var rParent = jQuery(this).parent().parent();
    quantity = rParent.find('input[name="quantity[]"]');
    virtuemart_product_id = rParent.find('input[name="virtuemart_product_id[]"]').val();
    Ste = parseInt(quantity.attr("step"));
    if (isNaN(Ste)) Ste = 1;
    Qtt = parseInt(quantity.val());
    if (!isNaN(Qtt)) {
        quantity.val(Qtt + Ste);
        maxQtt = parseInt(quantity.attr("max"));
        if(!isNaN(maxQtt) && quantity.val()>maxQtt){
            quantity.val(maxQtt);
        }
        Virtuemart.setproducttype(event.data.cart,virtuemart_product_id);
    }
});

Virtuemart.decrQuantity = (function(event) {
    var rParent = jQuery(this).parent().parent();
    var quantity = rParent.find('input[name="quantity[]"]');
    var virtuemart_product_id = rParent.find('input[name="virtuemart_product_id[]"]').val();
    var Ste = parseInt(quantity.attr("step"));
    if (isNaN(Ste)) Ste = 1;
    var minQtt = parseInt(quantity.attr("init"));
    if (isNaN(minQtt)) minQtt = 1;
    var Qtt = parseInt(quantity.val());

    if (!isNaN(Qtt) && Qtt>Ste) {
        quantity.val(Qtt - Ste);
        if(!isNaN(minQtt) && quantity.val()<minQtt){
            quantity.val(minQtt);
        }
    } else quantity.val(minQtt);
    Virtuemart.setproducttype(event.data.cart,virtuemart_product_id);
});

Virtuemart.addtocart = function (e){

    var targ;
    if (!e) e = window.event;
    e.preventDefault();

    if(!Virtuemart.quantityErrorAlert(e)){
        return false;
    }

    if(e.hasOwnProperty('stopSendtocart') && e.stopSendtocart == true){
        return false;
    }
    if (e.target) targ = e.target;
    else if (e.srcElement) targ = e.srcElement;
    if (targ.nodeType == 3) // defeat Safari bug
        targ = targ.parentNode;

    //if (jQuery(targ).prop("type") == "submit" ||  jQuery(targ).prop("type") == "image" ) {
        Virtuemart.sendtocart(e.data.cart);
        return false;
    //}
};

Virtuemart.quantityErrorAlert = function(e) {
	var me = jQuery(this);
    e.preventDefault();
	if(me.is('input')){
        return Virtuemart.checkQuantity(this, me.attr("step"), me.attr("data-errStr"));
	}
	return true;
};

Virtuemart.product = function(carts) {
	carts.each(function(){
		var cart = jQuery(this),

		quantityInput=cart.find('input[name="quantity[]"]'),
		plus   = cart.find('.quantity-plus'),
		minus  = cart.find('.quantity-minus'),
		select = cart.find('select:not(.no-vm-bind)'),
		radio = cart.find('input:radio:not(.no-vm-bind)'),
		virtuemart_product_id = cart.find('input[name="virtuemart_product_id[]"]').val(),
		quantity = cart.find('.quantity-input');
		var Ste = parseInt(quantityInput.attr("step"));
		//Fallback for layouts lower than 2.0.18b
		if(isNaN(Ste)) { Ste = 1; }
        this.action ="#";

        plus
            .off('click', Virtuemart.incrQuantity)
            .on('click', {cart:cart}, Virtuemart.incrQuantity);

        minus
            .off('click', Virtuemart.decrQuantity)
            .on('click', {cart:cart},Virtuemart.decrQuantity);

        select
            .off('change', Virtuemart.eventsetproducttype)
            .on('change', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);

        radio
            .off('change', Virtuemart.eventsetproducttype)
            .on('change', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);

        quantity
            .off('click blur submit', Virtuemart.quantityErrorAlert)
            .on('click blur submit', Virtuemart.quantityErrorAlert)
			.off('keyup', Virtuemart.eventsetproducttype)
			.on('keyup', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);


        var addtocart = cart.find('button[name="addtocart"], input[name="addtocart"], a[name="addtocart"]');

        addtocart
            .off('click submit',Virtuemart.addtocart)
            .on('click submit',{cart:cart},Virtuemart.addtocart);

	});
}

Virtuemart.checkQuantity = function (obj,step,myStr) {
    // use the modulus operator "%" to see if there is a remainder
    var remainder=obj.value % step,
        quantity=obj.value;

    if (remainder  != 0) {
        //myStr = "'.vmText::_ ('COM_VIRTUEMART_WRONG_AMOUNT_ADDED').'";
        if(!isNaN(myStr)) alert(myStr.replace("%s",step));
        if(quantity!=remainder && quantity>remainder){
            obj.value = quantity-remainder;
        } else {
            obj.value = step;
        }
        return false;
    }
    return true;
}

jQuery.noConflict();
/*jQuery(document).ready(function($) {
	Virtuemart.product(jQuery("form.product"));

	/*$("form.js-recalculate").each(function(){
		if ($(this).find(".product-fields").length && !$(this).find(".no-vm-bind").length) {
			var id= $(this).find('input[name="virtuemart_product_id[]"]').val();
			Virtuemart.setproducttype($(this),id);

		}
	});*/
//});
