$(document).ready(function() {
  $('#player_info').DataTable({
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    "order": [
      [2, "desc"]
    ],
    columnDefs: [
   {
       targets: 0,
       className: 'dt-body-center'
   },
   {
       targets: 1,
       className: 'dt-body-center'
   },
 ]
  })
});
