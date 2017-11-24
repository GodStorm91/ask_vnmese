<section class="hero is-success is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <span class="navbar-burger burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="app" class="navbar-menu">
          <nav class="tabs">
            <div class="container">
              <ul>
                <router-link tag="li" to="/" exact>
                  <a>Home</a>
                </router-link>
                <router-link tag="li" to="/about">
                  <a>About</a>
                </router-link>
                <router-link tag="li" to="/editor">
                  <a>Editor</a>
                </router-link>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
  </div>
</section>