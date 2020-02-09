module.exports = {
  theme: {
    extend: {
      width: {
        '96': '24rem',
      }
    },
    fontFamily: {
      'sans': ['Roboto', '"Open+Sans"', '-apple-system', 'BlinkMacSystemFont'],
      'serif': ['Georgia', 'Cambria'],
      'mono': ['SFMono-Regular', 'Menlo'],
      'myriad': ['myriad-pro', 'sans-serif'],
      'modak': ['Modak', 'cursive'],
      'chicle': ['Chicle', 'cursive'],
    },
    height: {
      sm: '8px',
      md: '16px',
      lg: '24px',
      xl: '48px',
      xxl: '500px',
    }
  },
  variants: {
    backgroundColor: ['responsive', 'hover', 'focus', 'active'],
    fontSize: ['responsive', 'hover']
  },
  plugins: []
}
