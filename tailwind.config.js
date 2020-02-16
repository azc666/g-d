module.exports = {
  theme: {
    extend: {
      screens: {
        'xxs': '375',
        'xs': '414',
        '2xl': '1440px',
      },
      width: {
        '30': '7rem',
        '72': '20rem',
        '96': '24rem',
        '108': '30rem',
        '116': '34rem',
        '122': '38rem',
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
