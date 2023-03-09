<!--TODO: Footer, menu-->
{assign var="cssdir" value="../web/css/"}
{assign var="jsdir" value="../web/js/"}
{assign var="jquerycdn" value="https://code.jquery.com/jquery-3.6.4.js"}
{assign var="materialcss" value="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"}
{assign var="materialicons" value="https://fonts.googleapis.com/icon?family=Material+Icons"}
{assign var="materialjs" value="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"}
<html>
<head>
  <title>{$name}</title>
  <!-- Jquery JavaScript -->
  <script src="{$jquerycdn}" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="{$cssdir}base.css">
  <!-- js -->
  <script src="{$jsdir}main.js"></script>

  <!-- Materialize CSS -->
  <link rel="stylesheet" href="{$materialcss}">
  <!-- Material Icons -->
  <link href="{$materialicons}" rel="stylesheet">
  <!-- Materialize JavaScript -->
  <script src="{$materialjs}"></script>

</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="?page=home" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="?page=home">Home</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="?page=home">Home</a></li>

  </ul>
  <div class="mainBody">
    {include file=$content}
  </div>
  <footer>
    Footercontent
  </footer>
</body>

</html>