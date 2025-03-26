import defaultTheme from "tailwindcss/defaultTheme";

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
                sans: ["Manrope", "sans-serif"], // Đặt Raleway làm font mặc định
            },
        },
    },
    corePlugins: {
        fontFamily: true, // Đảm bảo Tailwind áp dụng font mới
    },
    plugins: [],
};
