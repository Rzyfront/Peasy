/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      colors: {
        color1: 'White',
        color2: '#1E232C',
        color3: '#35C2C1',
        color3hover: '#0085c0',
        color4: '#6A707C',
        color5: '#8391A1',
        color6: '#E8ECF4'
      }
    }
  },
  plugins: [import('daisyui')]
}
