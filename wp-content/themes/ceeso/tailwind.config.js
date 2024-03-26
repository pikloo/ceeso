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
        }
    }
},
  plugins: [],
}
