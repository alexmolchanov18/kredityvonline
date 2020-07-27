(function(){;var c={percent_element:document.getElementsByClassName('percent_result')[0],
        cash_element:document.getElementsByClassName('cash_result')[0],
        coefficient:2e-4,calculate:function calculate(){var g=e.value*this.coefficient*d.value,h=e.value+g,j=f.decimalToString(f.roundNum(g,2)),k=f.decimalToString(f.roundNum(h,2));
            this.percent_element.innerHTML=j,this.cash_element.innerHTML=k + ' грн'},
        get_credit_button:document.getElementsByClassName('get_credit')[0]},

    d={additional:[],slider:document.getElementsByClassName('days_slider')[0],
        add_button:document.getElementsByClassName('add_day')[0],value_element:document.getElementsByClassName('days_val')[0],
        substract_button:document.getElementsByClassName('substract_day')[0],_value:1,change:function change(g){var h=parseInt(this.slider.value),

            j=parseInt(this.slider.getAttribute('max')),k=parseInt(this.slider.getAttribute('min')),l=parseInt(this.slider.getAttribute('step'));
            'add'===g?h+=l:'substract'==g&&(h-=l),h<=j&&h>=k&&(this.value=h)},
        set value(g){for(var h in g=g<this.min?this.min:g,g=g>this.max?this.max:g,this.slider.value=g,this._value=g,
            this.value_element.value=g,this.additional)this.additional[h].innerHTML=g;f.setSliderColors(this.slider),
            c.calculate()},get value(){return parseInt(this._value)}},

    e={additional:[document.getElementsByClassName('additional_amount')[0]],
        slider:document.getElementsByClassName('amount_slider')[0],add_button:document.getElementsByClassName('add_amount')[0],
        value_element:document.getElementsByClassName('amount_val')[0],substract_button:document.getElementsByClassName('substract_amount')[0],
        _value:50,change:function change(g){var h=parseInt(this.slider.value),j=parseInt(this.slider.getAttribute('max')),
            k=parseInt(this.slider.getAttribute('min')),l=parseInt(this.slider.getAttribute('step'));'add'===g?h+=l:'substract'==g&&(h-=l),h<=j&&h>=k&&(this.value=h)},set value(g) {
            for (var h in g = g < this.min ? this.min : g, g = g > this.max ? this.max : g, this.slider.value = g, this._value = g, this.value_element.value = g, this.additional)
                this.additional[h].innerHTML = f.decimalToString(f.roundNum(g, 2));
            f.setSliderColors(this.slider), c.calculate()
        },get value() {
            return parseInt(this._value)
        }},
    f = {
        roundNum : function roundNum(g, h) {
            return Math.round(g * Math.pow(10, h)) / Math.pow(10, h)
        },
        decimalToString : function decimalToString(g) {
            return g.toFixed(2).toString().replace('.', ',')
        },
        setSliderColors : function setSliderColors(g) {
            var h = g.getAttribute('min'), j = g.getAttribute('max'), k = (g.value - h) / (j - h);
            g.style.backgroundImage = '-webkit-gradient(linear, left top, right top, color-stop(' + k + ', #FFC700), color-stop(' + k + ', #fff))'
        },
        goTop : function goTop() {
            window.scrollTo(0, 0)
        },
        setCookie : function setCookie(g, h, j) {
            var k = '', l = new Date;
            j && (l.setTime(l.getTime() + 1e3 * (60 * (60 * (24 * j)))), k = '; expires=' + l.toUTCString()), document.cookie = g + '=' + h + k + '; path=/'
        }
    };

    e.slider.addEventListener('input',function(){
        return e.value=e.slider.value;
    }),
        d.slider.addEventListener('input',
            function(){return d.value=d.slider.value}),
        d.add_button.addEventListener('click',function(){return d.change('add')}),d.substract_button.addEventListener('click',function(){return d.change('substract')}),
        d.value_element.addEventListener('change',function(){return d.value=d.value_element.value}),
        e.add_button.addEventListener('click',function(){return e.change('add')}),e.substract_button.addEventListener('click',function(){return e.change('substract')}),
        e.value_element.addEventListener('change',function(){return e.value=e.value_element.value}),
        c.get_credit_button.addEventListener('click',function(){var g={ammount:e.value,period:d.value,clientid:window.clientId};f.setCookie('pozyczky.online',JSON.stringify(g),1)}),
        function(){f.setSliderColors(e.slider),f.setSliderColors(d.slider),
            d.value=d.slider.value,e.value=e.slider.value,c.calculate()}();

})();

//  button_top.addEventListener('click',function(){ window.location='/form.php?source=1'; });
//  button_bottom.addEventListener('click',function(){ window.location='/form.php?source=2'; });

$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
        $('nav').addClass('scrolled');
    } else {
        $('.scrollup').fadeOut();
        $('nav').removeClass('scrolled');
    }
});

$('.scrollup, .scrolltop').click(function() {
    $("html, body").animate({
        scrollTop : 0
    }, 600);
    return false;
});

$(window).load(function() {
    jQuery("#status").fadeOut();
    jQuery("#preloader").delay(500).fadeOut("fast");
});