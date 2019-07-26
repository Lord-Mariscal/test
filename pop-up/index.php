<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
.overlay {
	background: rgba(0,0,0,.4);
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	align-items: center;
	justify-content: center;
	display: flex;
    visibility: hidden;
    font-family: Raleway, sans-serif;
}
.overlay.active {
	visibility: visible;
}
.popup {
	background: #F8F8F8;
	box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
	border-radius: 3px;
	padding: 20px;
	text-align: center;
	width: 600px;
}
.popup h3 {
	font-size: 36px;
	font-weight: 600;
	margin-bottom: 10px;
    font-family: Raleway, sans-serif;
}
.popup form p {
	font-size: 15px;
    font-family: lato,sans-serif;
    text-align: justify;
    color: #78899b;
    padding:  10px;
}
.popup form .btn-submit {
	padding: 0 20px;
	height: 40px;
	line-height: 40px;
	border: none;
	color: #fff;
	background: #5E7DE3;
	border-radius: 3px;
	font-size: 16px;
	cursor: pointer;
	transition: .3s ease all;
}
.obli{
    color:red !important;
}
a{
    color: rgb(19, 101, 224);
}
a:hover{
    color: rgb(40, 152, 218);
    cursor: pointer;
}
.popup form .btn-submit:hover {
	background: rgba(94,125,227, .9);
}
input:hover{
cursor: pointer;
}
    </style>
</head>
<body onload="checkCookie()">
        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <h3>Aviso legal</h3>
                <form action="">
                    <div class="contenedor">
                        <p>
                            <strong>HOTEL FLOR PARKS</strong>  te informa que los datos de carácter personal que nos proporciones rellenando el presente formulario serán
                            tratados por <strong>HOTEL FLOR PARKS</strong> como responsable de esta web. La finalidad de la recogida y tratamiento de los datos personales
                            que te solicitamos es para enviarte nuestras publicaciones, promociones de productos y/o Servicios y recursos exclusivos. La
                            legitimación se realiza a través del consentimiento del interesado. Te informamos que los datos que nos facilitas los guardará
                            <strong>HOTEL FLOR PARKS</strong>. El hecho de que no introduzcas los datos de carácter personal que aparecen en el formulario como
                            obligatorios podrá tener como consecuencia que no podamos atender tu solicitud. Los datos no se cederán a terceros a no ser que
                            lo exija una ley o sea necesario para cumplir con la finalidad del tratamiento. Podrás ejercer tus <strong>derechos de acceso, rectificación,
                            limitación, portabilidad, supresión y cancelación</strong> de los datos en <a>info@florparks.es</a> así como el derecho a presentar una
                            reclamación ante una autoridad de control. Puedes consultar la información adicional y detallada sobre Protección de Datos en
                            nuestra <a href="AvisoLegal.html" target="_blank">Política de Privacidad</a>.
                        </p>
                    </div>
                    <input type="checkbox" required name="terms"> He leído y acepto la <a href="AvisoLegal.html" target="_blank">Política de Privacidad</a>.<i class="obli">*</i><br>
                    <input type="checkbox" name="terms"> Acepto recibir información sobre las actividades, servicios <br>y productos de NORMEVI, S.L
                    (en adelante HOTEL FLOR PARKS). <br>
                    <p class="obli">* Campos obligatorios</p>
                    <input type="submit" class="btn-submit" value="Enviar">
                </form>
            </div>
        </div>

    <script>
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user = getCookie("username");
  if (user != "") {
    //alert("Welcome again " + user);
	//location.href = "avisolegal.html";
  } else {
    user = "<?php echo $_SERVER['REMOTE_ADDR']; ?>";
	overlay.classList.add('active');
	popup.classList.add('active');
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}
function btnCerrarPopup(form)
{
    if(!form.terms.checked) {
      alert("Por favor indique que acepta los Términos y Condiciones");
      form.terms.focus();
      return false;
    }
    return true;
  }
    </script>
</body>
</html>