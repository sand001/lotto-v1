// Tailwind CSS Configuration
// Configuración personalizada de Tailwind para Lotto Sorteos

if (typeof tailwind !== 'undefined') {
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: {
            DEFAULT: 'hsl(142 76% 36%)',
            foreground: 'hsl(0 0% 100%)',
            dark: 'hsl(142 76% 28%)',
          },
          secondary: {
            DEFAULT: 'hsl(45 100% 51%)',
            foreground: 'hsl(142 30% 15%)',
          },
          background: 'hsl(0 0% 100%)',
          foreground: 'hsl(142 30% 15%)',
          muted: {
            DEFAULT: 'hsl(142 20% 96%)',
            foreground: 'hsl(142 15% 45%)',
          },
          border: 'hsl(142 20% 90%)',
        },
        fontFamily: {
          sans: ['Inter', 'system-ui', 'sans-serif'],
          display: ['Montserrat', 'system-ui', 'sans-serif'],
        },
        borderRadius: {
          lg: '0.75rem',
          md: 'calc(0.75rem - 2px)',
          sm: 'calc(0.75rem - 4px)',
        },
      },
    },
  };
}

