const tns = require('tiny-slider');
let usingLightTheme = true;

const toggleTheme = () => {
  $("link[theme]").each((i,el) => {
    if(el.hasAttribute("disabled")) el.removeAttribute("disabled");
    else el.setAttribute("disabled", "true");
  })
}

const renderView = () => {
  Array.from(document.getElementsByClassName('slide-button')).forEach( sBtn => {
    sBtn.querySelector('img').style.height = `${sBtn.offsetHeight - 4}px`
    sBtn.style.height = `${sBtn.offsetWidth / 2.5}px`
  })

  Array.from(document.getElementsByClassName('competency')).forEach( c => { c.style.height = `${c.offsetWidth}px`; })

  $('.stars').each( (i,s) => {
    if(s.textContent == "⭐⭐⭐⭐⭐") {
      $(s).addClass("glowy");
    }
  })
}

$(document).ready( () => {
  var slider = tns.tns({
    container: '.carousel',
    items: 3,
    gutter: 20,
    edgePadding: 20,
    slideBy: 1,
    mouseDrag: true,
    nextButton: "#carousel-right",
    prevButton: "#carousel-left",
    speed: 400,
    center: true,
    loop: true
  });

  $(".carousel-container").css({
    "display": "grid",
    "grid-template-columns": `30px ${$("main").width() - 60}px 30px`,
    "align-items": "center",
    "justify-content": "center"
  })

  renderView()
  $(window).resize( renderView() )

  $('.slide-button').hover( function() {
    $(this).find("img").stop()
    $(this).find("img").animate({"left": $(this)[0].offsetWidth * -0.91}, 500)
  }, function() {
    $(this).find("img").stop()
    $(this).find("img").animate({"left": ""}, 500)
  })

  $('.owl-item').click( function () {
    if($(this).hasClass("center")) {
      window.open($(this).find(".item").attr("git"), "_blank")  
    } else {
      let itemLoc = $('.owl-item').index($(this)) + 1;
      owl.trigger('to.owl.carousel', [itemLoc])
    }
  })

  $('.item').hover(function() {
    $(this).find("img").toggleClass('hov')
  }, function() {
    $(this).find("img").toggleClass('hov')
  })
  // #endregion

  // #region Utility Handlers
  $('*[link]:not(.competency)').click( function() {
    window.open($(this).attr("link"), "_blank")
  })

  Array.from(document.querySelectorAll('*[pic]')).forEach( elem => {
    elem.style.backgroundImage = `url("${elem.getAttribute("pic")}")`
  })
  // #endregion

  $('.competency').click( function() {
    $(this).toggleClass("flipped")
  })

  $('#profile-img').click( function() {
    $(this).css({filter: `hue-rotate(${Math.floor(Math.random() * 360)}deg)`})
  })

  $('#theme-toggle').click( toggleTheme )
});