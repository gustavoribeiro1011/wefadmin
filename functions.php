<!-- Functions -->
<script>
  function openPage(page,param) {

    if (page == 'admin') {
      //carregar pagina
      $("#main").load("components/admin/index.php");

    }

    if (page == 'dashboard') {
      //carregar pagina
      $("#main").load("components/reports/report1/index.php");
    }

    if ( page == 'users' ) {
      $("#main").load("components/users/users.php");
    }

    if ( page == 'permission') {
      $("#main").load("components/permission/permission.php?id="+param);
    }

  }
</script>