module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                background: '#0d1117',
                surface: '#1a1f29',
                foreground: '#e2e8f0',
                aqua: {
                    light: '#5eead4',
                    DEFAULT: '#2dd4bf',
                    dark: '#14b8a6',
                },
            },
        },
    },
    plugins: [],
}
