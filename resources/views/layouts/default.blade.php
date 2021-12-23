<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  <!-- <div class="container">
    @yield('content')
  </div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('#category').on('change', function () {
        var categoryID = $(this).val();
        if (categoryID) {
          $.ajax({
            url: '/getCourse/' + categoryID,
            type: "GET",
            data: {
              "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function (data) {
              if (data) {
                $('#course').empty();
                $('#course').append('<option hidden>Choose Sub Category</option>');
                $.each(data, function (key, course) {
                  $('select[name="category_sub_id"]').append('<option value="' + course.id + '">' + course.name +
                    '</option>');
                });
              } else {
                $('#course').empty();
              }
            }
          });
        } else {
          $('#course').empty();
        }
      });
    });
  </script>

</body>

</html> 