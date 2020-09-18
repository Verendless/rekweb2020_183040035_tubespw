// Sidenav
  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);   

  const value = document.querySelectorAll('.active');
  M.updateTextFields(value);
  
  const materialbox = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(materialbox);
// Slider END

 const slider = document.querySelectorAll('.slider');
 M.Slider.init(slider, {
     indicators: true,
     height: 500,
     transition: 600,
     inverval: 2000
 });

 //search top
  $(document).ready(function(){
    $('#search-button').click(function(){
      $('.menu-item').addClass('hide-item')
      $('.search-form').addClass('active')
      $('.close').addClass('active');
    })
    $('.close').click(function(){
      $('.menu-item').removeClass('hide-item')
      $('.search-form').removeClass('active')
      $('.close').removeClass('active');
    })
  });
  
//sort laptop
  $(document).ready(function(){
    $(document).on('click', '.sort_laptop', function(){
      var column_name = $(this).attr("id");
      var order = $(this).data("order");
      var arrow = '';

      if (order == "desc") {
        arrow = '&nbsp; <span><i class="material-icons">arrow_drop_down</i></span>';
      }
      else {
        arrow = '&nbsp; <span><i class="material-icons">arrow_drop_up</i></span>';
      }

      $.ajax({
        url:"php/sort-laptop.php",
        method:"POST",
        data:{column_name:column_name, order:order},
        success:function(data)
        {
          $('#content').html(data);
          $('#'+column_name+'').append(arrow);

        }
      })
    });
  });

//sort backned laptop
  $(document).ready(function(){
    $(document).on('click', '.backend_sort_laptop', function(){
      var column_name = $(this).attr("id");
      var order = $(this).data("order");
      var arrow = '';

      if (order == "desc") {
        arrow = '&nbsp; <span><i class="material-icons">arrow_drop_down</i></span>';
      }
      else {
        arrow = '&nbsp; <span><i class="material-icons">arrow_drop_up</i></span>';
      }

      $.ajax({
        url:"php/backend-sort-laptop.php",
        method:"POST",
        data:{column_name:column_name, order:order},
        success:function(data)
        {
          $('#table-laptop').html(data);
          $('#'+column_name+'').append(arrow);

        }
      })
    });
  });

//sort brand
  $(document).ready(function(){
    $(document).on('click', '.sort_brand', function(){
      var column_name = $(this).attr("id");
      var order = $(this).data("order");
      var arrow = '';

      if (order == "desc") {
      arrow = '&nbsp; <span><i class="material-icons">arrow_drop_down</i></span>';
      }
      else {
        arrow = '&nbsp; <span><i class="material-icons">arrow_drop_up</i></span>';
      }

      $.ajax({
        url:"php/sort-brand.php",
        method:"POST",
        data:{column_name:column_name, order:order},
        success:function(data)
        {
          $('#content').html(data);
          $('#'+column_name+'').append(arrow);

        }
      })
    });
  });

//sort brand backend
  $(document).ready(function(){
    $(document).on('click', '.sort_brand_backend', function(){
      var column_name = $(this).attr("id");
      var order = $(this).data("order");
      var arrow = '';

      if (order == "desc") {
      arrow = '&nbsp; <span><i class="material-icons">arrow_drop_down</i></span>';
      }
      else {
        arrow = '&nbsp; <span><i class="material-icons">arrow_drop_up</i></span>';
      }

      $.ajax({
        url:"php/backend-sort-brand.php",
        method:"POST",
        data:{column_name:column_name, order:order},
        success:function(data)
        {
          $('#table-brand').html(data);
          $('#'+column_name+'').append(arrow);

        }
      })
    });
  });

//sort user
  $(document).ready(function(){
    $(document).on('click', '.sort_user', function(){
      var column_name = $(this).attr("id");
      var order = $(this).data("order");
      var arrow = '';

      if (order == "desc") {
      arrow = '&nbsp; <span><i class="material-icons">arrow_drop_down</i></span>';
      }
      else {
        arrow = '&nbsp; <span><i class="material-icons">arrow_drop_up</i></span>';
      }

      $.ajax({
        url:"php/sort-user.php",
        method:"POST",
        data:{column_name:column_name, order:order},
        success:function(data)
        {
          $('#table-user').html(data);
          $('#'+column_name+'').append(arrow);

        }
      })
    });
  });




// ajax menu 
  $(document).ready(function(){
    var trigger = $('#menu li a'),
        content = $('#content');

    trigger.on('click', function(){
      var $this = $(this)
      target = $this.data('target');

    content.load(target + '.php');

    return false;
    })
  })
  
// Update Values Form
  $(document).ready(function() {
  M.updateTextFields();
  });







