module.exports = {
    // future: {
    //     removeDeprecatedGapUtilities: true,
    //     purgeLayersByDefault: true,
    //     defaultLineHeights: true,
    //     standardFontWeights: true
    // },
    theme: {
        extend: {
            colors: {
                'tp-black': '#151E15',
                'tp-white' : '#ffffff',
                'tp-plants': '#84A882',
                'tp-mint': '#D7F2D5',
                'tp-rose': '#F5DAD5',
                'tp-ocean': '#87A2A8',
                'tp-sky': '#D8E8F2'
                // indigo: {
                //     light: '#b3bcf5',
                //     DEFAULT: '#5c6ac4',
                //     dark: '#202e78',
                // }
            },
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
                serif: ['Lora', 'serif'],
                cursive: ['Coming Soon', 'cursive']
            },
        },
    },
    variants: {
        backgroundColor: ['hover', 'focus']
    },
    plugins: [],
}
