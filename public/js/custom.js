 $.ajaxSetup({
      headers: {
        'X-XSRF-Token': $('meta[name="_token"]').attr('content')
      }
    });
$(document).ready(function(){
  $('.article_link').click(function(e){
      e.preventDefault();
      $.ajax({
        url: '/articles',
        type:"GET",
        dataType: "json",

        success: function (data)
        {
          console.log(data);
          $('.list-article').append(data);
        },

        error: function (xhr, status)
        {
          console.log(xhr.error);
        }
      });

  });

});
