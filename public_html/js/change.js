function calculate(){
	var suit = document.getElementById("suit").value;
	var tie = document.getElementById("tie").value;
	var shoes = document.getElementById("shoes").value;
	var belt = document.getElementById("belt").value;
	var hat = document.getElementById("hat").value;
	var watch = document.getElementById("watch").value;

	var suit1 = 0;
	var tie1 = 0;
	var shoes1 = 0;
	var belt1 = 0;
	var hat1 = 0;
	var watch1 = 0;

	var totalsuit = 0;
	var totaltie = 0;
	var totalshoes = 0;
	var totalbelt = 0;
	var totalhat = 0;
	var totalwatch = 0;

	var subtotal = 0.00;
	var tax = 0.00;
	var total = 0.00;





	// input validation
	if (isNaN(suit)){
		suit1 = 0;
	}else{
		suit1 = suit;
	}

	if (isNaN(tie)){
		tie1 = 0;
	}else{
		tie1 = tie;
	}

	if (isNaN(shoes)){
		shoes1 = 0;
	}else{
		shoes1 = shoes;
	}

	if (isNaN(belt)){
		belt1 = 0;
	}else{
		belt1 = belt;
	}

	if (isNaN(hat)){
		hat1 = 0;
	}else{
		hat1 = hat;
	}
	
	if (isNaN(watch)){
		watch1 = 0;
	}else{
		watch1 = watch;
	}




	// checks to see if anything in cart at all
	if (suit1 == 0 && tie1 == 0 && shoes1 == 0 && belt1 == 0 && hat1 == 0 && watch1 == 0){
		document.getElementById("status").innerHTML = "Your shopping cart is empty";
	} else {
		document.getElementById("status").innerHTML = "";
	}



	
	//checks how many of each are selected
	if (suit1 > 0){
		totalsuit = suit1*49.99;
		totalsuit = totalsuit.toFixed(2);
		document.getElementById("suitbuy").innerHTML = suit1 + " x suit     " + "$" + totalsuit;
	} else {
		document.getElementById("suitbuy").innerHTML = "";
		suit1 = 0;
	}

	if (tie1 > 0){
		totaltie = tie1*9.99;
		totaltie = totaltie.toFixed(2);
		document.getElementById("tiebuy").innerHTML = tie1 + " x tie      " + "$" + totaltie;
	} else {
		document.getElementById("tiebuy").innerHTML = "";
		tie1 = 0;
	}

	if (shoes1 > 0){
		totalshoes = shoes1*29.99;
		totalshoes = totalshoes.toFixed(2);
		document.getElementById("shoesbuy").innerHTML = shoes1 + " x shoes    " +  "$" + totalshoes;
	} else {
		document.getElementById("shoesbuy").innerHTML = "";
		shoes = 0;
	}

	if (belt1 > 0){
		totalbelt = belt1*5.99;
		totalbelt = totalbelt.toFixed(2);
		document.getElementById("beltbuy").innerHTML = belt1 + " x belt     " + "$" + totalbelt;
	} else {
		document.getElementById("beltbuy").innerHTML = "";
		belt1 = 0;
	}

	if (hat1 > 0){
		totalhat = hat1*9.99;
		totalhat = totalhat.toFixed(2);
		document.getElementById("hatbuy").innerHTML = hat1 + " x hat      " +  "$" + totalhat;
	} else {
		document.getElementById("hatbuy").innerHTML = "";
		hat1 = 0;
	}

	if (watch1 > 0){
		totalwatch = watch1*39.99;
		totalwatch = totalwatch.toFixed(2);
		document.getElementById("watchbuy").innerHTML = watch1 + " x watch    " + "$" + totalwatch;
	} else {
		document.getElementById("watchbuy").innerHTML = "";
		watch1 = 0;
	}

	subtotal = subtotal + suit1*49.99;
	subtotal = subtotal + tie1*9.99;
	subtotal = subtotal + shoes1*29.99;
	subtotal = subtotal + belt1*5.99;
	subtotal = subtotal + hat1*9.99;
	subtotal = subtotal + watch1*39.99;
	total = subtotal * 1.13;
	tax = total - subtotal;

	subtotal = subtotal.toFixed(2);
	tax = tax.toFixed(2);
	total = total.toFixed(2);

	document.getElementById("textField1").value = subtotal;
	document.getElementById("textField2").value = tax;
	document.getElementById("textField3").value = total;
}