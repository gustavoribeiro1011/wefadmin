<!-- Functions -->
<script>
function openPage(page){

if ( page == 'admin' ) {
//carregar pagina
$("#section-admin").load("components/admin/index.php");

//ocultar
$("#section-dashboard").css("display","none");

//mostrar
$("#section-admin").css("display","block");
}

if ( page == 'dashboard' ) {
//ocultar
$("#section-admin").css("display","none");

//mostrar
$("#section-dashboard").css("display","block");

}
}
</script>