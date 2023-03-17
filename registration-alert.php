<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
<link rel="stylesheet" href="popup_style.css">  
</head>
<body>

    <div class="popup popup--icon -error js_error-popup popup--visible">
        <div class="popup__background"></div>
        <div class="popup__content">
            <h3 class="popup__content__title">
                <strong>Error</strong>
                </h1>
                <p style="color: red;">User is already registered with this email.</p>
                <p>
                   <a href="registraton.php" style="text-decoration: none; color: white;"> <button class="button button--error" data-for="js_error-popup">Close</button></a>
                </p>
        </div>
    </div>
<script>
    var addButtonTrigger = function addButtonTrigger(el) {
        el.addEventListener('click', function() {
            var popupEl = document.querySelector('.' + el.dataset.for);
            popupEl.classList.toggle('popup--visible');
        });
    };

    Array.from(document.querySelectorAll('button[data-for]')).
    forEach(addButtonTrigger);
</script>
</body>
</html>


