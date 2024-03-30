import defaultTheme from 'tailwindcss/defaultTheme';

module.exports = {
    future: {
        hoverOnlyWhenSupported: true,
    },
    content: [
        "./resources/views/*.blade.php",
        "./resources/js/*.js",
        "./resources/js/**",
        "./resources/**",
        "./index.html",
        "./src/**/*.{vue,js,ts,jsx,tsx}",
    ],
   theme: {
        colors: {
        'primary': '#FFD3C9',
      'white': '#FFFFFF',
      'blue': '#1fb6ff',
      'purple': '#7e5bef',
      'pink': '#ff49db',
      'orange': '#ff7849',
      'green': '#13ce66',
      'yellow': '#ffc82c',
      'gray-dark': '#273444',
      'gray': '#8492a6',
      'gray-light': '#d3dce6',
  
    },
    extend: {
            fontFamily: {
                sans: ['Raleway', ...defaultTheme.fontFamily.sans],
            },

        },
  plugins: [],
}
}
