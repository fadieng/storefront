function requiredData(inputValue) {
    var outputString = "";
	if (inputValue == null || inputValue == "")
	{
		outputString = " is required";
	}
	return outputString;
}

function validateForm(theForm) {
    var gotFocused = false;		// to set focus on the first field has error
	var result = true;			// error flag

var letters = /^[A-Za-z]+$/;
var moneyStr = /^(\d{1,3}(\,\d{3})*|(\d+))(\.\d{2})?$/;
var numbers = /^[0-9]+$/;

var objectcategoryname = document.forms[theForm]["categoryname"];
var objectproductname = document.forms[theForm]["productname"];
var objectdescription = document.forms[theForm]["description"];
var objectqty = document.forms[theForm]["qty"];
var objectprice = document.forms[theForm]["price"];
var objectdiscount = document.forms[theForm]["discount"];



// Validating product name ---------------------------------------------------------------
	var categorynameValue = objectcategoryname.value;
	var errorString = requiredData(categorynameValue);	
	
	if (categorynameValue == null || categorynameValue == "") {
		errorString = "please select category";
		result = false;
	}
	
	if (result == false && gotFocused == false)	{
	objectcategoryname.focus();
	gotFocused = true;
	}

	document.getElementById('categorynameError').innerHTML = errorString;


// Validating product name ---------------------------------------------------------------
	var productnameValue = objectproductname.value;
	var errorString = requiredData(productnameValue);	
	
	if (errorString == null || errorString == "") {
		
	}
	else {
		result = false;
	}
	if (result == false && gotFocused == false)	{
	objectproductname.focus();
	gotFocused = true;
	}

	document.getElementById('productnameError').innerHTML = errorString;


// Validating description name ---------------------------------------------------------------
	var descriptionValue = objectdescription.value;
	
	var errorString = requiredData(descriptionValue);	
	if (errorString == null || errorString == "") {
		
	}
	else {
		result = false;
	}
	
	
	if (result == false && gotFocused == false)	{
	objectdescription.focus();
	gotFocused = true;
	}

	document.getElementById('descriptionError').innerHTML = errorString;


// Validating qty name ---------------------------------------------------------------
	var qtyValue = objectqty.value;
	var errorString = requiredData(qtyValue);	
	
	if (errorString == null || errorString == "") {
		if (!objectqty.value.match(numbers)) {
		errorString = " must be only numbers";
		result = false;
		}
	}
	else {
		result = false;
	}
	if (result == false && gotFocused == false)	{
	objectqty.focus();
	gotFocused = true;
	}

	document.getElementById('qtyError').innerHTML = errorString;



// Validating price name ---------------------------------------------------------------
	var priceValue = objectprice.value;
	var errorString = requiredData(priceValue);	
	
	if (errorString == null || errorString == "") {
		if (!objectprice.value.match(moneyStr)) {
		errorString = " must be only decimal";
		result = false;
		}
	}
	else {
		result = false;
	}
	if (result == false && gotFocused == false)	{
	objectprice.focus();
	gotFocused = true;
	}

	document.getElementById('priceError').innerHTML = errorString;


// Validating price name ---------------------------------------------------------------
	var discountValue = objectdiscount.value;
	var errorString = requiredData(discountValue);	
	
	if (errorString == null || errorString == "") {
		if (!objectdiscount.value.match(moneyStr)) {
		errorString = " must be only decimal";
		result = false;
		}
	}
	else {
		result = false;
	}
	if (result == false && gotFocused == false)	{
	objectdiscount.focus();
	gotFocused = true;
	}

	document.getElementById('discountError').innerHTML = errorString;
	return result; 

}