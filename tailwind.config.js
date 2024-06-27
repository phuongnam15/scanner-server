/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                popi: "Poppins, sans-serif",
                meri: "Merriweather, serif",
                nutito: "Nunito, sans-serif",
            },
            borderWidth: {
                1: "1px",
            },
            boxShadow: {
                "custom-white": "0 0 3px rgba(255, 255, 255, 0.5)",
                "custom-inset": "inset 0 -4px 20px rgba(124, 57, 237, 0.5)",
                "custom-inset-pink":
                    "inset 0 -4px 20px rgba(219, 112, 147, 0.5)",
                "custom-inset-green":
                    "inset 0 -4px 20px rgba(78, 184, 76, 0.5)",
                "custom-inset-gray": "inset 0 -4px 20px rgba(53, 53, 91, 0.9)",
                "custom-gray": "0 4px 20px rgba(53, 53, 91, 0.9)",
                "custom-inset-2": "0 4px 20px rgba(111, 65, 210, 0.5)",
            },
            backgroundColor: {
                "custom-hover": "rgba(124, 57, 237, 0.25)",
                "custom-hover2": "rgba(219, 112, 147, 0.25)",
                "custom-hover3": "rgba(53, 53, 91, 0.25)",
                "custom-hover4": "rgba(78, 184, 76, 0.25)",
            },
            letterSpacing: {
                wider1: "0.07em",
            },
            screens: {
                "3xl": "1700",
            },
            backgroundImage: {
                "custom-radial":
                    "radial-gradient(34.98% 34.98% at 50% 50%, #725bda 0%, rgba(6, 19, 45, 0) 100%)",
            },
            scale: {
                200: "2",
                220: "2.2",
                250: "2.5",
            },
        },
    },
    plugins: [],
};
