module.exports = {
    important: true,
    content: ["./**/*.php"],
    theme: {
        extend: {
            fontFamily: {
                title: ["Arimo", "Arial", "sans-serif"],
                body: ["Open Sans", "Arial", "sans-serif"]
            },
            colors: {
                "primary": "#256EFA",
                "secondary": "#212D3B",
                "third": "#27323A",
                "quarter": "#00007F"
            },
            backgroundImage: {
                start: "url('./assets/images/start-bg.png')"
            },
            animation: {
                enterIn: "enterIn 2s ease-in forwards"
            },
            keyframes: {
                enterIn: {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 }
                }
            },
            variants: {
                animation: ["motion-safe"]
            }

        }
    },
    plugins: [],
}
