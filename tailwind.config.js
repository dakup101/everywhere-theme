module.exports = {
    content: [
        './views/*.php',
        './index.php',
        './components/*.php',
        './header.php',
        './footer.php',
        './src/ts/functions/*.ts',
        './inc/*.php',
        './woocommerce/*.php',
        './woocommerce/*/*.php'
    ],
    theme: {
        colors: {

            'dark': '#222',
            'white': '#ffffff',
            'accent' : '#f3c50f',
            "transparent" : "transparent",
            "current" : "currentColor"
        },

        container: {
            padding: {
                DEFAULT: '1rem',
                md: '2rem',
                lg: '1rem',
            },
            maxWidth: '1280px',
            center: true,
            screens: {
                DEFAULT: '100%',
                xs: '100%',
                sm: '100%',
                md: '100%',
                lg: '1280px',
            }
        },
        extend: {
            fontFamily: {
                'sans': ['Hanken-Grotesk', 'sans-serif'], 
                'title' : ['Source-Serif-4', 'serif']
            },
        }
    },
    plugins: []
}