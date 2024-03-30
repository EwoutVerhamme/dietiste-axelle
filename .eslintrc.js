module.exports = {
    env: {
        node: true,
    },
    plugins: ["tailwindcss"],
    extends: [
        "eslint:recommended",
        "plugin:vue/vue3-recommended",
        "plugin:tailwindcss/recommended",
        "prettier",
    ],
    rules: {
        // override/add rules settings here, such as:
        "vue/no-unused-vars": "error",
        "vue/require-default-prop": "off",
        "vue/prop-name-casing": ["error", "camelCase" | "snake_case"],

        "tailwindcss/classnames-order": "warn",
        "tailwindcss/enforces-negative-arbitrary-values": "warn",
        "tailwindcss/enforces-shorthand": "warn",
        "tailwindcss/migration-from-tailwind-2": "warn",
        "tailwindcss/no-arbitrary-value": "off",
        "tailwindcss/no-custom-classname": "warn",
        "tailwindcss/no-contradicting-classname": "error",
    },
};
