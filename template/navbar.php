<!--=================================

NAVBAR

==================================-->
<?php
// Navbar Component
?>
<nav class="fixed top-0 left-0 right-0 z-50 bg-primary shadow-md">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between h-20">
      <!--=================================

      LOGO

      ==================================-->
      <div class="flex items-center gap-3">
        <div class="w-12 h-12 bg-primary-foreground rounded-full flex items-center justify-center">
          <span class="text-primary font-display font-bold text-xl">LS</span>
        </div>
        <div class="text-primary-foreground">
          <h1 class="font-display font-bold text-xl leading-tight">LOTTO</h1>
          <p class="text-xs font-semibold tracking-wide">SORTEOS</p>
        </div>
      </div>

      <!--=================================

      NAVEGACIÓN ESCRITORIO

      ==================================-->
      <div class="hidden md:flex items-center gap-6">
        <a href="#inicio" class="text-primary-foreground hover:text-secondary transition-colors duration-200 font-medium">
          Inicio
        </a>
        <a href="#faq" class="text-primary-foreground hover:text-secondary transition-colors duration-200 font-medium">
          Preguntas Frecuentes
        </a>
        <a href="#contacto" class="text-primary-foreground hover:text-secondary transition-colors duration-200 font-medium">
          Contacto
        </a>
        <a href="#pagos" class="text-primary-foreground hover:text-secondary transition-colors duration-200 font-medium">
          Métodos de Pago
        </a>
        <button class="bg-secondary text-secondary-foreground px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-opacity">
          Comprar Boletos
        </button>
      </div>

      <!--=================================

      BOTÓN MENÚ MÓVIL

      ==================================-->
      <button
        id="mobile-menu-btn"
        class="md:hidden text-primary-foreground"
        aria-label="Toggle menu"
      >
        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <!--=================================

    NAVEGACIÓN MÓVIL

    ==================================-->
    <div id="mobile-menu" class="md:hidden overflow-hidden transition-all duration-300 max-h-0">
      <div class="flex flex-col gap-3 pb-4">
        <a href="#inicio" class="text-primary-foreground hover:text-secondary transition-colors duration-200 font-medium py-2 mobile-nav-link">
          Inicio
        </a>
        <a href="#faq" class="text-primary-foreground hover:text-secondary transition-colors duration-200 font-medium py-2 mobile-nav-link">
          Preguntas Frecuentes
        </a>
        <a href="#contacto" class="text-primary-foreground hover:text-secondary transition-colors duration-200 font-medium py-2 mobile-nav-link">
          Contacto
        </a>
        <a href="#pagos" class="text-primary-foreground hover:text-secondary transition-colors duration-200 font-medium py-2 mobile-nav-link">
          Métodos de Pago
        </a>
        <button class="bg-secondary text-secondary-foreground px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-opacity w-full">
          Comprar Boletos
        </button>
      </div>
    </div>
  </div>
</nav>

