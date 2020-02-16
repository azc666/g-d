module.exports = {
  theme: {
    extend: {
      screens: {
        'xxs': '375px',
        'xs': '414px',
        '2xl': '1440px',
      },
      width: {
        '30': '112px',
        '72': '320px',
        '96': '384px',
        '108': '480px',
        '116': '544px',
        '122': '608px',
        '650': '650px'
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
      lg: '100px',
      lg2: '200px',
      lg4: '400px',
      lg45: '450px',
      xxl: '500px',
      lg6: '600px',
    },
    paddingBottom: {
      pb20: '350px',
    },
    marginBottom: {
      mb350: '350px',
    }
  },
  variants: {
    backgroundColor: ['responsive', 'hover', 'focus', 'active'],
    fontSize: ['responsive', 'hover']
  },
  plugins: []
}
