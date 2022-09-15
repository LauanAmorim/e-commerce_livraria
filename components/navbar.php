<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LITERAU</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./lancamento.php">Lançamentos</a>
        </li>
        <li class="nav-item dropdown me-4">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="./categoria.php?cat='Design'"
                >Design</a
              >
            </li>
            <li>
              <a
                class="dropdown-item"
                href="./categoria.php?cat='Infraestrutura'"
                >Infra Estrutura</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="./categoria.php?cat='Dados'"
                >Banco de dados</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="./categoria.php?cat='Front-end'"
                >Front-End</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="./categoria.php?cat='Mobile'"
                >Mobile</a
              >
            </li>
          </ul>
        </li>
        <form class="d-flex" role="search">
          <input
            class="form-control me-4"
            type="search"
            placeholder="Buscar"
            aria-label="Buscar"
          />
          <button class="btn" type="submit">Pesquisar</button>
        </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <?php if(empty($_SESSION['ID'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="./formlogin.php">
            <span class="bi bi-box-arrow-in-right"> Login</span>
          </a>
        </li>
        <?php } else {
          $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]'");
          $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
        ?>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="bi bi-person-circle"> <?php echo $exibe_usuario['nm_usuario']; ?></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./sair.php">
            <span class="bi bi-door-open-fill">Logout</span>
          </a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
