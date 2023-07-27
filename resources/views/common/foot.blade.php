<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" js/jquery.min.js"></script>
    <script src=" js/popper.min.js"></script>
    <script src=" js/bootstrap.min.js"></script>
    <script src=" js/feather.min.js"></script>
    <script src=" js/bootstrap-select.min.js"></script>
    <script src=" js/jquery.nstSlider.min.js"></script>
    <script src=" js/owl.carousel.min.js"></script>
    <script src=" js/visible.js"></script>
    <script src=" js/jquery.countTo.js"></script>
    <script src=" js/chart.js"></script>
    <script src=" js/plyr.js"></script>
    <script src=" js/tinymce.min.js"></script>
    <script src=" js/slick.min.js"></script>
    <script src=" js/jquery.ajaxchimp.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/datePicker.js"></script>
    <script src="js/upload-input.js"></script>

    <script src="js/map.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

     @if(Session::has('alerttype'))
        <script>
                var message ='{{ Session('message') }}';
                var message1 ='{{ Session('message1') }}';
                var type ='{{ Session('alerttype') }}';
                Swal.fire(message,message1,type);
        </script>
    @endif
    @php
        Session::pull('message');
        Session::pull('message1');
        Session::pull('alerttype');
    @endphp



    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places" ></script>
    <script>
        $(document).ready(function () {
            $("#latitudeArea").addClass("d-none");
            $("#longtitudeArea").addClass("d-none");
        });
    </script>
    <script>
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());

                $("#latitudeArea").removeClass("d-none");
                $("#longtitudeArea").removeClass("d-none");
            });
        }
    </script>




   <script>
        var i=0;
        var j=0;
        var k=0;
          $(".add_education_btn").click(function(e){
            e.preventDefault();
            ++i;
            $("#education").append('<div class="post-content-wrapper">'+
                     '<div id="education" col-form-label class="row" >'+
                      '<label class="col-md-9 col-form-label">Education</label>'+
                      '<div class="form-group">'+
                           '<button class="btn btn-danger remove_education_btn">Remove</button>'+
                      ' </div>'+
                      '<div class="col-md-12">'+
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Qualification" name="education['+i +'][qualification]" required>'+
                        '</div>' +
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Institute" name="education['+i +'][institute]" required >'+
                        '</div>'+
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Period" name="education['+i +'][period]" required >'+
                        '</div>'+
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Percentage" name="education['+i +'][percentage]" required >'+
                        '</div>'+
                        '</div>'+
                     '</div>'+
                     '</div>')
          });

          $(".add_experience_btn").click(function(e){
            e.preventDefault();
            ++j;
            $("#experience").append('<div class="post-content-wrapper">'+
                     '<div id="education" col-form-label class="row" >'+
                      '<label class="col-md-9 col-form-label">Experience</label>'+
                      '<div class="form-group">'+
                           '<button class="btn btn-danger remove_experience_btn">Remove</button>'+
                      '</div>'+
                      '<div class="col-md-12">'+
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Designation" name="experience['+j+'][designation]"required >'+
                        '</div> '+
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Company name" name="experience['+j+'][companyname]" required >'+
                        '</div>'+
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Duration" name="experience['+j+'][duration]" required >'+
                        '</div>'+
                        '<div class="form-group">'+
                          '<textarea class="form-control" placeholder="Description (Optional)" name="experience['+j+'][description]"required></textarea>'+
                        '</div>'+
                        '</div>'+
                    ' </div>'+
                     '</div>')
          });
          $(".add_skill_btn").click(function(e){
            e.preventDefault();
            ++k;
            $("#skill").append('<div class="post-content-wrapper">'+
                     '<div id="education" col-form-label class="row" >'+
                      '<label class="col-md-9 col-form-label">Professional Skills</label>'+
                      '<div class="form-group">'+
                           '<button class="btn btn-danger remove_skill_btn">Remove</button>'+
                       '</div>'+
                      '<div class="col-md-12">'+
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Skillname" name="skill['+k+'][skillname]" required>'+
                        '</div>'+
                        '<div class="form-group">'+
                          '<input type="text" class="form-control" placeholder="Rating" name="skill['+k+'][rating]" required>'+
                        '</div>'+
                        '</div>'+
                     '</div>'+
                     '</div>')
          });


          $(document).on('click','.remove_education_btn',function(e){
              e.preventDefault();
              let row_education=$(this).parent().parent();
              $(row_education).remove();
          });
          $(document).on('click','.remove_experience_btn',function(e){
              e.preventDefault();
              let row_experience=$(this).parent().parent();
              $(row_experience).remove();
          });
          $(document).on('click','.remove_skill_btn',function(e){
              e.preventDefault();
              let row_skill=$(this).parent().parent();
              $(row_skill).remove();
          });
    </script>

    <script type="text/javascript">
		function initialize() {
		    var options = {
		        types: ['(cities)'],
		        componentRestrictions: {country: "in"}
		    };
		    var input = document.getElementById('city');
		    var autocomplete = new google.maps.places.Autocomplete(input, options);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

