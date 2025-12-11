<script>
 
  let params = new URLSearchParams(window.location.hash.substr(1)); 
  let viewData = {
    'entry': params.get("esc_entry"),
    'context': params.get("esc_context"),
  };

  let entities = {
    main: 'https://datakatalog.helsingborg.se/store/' + viewData.context + '/resource/' + viewData.entry,
    relation: 'http://purl.org/dc/terms/relation'
  };

  fetch('https://datakatalog.helsingborg.se/store/' + viewData.context + '/entry/' + viewData.entry + '?includeAll&limit=50&sort=title&prio=List&format=application/json') 
  .then(response => response.json())
  .then(data => console.log(data.metadata[entities.main][entities.relation]));
</script>
