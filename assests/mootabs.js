var showFunction = function() {
    //resets all the styles before it morphs the current one

    $$('.hiddenM').setStyles({
        'display': 'none',
        'opacity': 0,
        'background-color': '#fff',
        'font-size': '16px'
    });

    //here we start the morph and set the styles to morph to
    this.start({
        'display': 'block',
        'opacity': 1,
        'background-color': '#d3715c',
        'font-size': '31px'
    });
};

window.addEvent('domready', function() {
    var elOneM = $('contentoneM');
    var elTwoM = $('contenttwoM');
    var elThreeM = $('contentthreeM');
    var elFourM = $('contentfourM');
    //create morph object

    elOneM = new Fx.Morph(elOneM, {
        link: 'cancel'
    });

    elTwoM = new Fx.Morph(elTwoM, {
        link: 'cancel'
    });

    elThreeM = new Fx.Morph(elThreeM, {
        link: 'cancel'
    });

    elFourM = new Fx.Morph(elFourM, {
        link: 'cancel'
    });

    $('VkM').addEvent('click', showFunction.bind(elOneM));
    $('OkM').addEvent('click', showFunction.bind(elTwoM));
    $('FbM').addEvent('click', showFunction.bind(elThreeM));
    $('TwM').addEvent('click', showFunction.bind(elFourM));
});