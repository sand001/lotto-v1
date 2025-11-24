<!--=================================

FAQ - PREGUNTAS FRECUENTES

==================================-->
<?php
// FAQ Component

//=================================

// ARRAY DE PREGUNTAS Y RESPUESTAS

//=================================
$faqs = [
  [
    'question' => '¿CÓMO SE ELIGE A LOS GANADORES?',
    'answer' => 'Todos nuestros sorteos se realizan en base a la Lotería Nacional para la Asistencia Pública mexicana. El ganador de Lotto Sorteos será el participante cuyo número de boleto coincida con las últimas cifras del primer premio ganador de la Lotería Nacional (las fechas serán publicadas en nuestra página oficial).'
  ],
  [
    'question' => '¿QUÉ SUCEDE CUANDO EL NÚMERO GANADOR ES UN BOLETO NO VENDIDO?',
    'answer' => 'Se elige un nuevo ganador realizando la misma dinámica en otra fecha cercana (se anunciará la nueva fecha). Esto significa que, ¡Tendrías el doble de oportunidades de ganar con tu mismo boleto!'
  ],
  [
    'question' => '¿DÓNDE SE PUBLICA A LOS GANADORES?',
    'answer' => 'En nuestra página oficial de Facebook Lotto Sorteos puedes encontrar todos y cada uno de nuestros sorteos anteriores, así como las transmisiones en vivo con Lotería Nacional y las entregas de premios a los ganadores!'
  ],
  [
    'question' => '¿CUÁNDO RECIBO MI PREMIO?',
    'answer' => 'Una vez anunciado el ganador, nos pondremos en contacto contigo para coordinar la entrega del premio. Los premios se entregan de forma segura y verificada.'
  ]
];
?>
<section id="faq" class="py-20 bg-muted">
  <div class="container mx-auto px-4">
    <div class="max-w-3xl mx-auto">
      <!--=================================

      ENCABEZADO DE SECCIÓN

      ==================================-->
      <div class="text-center mb-12">
        <h2 class="font-display font-bold text-4xl md:text-5xl text-primary mb-4">
          PREGUNTAS FRECUENTES
        </h2>
        <p class="text-muted-foreground text-lg">
          Encuentra respuestas a las preguntas más comunes sobre nuestros sorteos
        </p>
      </div>

      <!--=================================

      ACORDEÓN DE FAQ

      ==================================-->
      <div class="space-y-4">
        <?php foreach ($faqs as $index => $faq): ?>
        <div class="faq-item bg-background rounded-lg border-border shadow-soft overflow-hidden">
          <button 
            class="faq-trigger w-full px-6 py-4 flex items-center justify-between hover:bg-muted/50 transition-colors text-left"
            data-index="<?php echo $index; ?>"
          >
            <span class="font-display font-semibold text-primary">
              <?php echo htmlspecialchars($faq['question']); ?>
            </span>
            <svg class="faq-icon w-5 h-5 text-primary transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-content hidden px-6 pb-4 text-foreground">
            <?php echo htmlspecialchars($faq['answer']); ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

