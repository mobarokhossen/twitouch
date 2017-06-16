function total_amount()
{
    var txtFirstNumberValue = document.getElementById('quantity').value;
    var txtSecondNumberValue = document.getElementById('price').value;
    var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
    if (!isNaN(result))
	{
		document.getElementById('total').value = result;
    }
}

function subtotal_amount()
{
    var txtFirstNumberValue = document.getElementById('discount').value;
    var txtSecondNumberValue = document.getElementById('tax').value;
    var txtThirdNumberValue = document.getElementById('total').value;
    var result = (parseInt(txtThirdNumberValue) + parseInt(txtSecondNumberValue))* (1-(parseInt(txtFirstNumberValue)/100));
    if (!isNaN(result))
	{
		document.getElementById('sub_total').value = result;
    }
}