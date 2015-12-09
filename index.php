<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Meta -->
  <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, width=device-width, minimal-ui">
  <!-- Title -->
  <title>Image Directory Viewer</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav>
      <select>
        <option value="">Select Icon Set</option>
        <option value="android">Android</option>
        <option value="entypo">Entypo</option>
        <option value="emoji">Google Emoji</option>
        <option value="ios">iOS</option>
        <option value="nova">Nova</option>
        <option value="social">Social</option>
        <option value="windows">Windows</option>
      </select>
    </nav>

    <div>

    </div>

  <!-- Javascripts -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script>

    $('select').change(function() {
      var selection = $(this).val();
      $.ajax({
       url: "scripts/get_" + selection + ".php",
       type: "POST",
       dataType: "HTML",
           success: function( data ) {
       jQuery('body > div').html(data);
           },
           error: function(jqXHR, data ) {
       alert ('Ajax request Failed.');
       }
       });
    });
  </script>
</body>
</html>
