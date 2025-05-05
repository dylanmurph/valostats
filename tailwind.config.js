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
                mid: '#161b22',
                foreground: '#e2e8f0',
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
        },

    },
    plugins: [],
}
