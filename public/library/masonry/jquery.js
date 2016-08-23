$('.grid').masonry({
  // set itemSelector so .grid-sizer is not used in layout
 columnWidth: '.grid-sizer',
itemSelector: '.grid-item',
percentPosition: true,
gutter: 10,
// stamp elements
stamp: '.stamp',
fitWidth: true,
originLeft: false
})
