/*
 * Author: Shekhar Joshi
 * 
 */

function intializeLoader() {
    loaderObj = $('.loader').ClassyLoader({
        width: 200, // width of the loader in pixels
        height: 200, // height of the loader in pixels
        displayOnLoad: true,
        percentage: 0, // percent of the value, between 0 and 100
        speed: 10, // miliseconds between animation cycles, lower value is faster
        roundedLine: true, // whether the line is rounded, in pixels
        showRemaining: true, // how the remaining percentage (100% - percentage)
        fontFamily: 'Helvetica', // name of the font for the percentage
        fontSize: '50px', // size of the percentage font, in pixels
        showText: true, // whether to display the percentage text
        diameter: 90, // diameter of the circle, in pixels
        fontColor: 'rgba(33, 154, 179, 1)', // color of the font in the center of the loader, any CSS color would work, hex, rgb, rgba, hsl, hsla
        lineColor: 'rgba(33, 154, 179,1)', // line color of the main circle
        remainingLineColor: 'rgba(33, 154, 179,0.2)', // line color of the remaining percentage (if showRemaining is true)
        lineWidth: 3, // the width of the circle line in pixels
        startFrom: 0
    });
}

