export default {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  content: ["./src/**/*.{html,js}"],
  theme: {
    screens: {
      's': '350px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    }
  },
  variants: {},
  plugins: [],
}
