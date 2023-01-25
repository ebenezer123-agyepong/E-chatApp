$(document).ready(function() {
  $('#table_id').DataTable({
    ajax: {
      url: 'http://localhost:8080/projects/pearl-project/api/user/index.php',
      dataSrc: ''
    },
    columns: [
      {data: "id"},
      {data: "name"},
      {data: "username"},
    ],
    ordering: false
  });

  
});