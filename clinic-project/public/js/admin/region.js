$(document).ready(function() {
  $('#table_id').DataTable({
    ajax: {
      url: 'http://localhost:8080/projects/pearl-project/api/region/index.php',
      dataSrc: ''
    },
    columns: [
      {data: "id"},
      {data: "name"}
    ],
    ordering: false
  });
});