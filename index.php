<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <!-- Add Modal -->
  <div class="modal fade" id="Student_Addmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Enter required crateria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <dv class="col-md-12">
              <div class="error message">

              </div>
            </dv>

            <div class="col-md-6">
              <label for="">First Name</label>
              <input type="text" class="form-control fname">
            </div>
            <div class="col-md-6">
              <label for="">Last Name</label>
              <input type="text" class="form-control lname">
            </div>
            <div class="col-md-6">
              <label for="">Class</label>
              <input type="text" class="form-control class">
            </div>
            <div class="col-md-6">
              <label for="">Section</label>
              <input type="text" class="form-control section">
            </div>
            <div class="col-md-6">
              <label for="">Book-name</label>
              <input type="text" class="form-control book_name">
            </div>
            <div class="col-md-6">
              <label for="">Issue-date</label>
              <input type="date" class="form-control issue_date">
            </div>
            <div class="col-md-6">
              <label for="">Expiry-date</label>
              <input type="date" class="form-control expiry_date">
            </div>

          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary student_add_ajax">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- view Modal -->
  <div class="modal fade" id="StudentViewModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Student Detail View</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <dv class="col-md-12">
              <div class="error message">

              </div>
            </dv>

            <h4 >ID = <span class="id_view"></span></h4>
            <h4 >First Name = <span class="fname_view"></span></h4>
            <h4 >Last Name = <span class="lname_view"></span></h4>
            <h4 >Class = <span class="stud_class_view"></span></h4>
            <h4 >Section = <span class="section_view"></span></h4>
            <h4 >Book Name = <span class="book_name_view"></span></h4>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
<!-- <div class="modal fade" id="StudentEditModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
            <input type = "hidden" id = "id_edit">

            <div class="col-md-12">
              <div class="error-message-update">

              </div>
            </div>
            <div class="col-md-6">
              
              <label for="">First Name</label>
              <input type="text" id ="edit_fname"  class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Last Name</label>
              <input type="text" id ="edit_lname" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Class</label>
              <input type="text" id ="edit_class" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Section</label>
              <input type="text" id ="edit_section" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Book Name</label>
              <input type="text" id ="edit_book_name" class="form-control">
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_update_ajax edit_btn">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


<!-- Edit model-->

