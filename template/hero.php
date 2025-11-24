<!--=================================

HERO

==================================-->
<?php
// Hero Component
?>
<section id="inicio" class="relative min-h-screen flex items-center pt-20">
  <!--=================================

  IMAGEN DE FONDO CON OVERLAY

  ==================================-->
  <div 
    class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
    style="background-image: url('assets/hero-money.jpg');"
  >
    <div class="absolute inset-0 bg-gradient-to-b from-primary/95 via-primary/85 to-background/95"></div>
  </div>

  <!--=================================

  CONTENIDO PRINCIPAL

  ==================================-->
  <div class="container mx-auto px-4 relative z-10">
    <div class="max-w-4xl mx-auto text-center">
      <!--=================================

      BADGES DE CONFIANZA

      ==================================-->
      <div class="flex items-center justify-center gap-4 mb-6 animate-in fade-in slide-in-from-bottom-4 duration-700">
        <div class="flex items-center gap-2 bg-primary-foreground/10 backdrop-blur-sm px-4 py-2 rounded-full">
          <svg class="text-secondary w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <span class="text-primary-foreground font-semibold text-sm">Sorteos Seguros</span>
        </div>
        <div class="flex items-center gap-2 bg-primary-foreground/10 backdrop-blur-sm px-4 py-2 rounded-full">
          <svg class="text-secondary w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <span class="text-primary-foreground font-semibold text-sm">100% Transparente</span>
        </div>
      </div>

      <!--=================================

      TÍTULO PRINCIPAL

      ==================================-->
      <h1 class="font-display font-bold text-5xl md:text-7xl text-primary-foreground mb-6 animate-in fade-in slide-in-from-bottom-6 duration-700 delay-150">
        Gana Premios <span class="text-secondary">Increíbles</span>
      </h1>

      <!--=================================

      SUBTÍTULO

      ==================================-->
      <p class="text-xl md:text-2xl text-primary-foreground/90 mb-8 animate-in fade-in slide-in-from-bottom-8 duration-700 delay-300 max-w-2xl mx-auto">
        Participa en sorteos legales basados en la Lotería Nacional Mexicana. Tu oportunidad de cambiar tu vida está aquí.
      </p>

      <!--=================================

      BOTÓN CTA (CALL TO ACTION)

      ==================================-->
      <div class="animate-in fade-in slide-in-from-bottom-10 duration-700 delay-500">
        <button class="bg-secondary text-secondary-foreground px-12 py-6 text-lg rounded-lg font-bold hover:opacity-90 transition-opacity">
          -LISTA DE DISPONIBLES-
        </button>
      </div>
    </div>
  </div>
</section>

