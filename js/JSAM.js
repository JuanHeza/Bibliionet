<script language=JavaScript>
//addClass puede ser cambiado por className, lo intente con ambos pero no funciono, es para no tener que copiar toda la sidebar solo para activar una seccion
function Inicio() {
	document.title='Inicio'
	document.getElementById("Inicio").addClass('active')
}

function QueEs() {
	document.title='¿Que Es?'
	document.getElementById("Cuerpo").innerHTML= '';
}

function Quienes() {
	document.title='Quienes'
	document.getElementById("Quienes").addClass('active')
	document.getElementById("Cuerpo").innerHTML= '';
}

function Calendarios() {
	document.title='Calendarios'
	document.getElementById("Calendarios").addClass('active')
	document.getElementById("Cuerpo").innerHTML= '';
}

function Eventos() {
	document.title='Eventos';
	document.getElementById("Eventos").addClass('active')
	var div=document.getElementById("FecHora");
	div.parentNode.removeChild(div);
	document.getElementById("Cuerpo").innerHTML= '';
}

function Avisos() {
	document.title='Avisos'
	document.getElementById("Avisos").addClass('active')
	document.getElementById("Cuerpo").innerHTML= '';
}

function Usuarios() {
	document.title='Usuarios'
	document.getElementById("Usuario").addClass('active')
	document.getElementById("Cuerpo").innerHTML= '';
}

function Contacto() {
	document.title='Contacto'
	document.getElementById("Contacto").addClass('active')
	document.getElementById("Cuerpo").innerHTML= '';
}

function Soporte() {
	document.title='Soporte Tecnico'
	document.getElementById("Soporte").addClass('active')
	document.getElementById("Cuerpo").innerHTML= '';
}

function Galeria(){
	document.title='Galeria'
	document.getElementById("Cuerpo").innerHTML= '';
}

function Subir(){
	document.title='Sunir Galeria'
	document.getElementById("Cuerpo").innerHTML= '';
}
</script>
