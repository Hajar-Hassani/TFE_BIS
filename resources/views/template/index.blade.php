<!DOCTYPE html>
<html lang="en">
<head>
  @include('template.partials._head')
</head>

<body>
  <div id="app">
    <!-- HEADER -->
      <header-component></header-component>

    <!--CONTENU PRINCIPAL-->
    <main>
      <div>
        <router-view></router-view>
      </div>
    </main>

    <!-- FOOTER -->
    <footer-component></footer-component>
  </div>

  <!-- SCRIPT -->
   @include('template.partials._scripts')
</body>
</html>
