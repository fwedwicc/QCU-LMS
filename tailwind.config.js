/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./src/**/*.{php,js}", 
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "ghost-white": "#F4F4FF", // Background & Input Color
        "corn-flower-blue": "#4E4C76", // Heading
        "deep-koamaru": "#36355C", // Paragraph
        quartz: "#D8D5FF", // Popover Border
        "lav-sant": "#EDEDFF", // Nav and Side Bar
        // Input
        lavender: "#DFDFF9", // Input Outline
        "moody-blue": "#8383B8", // Placeholder
        "witty-blue": "#C1BCFF", // Icon in Input
        // Primary Button
        "neon-blue": "#4F46E5", // Primary Button & Input Clicked Border & Links
        "free-speech-blue": "#4038C1", // Primary Button Hover
        perano: "#B4B0FF", // Primary Button Clicked Ring
        // Secondary Button
        "ghost-lavender": "#E4E2FF", // Ghost Button & Accordion Header
        "lavender-blue": "#D2CFFF", // Ghost Button Hover & Accordion Header Outline & Nav and Side Bar Border
        "deep-lav-blue": "#C4BFFD", // Ghost Button Clicked Ring
        // Task Button
        "off-green": "#E1EEE3", // Task Button
        camarone: "#1D8339", // Task Button Text & Border
        "granny-apple": "#BEE8C5", // Task Button Hover
        chinook: "#9AD7A4", // Task Button Clicked Ring
        // Material Button
        solitude: "#E2EAFF", // Material Button
        "royal-blue": "#4673E5", // Material Button Text & Border
        "hawkes-blue": "#C5D5FF", // Material Button Hover
        "tropical-blue": "#ABC3FF", // Material Button Clicked Ring
        // Accordion
        "purple-blue": "#CBC9F4", // Accordion Outline
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ]
}