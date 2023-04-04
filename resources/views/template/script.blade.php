<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('AdminLTE/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('AdminLTE/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('AdminLTE/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('AdminLTE/plugins/dropzone/min/dropzone.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<!-- Page specific script -->
<script>
    window.addEventListener('close-modal', event =>{
 $('#addModal').modal('hide');
 $('#updateDataModal').modal('hide');
 $('#updateDataModal').modal('hide');
})

window.setTimeout(function(){
    $(".alert").fadeTo(500,0).slideUp(500,function(){
      $(this).remove();
    })
  },3000)

</script>
{{-- <script type="text/javascript">
    $(document).ready(function(){
    var table = $('#datatable').DataTable();
    // start edit record
    table.on('click','edit',function(){
        $tr = $(this).closest('tr');
        if($($tr).hasClass('child')){
            $tr=$tr.prev('.parent');
        }
        var data = table.row($tr).data();
        console.log(data);
        $('#coaname').val(data[1]);
        $('#tipe').val(data[2]);
        $('#dept').val(data[3]);

        $('#editFormcoa').attr('action','/akuncoa/'+data[0]);
        $('#modalEditcoa').modal('show');
    })
}

)

</script> --}}

<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate1').datetimepicker({
          format: 'DD/MM/YYYY' //L
      });
      $('#reservationdate2').datetimepicker({
          format: 'DD/MM/YYYY' //L
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

      //Date range picker
      $('#reservation').daterangepicker({
        locale: {
          format: 'DD/MM/YYYY '
        }
      })
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'DD/MM/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })
    })
    // // BS-Stepper Init
    // document.addEventListener('DOMContentLoaded', function () {
    //   window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    // })

    // // DropzoneJS Demo Code Start
    // Dropzone.autoDiscover = false

    // // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    // var previewNode = document.querySelector("#template")
    // previewNode.id = ""
    // var previewTemplate = previewNode.parentNode.innerHTML
    // previewNode.parentNode.removeChild(previewNode)

    // var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    //   url: "/target-url", // Set the url
    //   thumbnailWidth: 80,
    //   thumbnailHeight: 80,
    //   parallelUploads: 20,
    //   previewTemplate: previewTemplate,
    //   autoQueue: false, // Make sure the files aren't queued until manually added
    //   previewsContainer: "#previews", // Define the container to display the previews
    //   clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    // })

    // myDropzone.on("addedfile", function(file) {
    //   // Hookup the start button
    //   file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
    // })

    // // Update the total progress bar
    // myDropzone.on("totaluploadprogress", function(progress) {
    //   document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    // })

    // myDropzone.on("sending", function(file) {
    //   // Show the total progress bar when upload starts
    //   document.querySelector("#total-progress").style.opacity = "1"
    //   // And disable the start button
    //   file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    // })

    // // Hide the total progress bar when nothing's uploading anymore
    // myDropzone.on("queuecomplete", function(progress) {
    //   document.querySelector("#total-progress").style.opacity = "0"
    // })

    // // Setup the buttons for all transfers
    // // The "add files" button doesn't need to be setup because the config
    // // `clickable` has already been specified.
    // document.querySelector("#actions .start").onclick = function() {
    //   myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    // }
    // document.querySelector("#actions .cancel").onclick = function() {
    //   myDropzone.removeAllFiles(true)
    // }
    // // DropzoneJS Demo Code End
</script>