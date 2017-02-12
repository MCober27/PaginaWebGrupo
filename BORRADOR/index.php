<?php
include_once "headerMenu.php";
if(isset($_GET["home"])){
    ?>
    <script>
        document.onload=iluminar_actual(0);
</script>
<?php
    include_once "home.php";
}else if(isset($_GET["actividades"])){
    ?>
    <script>
        document.onload=iluminar_actual(1);
    </script>
    <?php
    include_once "actividades.php";
}else if(isset($_GET["galeria"])){
    ?>
    <script>
        document.onload=iluminar_actual(2);
    </script>
    <?php
    include_once "galeria.php";
}else if(isset($_GET["contacto"])){

    if(isset($_POST["formulario"])){
        include_once "respuesta.php";
    }else{
    include_once "contacto.php";
    	}
    ?>
    <script>
        document.onload=iluminar_actual(7);
    </script>
    <?php
}else{
    ?>
    <script>
        document.onload=iluminar_actual(0);
    </script>
    <?php
    include_once "home.php";
}
include_once "footer.php";
?>
