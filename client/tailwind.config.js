/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html}"],
  theme: {
    screens: {
      'mobile': '320px',
      'tablet': '415px',
      'laptop': '768px',
      'desktop': '1024px',
    },
    extend: {},
    fontFamily: {
      'inter': 'Inter, sans-serif',
    }
  },
  plugins: [],
}
