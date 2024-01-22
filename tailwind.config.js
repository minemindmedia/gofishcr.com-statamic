//--------------------------------------------------------------------------
// Tailwind configuration
//--------------------------------------------------------------------------
//
// Use the Tailwind configuration to completely define the current sites
// design system by adding and extending to Tailwinds default utility
// classes. Various aspects of the config are split inmultiple files.
//

/** @type {import('tailwindcss').Config} */
module.exports = {
  // The various configurable Tailwind configuration files.
  presets: [
    require('tailwindcss/defaultConfig'),
    require('./tailwind.config.typography.js'),
    require('./tailwind.config.peak.js'),
    require('./tailwind.config.site.js'),
  ],
  // Configure files to scan for utility classes (JIT).
  content: [
    './resources/views/**/*.blade.php',
    './resources/views/**/*.html',
    './resources/js/**/*.js',
    './content/**/*.md',
    './vendor/studio1902/**/*.blade.php',
    './vendor/studio1902/**/*.html',
    './vendor/studio1902/**/*.js',
  ],
  safelist: [],
  theme: {
    colors: {
      'bright-green': '#beef00',
      'electric-red': '#ff0028',
      'deep-green': '#657a00',
      'power-blue': '#1400c6',
      'white': '#ffffff',
      'black': '#000000',
      'bubble-gum': '#ff77e9',
      'bermuda': '#78dcca',
    },
  },
}
