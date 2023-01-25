$(document).ready(function() {
  $('#table_id').DataTable({
    ajax: {
      url: 'http://localhost:8080/projects/pearl-project/api/donor/index.php',
      dataSrc: ''
    },
    columns: [
      { data: 'id' },
      { data: 'firstName' },
      { data: 'lastName' },
      { data: 'region.name' },
      { data: 'bloodGroup' },
    ],
    ordering: false
  });
});