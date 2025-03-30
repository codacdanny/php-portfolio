/** @type {import('tailwindcss').Config} */

export default {
	corePlugins: {
		preflight: false,
	},
	content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
	important: "#root",
	theme: {
		fontWeight: {
			normal: "400",
			semibold: "500",
			bold: "600",
		},
		fontSize: {
			xs: "0.625rem", // 10px
			sm: "0.75rem", // 12px
			md: "0.875rem", // 14px
			base: "1rem", // 16px
			lg: "1.25rem", // 20px
			xl: "1.5rem", // 24px
			"2xl": "1.953rem", // 31.248px
			"3xl": "2.441rem", // 39.056px
			"4xl": "3.052rem", // 48.832px
		},

		screens: {
			"2xs": "375px",
			xs: "425px",
			sm: "640px",
			md: "834px",
			lg: "1024px",
			xl: "1280px",
			"1xl": "1440px",
			"2xl": "2000px",
		},

		fontFamily: {
			sans: ["Roboto", "ui-sans-serif", "system-ui"],
		},
		
	},
	plugins: [],
};