<div class="modal fade" id="StudentEditModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="exampleModalLabel">Edit Student Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>   
        <div class="modal-body">
          <div class="row">
            <input type = "hidden" id = "id_edit">

            <div class="col-md-12">
              <div class="error-message-update">

              </div>
            </div>
            <div class="col-md-6">
              
              <label for="">First Name</label>
              <input type="text" id ="edit_fname"  class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Last Name</label>
              <input type="text" id ="edit_lname" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Class</label>
              <input type="text" id ="edit_class" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Section</label>
              <input type="text" id ="edit_section" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary student_update_ajax edit_btn">Update</button>
        </div>
      </div>
    </div>
  </div>
  



  <div class="container">


    <h1>Hello, world!</h1>
    <br>
    <h1><button type="button" class="btn btn-primary float" data-bs-toggle="modal" data-bs-target="#Student_Addmodel">
        ADD
      </button></h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">fname</th>
          <th scope="col">lname</th>
          <th scope="col">Class</th>
          <th scope="col">Section</th>
          <th scope="col">Book-name</th>
          <th scope="col">Issue-date</th>
          <th scope="col">Expiry-date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="studentdata">
      </tbody>

    </table>
  </div>


  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script>

    $(document).ready(function () {
      getdata();


      //for view
      $(document).on("click", ".viewbtn", function () {
        var stud_id = $(this).closest('tr').find('.stud_id').text();

        $.ajax({
          type: "POST",
          url: "ajax-crud/code.php",
          data: {
            'checking_view': true,
            'stud_id': stud_id,
          },
          success: function (response) {
            $.each(response, function (key, studview) {
              $('.id_view').text(studview['id']);
              $('.fname_view').text(studview['fname']);
              $('.lname_view').text(studview['lname']);
              $('.stud_class_view').text(studview['class']);
              $('.section_view').text(studview['section']);
              $('.book_name_view').text(studview['book_name']);
            })
            $('#StudentViewModel').modal('show');

          }
        });
      })



      //for add

      $('.student_add_ajax').click(function (e) {
        e.preventDefault();

        var fname = $('.fname').val();
        var lname = $('.lname').val();
        var stu_class = $('.class').val();
        var section = $('.section').val();
        var book_name = $('.book_name').val();
        var issue_date = $('.issue_date').val();
        var expiry_date = $('.expiry_date').val();

        if (fname != '' & lname != '' & stu_class != '' & section != '' & book_name != '' & issue_date != '' & expiry_date != '') {
          $.ajax({
            type: "POST",
            url: "ajax-crud/code.php",
            data: {
              'checking_add': true,
              'fname': fname,
              'lname': fname,
              'class': stu_class,
              'section': section,
              'book_name': book_name,
              'issue_date': issue_date,
              'expiry_date': expiry_date,
            },
            success: function (response) {

              console.log(response);
              $('#Student_Addmodel').modal('hide');



              $('.message-show').append('<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Hey! </strong> ' + response + '.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            }
          })
          // });
        } else {
          $('.message-show').append('<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Hey! </strong> Please enter all fields.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        }
      })


      //for edit

     $(document).on("click",".edit_btn",function(){
      var stud_id = $(this).closest('tr').find('.stud_id').text();

       $.ajax({
        type: "POST",
        url: "ajax-crud/code.php",
        data: {
          'checking_edit':true,
          'stud_id': stud_id,
        },
        success: function (response) {

          $.each(response, function (key, studedit) { 
            $('#id_edit').val(studedit['id']);
            $('#edit_fname').val(studedit['fname']);
            $('#edit_lname').val(studedit['lname']);
            $('#edit_class').val(studedit['class']);
            $('#edit_section').val(studedit['section']);
            $('#edit_book_name').val(studedit['book_name']);
          });

          $('#StudentEditModel').modal('show');
          
        }
       });



     })
    

     //for update

     $('.student_update_ajax').click(function(e){
      e.preventDefault();

      var stud_id = $('#id_edit');
      var fname = $('#edit_fname');
      var lname = $('#edit_lname');
      var stu_class = $('#edit_class');
      var section = $('#edit_section');
      var book_name = $('#edit_book_name');

      if(fname != '' & lname != '' & stu_class != '' & section != '' & book_name != ''){
        $.ajax({
          type: "POST",
          url: "ajax-crud/code.php",
          data: {
            'checking_update': true,
            'stud_id' : stud_id,
            'fname': fname,
            'lname': lname,
            'class':stu_class,
            'section':section,
          },
          success: function (response) {
            
            console.log(response);
              $('#StudentEditModel').modal('hide');
              $('.message-show').append('<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Hey! </strong> '+response+'.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
              $('.studentdata').html(" ");
              getdata();

          }
        });
      }

     })

    })

     
    
    






    function getdata() {


      $.ajax({
        type: "GET",
        url: "ajax-crud/fetch.php",
        success: function (response) {
          console.log(response);
          if (response.length > 0) {


            $.each(response, function (key, value) {

              $('.studentdata').append('<tr>'
                + '<th scope="row" class="stud_id">' + value['id'] + '</th>'
                + '<td>' + value['fname'] + '</td>'
                + '<td>' + value['lname'] + '</td>'
                + '<td>' + value['class'] + '</td>'
                + '<td>' + value['section'] + '</td>'
                + '<td>' + value['book_name'] + '</td>'
                + '<td>' + value['issue_date'] + '</td>'
                + '<td>' + value['expiry_date'] + '</td>'
                + '<td><a href="#" class = "badge btn btn-info viewbtn">VIEW</a>'
                + '<a href="#" class = "badge btn btn-primary edit_btn">EDIT</a>'
                + '<a href="#" class = "badge btn btn-danger">DELETE</a> </td>'
                + '</tr>'
              )

            });
          } else {
            $('.studentdata').append('<tr> <td> ' + response.message + '  </td> </tr>'
            )

          }
        }
      });
    }



  </script>



</body>

</html>