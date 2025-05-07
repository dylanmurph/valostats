// tailwind.config.js
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                background: '#1a202a',
                surface: '#242e3b',
                mid: '#1f2731',
                foreground: '#cbcbcb',
                border: '#2c313a',
                grayMuted: '#94a3b8',
                error: '#ef4444',
                warning: '#facc15',
                success: '#22c55e',
                aqua: {
                    light: '#5eead4',
                    DEFAULT: '#2dd4bf',
                    dark: '#14b8a6',
                    hover: '#0d9488',
                },
            },
            fontFamily: {
                sans: ['Montserrat', 'ui-sans-serif', 'system-ui'],
            },
        },
    },
    plugins: [],
}
