module.exports = {
  theme: {
    extend: {
      screens: {
        xxs: '375px',
        xs: '414px',
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280',
        '2xl': '1440px',
      },
      spacing: {
        '18': '4.5rem',
        '22': '5.5rem',
        '26': '6.5rem',
        '28': '7rem',
        '30': '7.5rem',
        '36': '9rem',
        '38': '9.5rem',
        '42': '10.5rem',
        '44': '11rem',
        '60': '12rem',
        '68': '14rem',
        '72': '18rem',
        '80': '20rem',
        '88': '22rem',
        '96': '24rem'
      },
      width: {
        '28': '7rem',
        '30': '7.5rem',
        '44': '11rem',
        '96': '384px',
        '72': '18rem',
        '80': '20rem',
        '88': '22rem',
        '108': '32rem',
        '116': '34rem',
        '172': '46rem',
        '216': '64rem',
        '122': '608px',
        '650': '650px',
        '700': '700px'
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
