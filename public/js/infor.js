for(var i = 1; i<=12;i++){
  $('.card.card'+i)
  .popup({
    hoverable:true,
    popup:  $('.popup.pop'+i)
  })
;
}