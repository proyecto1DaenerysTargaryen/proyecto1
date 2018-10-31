function validarfrom(){
	var nombre = document.form1.nick.value;
	var pas = document.form1.pss.value;
	var nick = document.getElementById("nick1");
	var contra = document.getElementById("pasw");
	var label = document.getElementById("label");
	var label1 = document.getElementById("label1");
	//alert('hola');
	if(nombre == ""){
		if(pas == ""){
			nick.className="form-control is-invalid";
			nick.style.backgroundColor="#ff9999";
			contra.className="form-control is-invalid";
			contra.style.backgroundColor ="#ff9999";
			label.style.display="block";
			label1.style.display="block";
			label.style.color="red";
			label1.style.color="red";
			return false;
			//alert('hola');
		}else{
			nick.className="form-control is-invalid";
			nick.style.backgroundColor="#ff9999";
			label.style.display="block";
			label.style.color="red";
			return false;
			return false;
		}
	}else if (pas == ""){
		contra.className="form-control is-invalid";
		contra.style.backgroundColor ="#ff9999";
		label1.style.display="block";
		label.style.color="red";
		label1.style.color="red";
		return false;
		//alert('hola');
		return false;

	}
}