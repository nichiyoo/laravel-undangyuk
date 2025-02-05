<div class="d-flex gap-2">
  <a href="javascript:void(0)" class="lang-select" data-lang="id">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/255px-Flag_of_Indonesia.svg.png"
      alt="ID" width="20" height="20" class="rounded-circle me-2 shadow-sm">
  </a>
  <a href="javascript:void(0)" class="lang-select" data-lang="en">
    <img
      src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png"
      alt="EN" width="20" height="20" class="rounded-circle lang-select shadow-sm">
  </a>
</div>

<div id="google_translate_element" style="display:none"></div>

@pushOnce('scripts')
  <script>
    $(document).ready(function() {
      $(".lang-select").click(function() {
        var language = $(this).attr('data-lang');
        var options = document.querySelector("#google_translate_element select");
        for (var i = 0; i < options.children.length; i++) {
          var option = options.children[i];
          if (option.value == language) {
            options.selectedIndex = i;
            options.dispatchEvent(new Event('change'));
            break;
          }
        }
      });
    });
  </script>

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: "id"
      }, 'google_translate_element');
    }
  </script>

  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>
@endpushOnce
